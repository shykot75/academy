<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;
use Session;

class SubjectController extends Controller
{
    private $subject;
    private $subjects;


    public function index(){
        return view('teacher.subject.add');
    }

    public function create(Request $request){
       Subject::newSubject($request);
       return redirect()->back()->with('message', 'New Subject Created Successfully..');
    }

    public function manage(){
        $this->subjects = Subject::where('teacher_id', Session::get('teacher_id'))->get();
        return view('teacher.subject.manage', ['subjects' => $this->subjects]);
    }

    public function edit($id){
        $this->subject = Subject::find($id);
        return view('teacher.subject.edit', ['subject' => $this->subject]);
    }

    public function update(Request $request, $id){
        Subject::updateSubject($request, $id);
        return redirect('/manage-subject')->with('message', 'Subject Updated Successfully!!');
    }

    public function delete($id){
        $this->subject = Subject::find($id);
        if (file_exists($this->subject->image))
        {
            unlink($this->subject->image);
        }
        $this->subject->delete();
        return redirect('/manage-subject')->with('message', 'Subject Deleted Successfully..');
    }





}
