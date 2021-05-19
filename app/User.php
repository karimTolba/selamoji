<?php

namespace App;
use Eloquent;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Illuminate\Notifications\Notifiable;

class User extends Eloquent implements Authenticatable
{
     use AuthenticableTrait;
     use Notifiable;

     protected $fillable = ['name' , 'email' , 'password'];

     protected $hidden  = ['password' , 'remember_token'];

     public function roles(){

        return $this->belongsToMany('App\Role');

     }

     public function hasAnyRole($roles){

        if(is_array($roles)){

            foreach($roles as $role){

                if($this->hasRole($role)){

                    return true;
                }

            }
        }
        else{

            if($this->hasRole($roles)){

                return true;

            }
        }

        return false;

     }

     public function hasRole($role){

        if($this->roles()->where('name' , $role)->first()){

            return true;
        }

        else

        return false;
     }


}
