<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Testimonial;

class FrontendController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::all();

        return view('index', compact('testimonials'));
    }

    public function about()
    {
        return view('about');
    }

    public function doctors()
    {
        return view('doctors');
    }

    public function departments()
    {
        $departments = Department::all();

        return view('departments', compact('departments'));
    }

    public function doctorProfile()
    {
        return view('doctor-profile');
    }

    public function appointment()
    {
        return view('appointment');
    }

    public function contact()
    {
        return view('contact');
    }
}
