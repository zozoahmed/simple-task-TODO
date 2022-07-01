<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\userController;
use App\HTTP\Controllers\taskController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('Users/Create',[userController :: class , 'create']);
Route::post('Users/Store',[userController :: class , 'store']);
Route::get('Users',[userController :: class , 'index']);

Route::get('Users/Delete/{id}' ,[userController :: class ,'remove']);
Route::get('Users/edit/{id}' ,[userController :: class , 'edit']);
Route::put('Users/Update/{id}',[userController :: class , 'update']);
#################################

Route::get('Task/Create',[taskController :: class , 'create']);
Route::post('Task/Store',[taskController :: class , 'store']);
Route::get('Task',[taskController :: class , 'index']);

Route::get('Task/delete/{id}' ,[taskController :: class ,'remove']);
Route::get('Task/edit/{id}' ,[taskController :: class , 'edit']);
Route::put('Task/Update/{id}',[taskController :: class , 'update']);



