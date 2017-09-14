<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{

    protected $table = 'users';

    protected $fillable = [
        'id','name', 'email','phone','account', 'password','avatar'
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getListUser(){
        $data = User::select('id','name','email','phone','account','avatar')->get();
        return $data;
    }

    public function getUser($id){
        $data = User::select('id','name','email','phone','account','avatar')->where('id',$id)->first();
        return $data;
    }
    public function getUserObject($id){
        $data = User::findOrFail($id);
        return $data;
    }
    public function checkLogin($account,$password){
        $password = md5($password);
        $data = User::where('account',$account)->where('password',$password)->first();
        if(!empty($data)){
            $_SESSION['InfoUser'] = $data;
            return true;
        }else{
            return false;
        }
    }
}

?>