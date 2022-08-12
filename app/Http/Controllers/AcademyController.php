<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class AcademyController extends Controller
{
    private $subjects;

    public function index(){
        $this->subjects = Subject::where('status', 1)->orderBy('id', 'desc')->get();
        return view('website.home.home', ['subjects' => $this->subjects]);
    }


    public function userLogin(){
        return view('login-register.login');
    }










}
