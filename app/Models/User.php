<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    private static $image;
    private static $imageName;
    private static $directory;
    private static $user;
    private static $users;
    private static $imageUrl;

    public static function getImageUrl($request){
        self::$image = $request->file('image');
        self::$imageName = self::$image->getclientOriginalName();
        self::$directory = 'admin-images/';
        self::$image->move(self::$directory, self::$imageName);
        return self::$directory.self::$imageName;
    }

    public static function newAdmin($request){
        self::$user = new User();
        self::$user->name = $request->name;
        self::$user->email = $request->email;
        self::$user->password = bcrypt($request->password);
        self::$user->image = self::getImageUrl($request);
        return self::$user->save();

    }

    public static function updateAdministrator($request, $id){
        self::$user = User::find($id);

        if($request->file('image')){
            if(file_exists(self::$user->image)){
                unlink(self::$user->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else{
            self::$imageUrl = self::$user->image;
        }

        self::$user->name = $request->name;
        self::$user->email = $request->email;
        if(isset($request->password)){
            self::$user->password = bcrypt($request->password);
        }
        self::$user->image = self::$imageUrl;
        self::$user->save();


    }














}
