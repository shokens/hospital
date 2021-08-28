<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Doctor\DoctorController;
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

Route::get('/', function (){
    return view('welcome');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::prefix('user')->name('user.')->group(function(){
    
    Route::middleware(['guest:web','PreventBackHistory'])->group(function(){
        Route::view('/login','dashboard.user.login')->name('login');
     
        Route::post('/check',[UserController::class, 'check'])->name('check');
      
    });

    Route::middleware(['auth:web','PreventBackHistory'])->group(function(){
      
        Route::get('/home',[UserController::class, 'index'])->name('home');
        Route::view('/appointment','dashboard.user.appointment')->name('appointment');
        Route::get('/appointment',[UserController::class, 'appointment'])->name('appointment');
        Route::view('/sent_appointment','dashboard.user.sent_appointment')->name('sent_appointment');
        Route::get('/sent_appointment',[UserController::class, 'sent_appointment'])->name('sent_appointment');
        Route::get('/doctor_reply',[UserController::class, 'doctor_reply'])->name('doctor_reply');
        Route::get('delete_reply/{id}', [UserController::class, 'delete_reply'])->name('delete_reply');
        Route::post('/create',[UserController::class, 'create'])->name('create');
        Route::view('/profile','dashboard.user.profile')->name('profile');
        Route::get('delete_appoint/{id}', [UserController::class, 'delete_appoint'])->name('delete_appoint');
        Route::post('/logout',[UserController::class, 'logout'])->name('logout');
    });
});


Route::prefix('admin')->name('admin.')->group(function(){
    
    Route::middleware(['guest:admin','PreventBackHistory'])->group(function(){
        Route::view('/login','dashboard.admin.login')->name('login');
        Route::post('/admin_check',[AdminController::class, 'admin_check'])->name('admin_check');
      
    });

    Route::middleware(['auth:admin','PreventBackHistory'])->group(function(){
        // Route::view('/home','dashboard.admin.home')->name('home');
        
        Route::get('/home',[AdminController::class, 'index'])->name('home');
        Route::view('/profile','dashboard.admin.profile')->name('profile');
        Route::view('/add_doctor','dashboard.admin.add_doctor')->name('add_doctor');
        Route::get('/doctor_record',[AdminController::class, 'doctor_record'])->name('doctor_record');
        Route::post('/create_doctor',[AdminController::class, 'create_doctor'])->name('create_doctor');
        Route::get('/edit_doctor/{id}', [AdminController::class, 'edit_doctor'])->name('edit_doctor');
        Route::post('/update_doctor/{id}',[AdminController::class, 'update_doctor'])->name('update_doctor');
        Route::get('delete_doc/{id}', [AdminController::class, 'delete_doc'])->name('delete_doc');
        
        Route::view('/add_outbreak','dashboard.admin.add_outbreak')->name('add_outbreak');
        Route::post('/create_outbreak',[AdminController::class, 'create_outbreak'])->name('create_outbreak');
        Route::get('/appointment_record',[AdminController::class, 'appointment_record'])->name('appointment_record');
        Route::get('/outbreak_record',[AdminController::class, 'outbreak_record'])->name('outbreak_record');
        Route::get('/edit_outbreak/{id}', [AdminController::class, 'edit_outbreak'])->name('edit_outbreak');
        Route::post('/update_outbreak/{id}',[AdminController::class, 'update_outbreak'])->name('update_outbreak');
        Route::get('delete_out/{id}', [AdminController::class, 'delete_out'])->name('delete_out');
        Route::post('/logout',[AdminController::class, 'logout'])->name('logout');
    });
});



Route::prefix('doctor')->name('doctor.')->group(function(){
    
    Route::middleware(['guest:doctor','PreventBackHistory'])->group(function(){
        Route::view('/login','dashboard.doctor.login')->name('login');
      
        Route::post('/create',[DoctorController::class, 'create'])->name('create');
         Route::post('/check',[DoctorController::class, 'check'])->name('check');
      
    });

    Route::middleware(['auth:doctor','PreventBackHistory'])->group(function(){
        
        Route::get('/home',[DoctorController::class, 'index'])->name('home');
        Route::view('/profile','dashboard.doctor.profile')->name('profile');
        Route::view('/add_patient','dashboard.doctor.add_patient')->name('add_patient');
        Route::post('/create_user',[DoctorController::class, 'create_user'])->name('create_user');
        Route::get('/outbreak_record',[DoctorController::class, 'outbreak_record'])->name('outbreak_record');
        Route::view('/appointment_record','dashboard.doctor.appointment_record')->name('appointment_record');
        Route::get('/appointment_record',[DoctorController::class, 'appointment_record'])->name('appointment_record');
        Route::get('delete_out/{id}', [DoctorController::class, 'delete_out'])->name('delete_out');
        Route::get('/doctor_reply/{id}', [DoctorController::class, 'doctor_reply'])->name('doctor_reply');
       

        Route::post('/replied_message/{id}',[DoctorController::class, 'replied_message'])->name('replied_message');
        Route::post('/logout',[DoctorController::class, 'logout'])->name('logout');
    });
});