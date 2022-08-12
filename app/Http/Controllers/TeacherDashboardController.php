<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherDashboardController extends Controller
{
    Public function index(){
        return view('teacher.home.home');
    }
}
