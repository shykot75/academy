<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Session;

class Subject extends Model
{
    use HasFactory;

    private static $image;
    private static $imageName;
    private static $directory;
    private static $imageUrl;
    private static $subject;
    private static $subjects;
    private static $message;


    public static function getImageUrl($request){
        self::$image = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'subject-images/';
        self::$image->move(self::$directory, self::$imageName);
        return self::$directory.self::$imageName;

    }

    public static function newSubject($request){
        self::$subject = new Subject();
        self::$subject->teacher_id = Session::get('teacher_id');
        self::$subject->title   = $request->title;
        self::$subject->code   = $request->code;
        self::$subject->fee   = $request->fee;
        self::$subject->short_description   = $request->short_description;
        self::$subject->long_description   = $request->long_description;
        self::$subject->image   = self::getImageUrl($request);
        self::$subject->save();
    }

    public function teacher()
    {
        return $this->belongsTo('App\Models\Teacher');
    }

    public static function updateSubject($request, $id){
        self::$subject = Subject::find($id);

        if($request->file('image'))
        {
            if (file_exists(self::$subject->image))
            {
                unlink(self::$subject->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$subject->image;
        }

        self::$subject->title    = $request->title;
        self::$subject->code    = $request->code;
        self::$subject->fee  = $request->fee;
        self::$subject->short_description = $request->short_description;
        self::$subject->long_description = $request->long_description;
        self::$subject->image   = self::$imageUrl;
        self::$subject->save();
    }

    public static function updateStatus($id){
        self::$subject = Subject::find($id);
        if(self::$subject->status == 0){
            self::$subject->status = 1;
            self::$message = 'Course Status Activated Successfully!!';
        }
        else{
            self::$subject->status = 0;
            self::$message = 'Course Status Deactivated Successfully!!';
        }
        self::$subject->save();
        return self::$message;

    }













}
