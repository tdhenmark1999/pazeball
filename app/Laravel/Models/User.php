<?php

namespace App\Laravel\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Database\Eloquent\SoftDeletes;

use Str;


class User extends Authenticatable implements JWTSubject
{
    use Notifiable,SoftDeletes;
    protected $table = 'user';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */


 

     
    protected $fillable = [
       'about','directory','file_name','full_path','directory_banner','file_name_banner','full_path_banner','first_name', 'last_name', 'email', 'gender', 'birth_date', 'sports','province', 'city','barangay', 'wallet_balance','wallet_current','mobile_number'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $appends = ['avatar',"full_name"];

    public function getFullNameAttribute(){
        return Str::title($this->first_name . ' ' . $this->last_name);
    }

    public function getDisplayGenderAttribute(){
        if(!$this->gender)
            return '-';

        if($this->gender == "F")
            return "Female";

        return "Male";
    }

    public function getJWTIdentifier(){
        return $this->getKey();
    }
    public function getJWTCustomClaims(){
        return [];
    }

    public function videos(){
		return $this->hasMany('App\Laravel\Models\Video_upload','id','id');
	}

    public function certificates(){
        return $this->hasMany("App\Laravel\Models\Certificate","user_id","uuid");
    }
    public function address(){
        return $this->hasMany("App\Laravel\Models\Address","user_id","uuid");
    }

    public function trainings(){
        return $this->hasMany("App\Laravel\Models\Training","user_id","uuid");
    }

    public function sports(){
        return $this->hasMany("App\Laravel\Models\UserSport","user_id","id");
    }
    
  

    public function getAvatarAttribute(){

        if($this->filename){
            return "{$this->directory}/resized/{$this->filename}";
        }

        if($this->fb_id){
            return "https://graph.facebook.com/{$this->fb_id}/picture?width=310&height=310#v=1.0";
        }

        return asset('placeholder/avatar.png');
    }
}
