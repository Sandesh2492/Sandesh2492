<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController; 
use App\Http\Controllers\CustomerRegistration; 

use App\Models\customer; 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

Route::get('/customer' , function(){
    $customer = customer::all();
    echo "<pre>";
    print_r($customer->toArray());
}); 
*/
Route::get('/' , [loginControll::class, 'index']); 
Route::get('/customer' ,[RegisterController::class,'index']);  
Route::post('/customer' ,[CustomerRegistration::class,'add']);
Route::get('/customer/view-list' ,[CustomerRegistration::class,'list_show']);
Route::get('/customer/delete/{id}' ,[CustomerRegistration::class,'delete']);
Route::get('/customer/edit/{id}' ,[CustomerRegistration::class,'edit']);


  