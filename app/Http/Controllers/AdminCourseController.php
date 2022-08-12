<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class AdminCourseController extends Controller
{
    private $subject;
    private $subjects;
    private $message;

    public function manage(){
        $this->subjects = Subject::orderBy('id', 'desc')->get();
        return view('admin.course-module.manage', ['subjects' => $this->subjects]);
    }

    public function detail($id){
        $this->subject = Subject::find($id);
        return view('admin.course-module.detail', ['subject' => $this->subject]);
    }

    public  function update($id){
        $this->message = Subject::updateStatus($id);
        return redirect()->back()->with('message', $this->message);
    }




}
