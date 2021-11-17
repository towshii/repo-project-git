<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\availabilityController;
use App\Http\Controllers\conrecController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/





Route::get('/auth/logout',[loginController::class,'logout'])->name('auth.logout');
Route::get('/back',[availabilityController::class,'back']);
Route::post('/auth/save',[loginController::class,'save'])->name('auth.save');
Route::post('/auth/check',[loginController::class,'check'])->name('auth.check');
Route::get('delete/{id}',[availabilityController::class,'destroy']);
Route::get('cancel/{id}/{avail_id}',[conrecController::class,'destroy']);
Route::post('update',[availabilityController::class,'update']);
Route::view('about','bout');
Route::get('/',[loginController::class,'home']);
// Route::get('/', function () {
//     return view('welcome',);
// });

Route::group(['middleware'=>['authcheck']],function(){
    Route::get('home',[loginController::class,'homesweet']);
   
    Route::post('searchh',[loginController::class,'asawhere']);
    Route::view('hum','welcome');
    
    Route::view('log','trylogin');
    Route::view('reg','tryregister');
    Route::view('instructordashboard','dashboardi');
    Route::get('edit/{id}',[availabilityController::class,'edit']);
    Route::post('addreq',[conrecController::class,'store']);
    Route::get('updatereq/{id}/{avail_id}',[conrecController::class,'updatereq']);
    Route::get('cancelreq/{id}/{avail_id}',[conrecController::class,'cancelreq']);
    Route::get('cancelrej/{id}',[conrecController::class,'cancelrej']);
    Route::get('rejectreq/{id}',[conrecController::class,'rejectreq']);
    Route::get('deletereq/{id}',[conrecController::class,'deletereq']);
    Route::get('consultdone/{id}/{avail_id}',[conrecController::class,'trandone']);
   //student 
  
   Route::get('request/{id}',[loginController::class,'requestform']);
   Route::get('student',[loginController::class,'sdashboard']);
   Route::get('mySchedules',[loginController::class,'avail']);
   Route::get('myRequests',[loginController::class,'myreq']);
   //instructor 
   Route::get('add',[availabilityController::class,'add']);
   Route::post('add',[availabilityController::class,'store']);
   Route::get('Instructor',[loginController::class,'idashboard']);//dashboard for instructor
   Route::get('/instructor/dashboard',[loginController::class,'idashboard']);
});

