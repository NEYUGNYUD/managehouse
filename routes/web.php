<?php

Route::get('/', function () {
    return view('welcome');
});


route::group(['prefix'=>'admin'],function(){
    Route::get('/',['as'=>'admin',function(){
        return view('admin.layout.admin');
    }]);

    Route::get('/login',['as'=>'getLogin','uses'=>'UserController@getLogin']);
    Route::post('/login',['as'=>'postLogin','uses'=>'UserController@postLogin']);
    Route::get('/logout',['as'=>'getLogout','uses'=>'UserController@getLogout']);

    Route::get('/addUser',['as'=>'getAddUser','uses'=>'UserController@getAddUser']);
    Route::post('/addUser',['as'=>'postAddUser','uses'=>'UserController@postAddUser']);

    Route::get('/editUser/{id}',['as'=>'getEditUser','uses'=>'UserController@getEditUser']);
    Route::post('/editUser/{id}',['as'=>'postEditUser','uses'=>'UserController@postEditUser']);

    Route::get('/listUser',['as'=>'getListUser','uses'=>'UserController@getListUser']);

    Route::get('/deleteUser/{id}',['as'=>'getDeleteUser','uses'=>'UserController@getDeleteUser']);
});



