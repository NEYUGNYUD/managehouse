<?php

namespace App\Http\Controllers;
use App\Http\Requests\UserRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{

    public function getLogin(){
         return view('admin.user.login');
    }

    public function getAddUser(){
        if(checkLoginAdmin()) {
            return view('admin.user.addUser');
        }else{
            return redirect()->route('getLogin')->with(['flash_messages' => 'Vui lòng đăng nhập', 'flash_level' => 'danger']);
        }
    }

    public function postAddUser(UserRequest $rq){
        if(checkLoginAdmin()) {
            $user = new User();
            $user->name = $rq->fullName ;
            $user->email = $rq->email ;
            $user->avatar = $rq->avatar ;
            $user->phone = $rq->phone ;
            $user->account = $rq->account ;
            $user->password = md5($rq->password) ;
            $user->remember_token = $rq->_token ;
            $user->save();
            return redirect()->route('getListUser')->with(['flash_messages'=>'Thêm thành công','flash_level'=>'success']);
        }else{
            return redirect()->route('getLogin')->with(['flash_messages' => 'Vui lòng đăng nhập', 'flash_level' => 'danger']);
        }
    }

    public function getListUser(){

        if(checkLoginAdmin()) {
            $user = new User();
            $listUser = $user->getListUser();
            return view('admin.user.listUser', compact('listUser', $listUser));
        }else{
            return redirect()->route('getLogin')->with(['flash_messages' => 'Vui lòng đăng nhập', 'flash_level' => 'danger']);
        }
    }

    public function getEditUser($id){
        if(checkLoginAdmin()) {
            $user = new User();
            $dataEdit = $user->getUser($id);
            return view('admin.user.editUser', compact('dataEdit', $dataEdit));
        }else{
            return redirect()->route('getLogin')->with(['flash_messages' => 'Vui lòng đăng nhập', 'flash_level' => 'danger']);
        }
    }

    public function postEditUser(Request $rq){
        if(checkLoginAdmin()) {
            $user = new User();
            $data = $user->getUserObject($rq->id);
            if (!empty($rq->password) && $rq->password == $rq->passwordAgain) {
                $data->password = md5($rq->password);
            } else {
                $data->password = $data->password;
            }
            $data->name = $rq->fullName;
            $data->email = $rq->email;
            $data->avatar = $rq->avatar;
            $data->phone = $rq->phone;
            $data->account = $rq->account;
            $data->save();
            return redirect()->route('getListUser')->with(['flash_messages' => 'Sửa thành công', 'flash_level' => 'success']);
        }else{
            return redirect()->route('getLogin')->with(['flash_messages' => 'Vui lòng đăng nhập', 'flash_level' => 'danger']);
        }
    }

    public function getDeleteUser($id){
        if(checkLoginAdmin()) {
            $user = new User();
            $user->find($id)->delete();
            return redirect()->route('getListUser')->with(['flash_messages' => 'Xóa thành công', 'flash_level' => 'success']);
        }else{
            return redirect()->route('getLogin')->with(['flash_messages' => 'Vui lòng đăng nhập', 'flash_level' => 'danger']);
        }
    }

    public function postLogin(LoginRequest $rq)
    {
        $user = new User();
        if ($user->checkLogin($rq->account, $rq->password)) {
            return redirect()->route('admin')->with(['flash_messages' => '<h4 style="text-align: center">Chào mừng đến với hệ thống quản trị <br> Mua Bán Bất Động Sản 1K</h4>', 'flash_level' => 'success']);
        } else {
            return redirect()->route('getLogin')->with(['flash_messages' => 'Đăng nhập thất bại', 'flash_level' => 'danger']);
        }
    }
    public function getLogout(){
        if(checkLoginAdmin()) {
            session_destroy();
            return redirect()->route('getLogin')->with(['flash_messages' => 'Thoát đăng nhập thành công', 'flash_level' => 'success']);
        }else{
            return redirect()->route('getLogin')->with(['flash_messages' => 'Vui lòng đăng nhập', 'flash_level' => 'danger']);
        }
    }
}
