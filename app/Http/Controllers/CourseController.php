<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function course() {
        return view('components.courses', [
            'courses' => Course::query()->latest()->get()
        ]);
    }

    public function single(Course $course) {
        return view('components.single', [
            'courses' => $course
        ]);
    }
}
