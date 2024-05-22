<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ulasan;
use App\Models\course;


class IndexController extends Controller
{
    public function dashboard()
    {
        $ulasans = ulasan::all();
        $courses = course::all();
        return view('edutech.dashboard')
        ->with('ulasans', $ulasans)
        ->with('courses', $courses);
    }
}
