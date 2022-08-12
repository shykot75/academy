<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Session;

class UserAuthController extends Controller
{
    private $check;
    private $user;


    public function newLogin(Request $request){
        if($request->check == 1)
        {
            $this->user = Teacher::where('email', $request->email)->where('status', 1)->first();
            if ($this->user)
            {
                if(password_verify($request->password, $this->user->password)) {
                    Session::put('teacher_id', $this->user->id);
                    Session::put('teacher_name', $this->user->name);
                    Session::put('teacher_code', $this->user->code);
                    Session::put('teacher_email', $this->user->email);
                    Session::put('teacher_mobile', $this->user->mobile);
                    Session::put('teacher_image', $this->user->image);
                    Session::put('teacher_status', $this->user->status);


                    return redirect('/teacher-dashboard');


                } else {
                    return redirect()->back()->with('message', 'Password is invalid.');
                }
            }
            else
            {
                return redirect()->back()->with('message', 'Email address is invalid or status is inactive.');
            }
        }

        else{
            return redirect()->back()->with('message', 'Email address is invalid or status is inactive.');
        }











    }

    public function teacherLogout(){
        Session::forget('teacher_id');
        Session::forget('teacher_name');
        Session::forget('teacher_code');
        Session::forget('teacher_email');
        Session::forget('teacher_mobile');
        Session::forget('teacher_image');
        Session::forget('teacher_status');

        return redirect('/');
    }




















}
