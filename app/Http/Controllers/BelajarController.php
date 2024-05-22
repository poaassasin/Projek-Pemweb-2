<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\materi;

class BelajarController extends Controller
{
    public function materi()
    {
        $materis = materi::all();
        return view('edutech.detailMateri')
        ->with('materis', $materis);
    }
    public function list()
    {
        $materis = materi::all();
        return view('edutech.listMateri')
        ->with('materis', $materis);
    }
}
