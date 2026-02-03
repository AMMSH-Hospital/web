<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Department;
use App\Models\Doctor;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::all();
        $doctors = Doctor::active()->where('featured_on_home', true)->take(3)->get();

        return view('index', compact('testimonials', 'doctors'));
    }

    public function about()
    {
        return view('about');
    }

    public function doctors()
    {
        $departments = Department::whereHas('doctors', function ($query) {
            $query->where('status', true);
        })->get();

        $doctors = Doctor::active()
            ->when(request('department'), function ($query) {
                $query->where('department_id', request('department'));
            })
            ->with('department')
            ->paginate(3);

        return view('doctors', compact('doctors', 'departments'));
    }

    public function departments()
    {
        $departments = Department::all();

        return view('departments', compact('departments'));
    }

    public function doctorProfile(Doctor $doctor)
    {
        $doctor->load('schedules');

        return view('doctor-profile', compact('doctor'));
    }

    public function appointment()
    {
        return view('appointment');
    }

    public function contact()
    {
        $departments = Department::active()
            ->where(function ($query) {
                $query->whereNotNull('contact_phone')
                    ->orWhereNotNull('contact_mail');
            })
            ->get();

        return view('contact', compact('departments'));
    }

    public function contactStore(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
            'subscribe' => 'nullable|boolean',
        ]);

        Contact::create($validated);

        return response()->json(['success' => true, 'message' => 'Message sent successfully!']);
    }
}
