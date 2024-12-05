<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Workout; // Tambahkan ini

class WorkoutController extends Controller
{
    //
    public function home()
{
    // Ambil data workouts dari database
    $workouts = Workout::all();

    // Kirim data ke view home.blade.php
    return view('home', compact('workouts'));
}

}
