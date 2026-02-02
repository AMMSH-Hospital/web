<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\DoctorSchedule;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function getDepartments()
    {
        $departments = \App\Models\Department::where('status', true)->get();

        return response()->json($departments);
    }

    public function getDoctors(Request $request)
    {
        $departmentId = $request->department;
        $doctors = Doctor::where('department_id', $departmentId)
            ->where('status', true)
            ->with('department') // Optional: eager load if needed
            ->get();

        return response()->json($doctors);
    }

    public function getTimeSlots(Request $request)
    {
        $doctorId = $request->doctor_id;
        $date = $request->date;
        $dayName = Carbon::parse($date)->format('l');

        $schedules = DoctorSchedule::where('doctor_id', $doctorId)
            ->where('day_name', $dayName)
            ->get();

        $slots = [];
        foreach ($schedules as $schedule) {
            $start = Carbon::parse($schedule->start_time);
            $end = Carbon::parse($schedule->end_time);

            while ($start->lt($end)) {
                $slots[] = $start->format('g:i A');
                $start->addMinutes(30);
            }
        }

        return response()->json($slots);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'department_id' => 'exists:departments,id', // Note: Frontend sends ID or Slug? Need to check. Assuming ID or Slug conversion needed.
            'doctor_id' => 'required|exists:doctors,id',
            'appointment_date' => 'required|date',
            'appointment_time' => 'required',
            'patient_name' => 'required|string',
            'patient_phone' => 'required|string',
            'patient_email' => 'nullable|email',
            'date_of_birth' => 'nullable|date',
            'gender' => 'nullable|string',
            'appointment_type' => 'nullable|string',
            'patient_type' => 'nullable|string',
            'message' => 'nullable|string',
            'medical_records' => 'nullable|file|max:5120|mimes:pdf,jpg,jpeg,png',
        ]);

        // Fix Department ID if not sent directly (frontend looks like it sends slug in select)
        // Ideally frontend should send ID, but let's handle looking up by slug if needed or adjust frontend.
        // For now, let's assume we'll fix frontend to send IDs or we look up here.
        // Looking at blade, departmentSelect values are slugs like 'cardiology'.
        // We need to fetch ID.

        // If department_id is passed (which it will be now), use it.
        // We can keep the lookup logic as fallback or remove it if frontend is updated.
        if (! $request->department_id && $request->department) {
            // Try to find by id if value is integer
            if (is_numeric($request->department)) {
                $validated['department_id'] = $request->department;
            } else {
                // Fallback to searching by name (less reliable but okay for legacy)
                $dept = \App\Models\Department::where('dept_name', 'like', $request->department)->first();
                if ($dept) {
                    $validated['department_id'] = $dept->id;
                }
            }
        }

        if ($request->hasFile('medical_records')) {
            $path = $request->file('medical_records')->store('medical-records', 'public');
            $validated['medical_records'] = $path;
        }

        Appointment::create($validated);

        return response()->json(['message' => 'Appointment booked successfully!']);
    }
}
