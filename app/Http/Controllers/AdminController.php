<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\App;
use Barryvdh\DomPDF\Facade\Pdf;

class AdminController extends Controller
{

    private $user;
    private $users;



    public function index(){
        return view('admin.administrator.add');
    }

    public function create(Request $request){
        $this->user = User::newAdmin($request);
        return redirect('/add-administrator')->with('message', 'New Admin Created Successfully..');
    }

    public function manage(){
        $this->users = User::all();
        return view('admin.administrator.manage', ['users' => $this->users]);
    }

    public function edit($id){
        $this->user = User::find($id);
        return view('admin.administrator.edit', ['user' => $this->user]);
    }

    public function update(Request $request, $id){
        User::updateAdministrator($request, $id);
        return redirect('/manage-administrator')->with('message', 'Admin Updated Successfully..');
    }

    public function delete($id){
        $this->user = User::find($id);
        if (file_exists($this->user->image))
        {
            unlink($this->user->image);
        }
        $this->user->delete();
        return redirect('/manage-administrator')->with('message', 'Admin Deleted Successfully..');

    }

    public function adminPdf(){
        $this->users = User::all();
//        $pdf = pdf::loadView('admin.administrator.admin-pdf', ['users' => $this->users]);
        $pdf = Pdf::loadView('pdf', ['users' => $this->users]);
        return $pdf->stream('dlistview_'.time().rand('999', '9999999'));
    }

    public function adminpdfshow(){
        $this->users = User::all();
        return view('admin.administrator.admin-pdf', ['users' => $this->users]);

    }








}
