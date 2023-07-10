<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\ForgotPasswordController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('login',[AuthController::class,'index'])->name('login');
Route::post('post-login',[AuthController::class,'postLogin'])->name('login.post');
Route::get('registration',[AuthController::class,'registration'])->name('register');
Route::post('post-registration',[AuthController::class,'postRegistration'])->name('register.post');
Route::get('dashboard',[AuthController::class,'dashboard'])->name('dashboard');
Route::get('logout',[AuthController::class,'logout'])->name('logout');

Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

Route::get('contact-list', [ContactController::class, 'index'])->name('contact.list.get');
Route::get('contact-show/{contact}/', [ContactController::class, 'show'])->name('contact.show.get');
Route::post('contact-destroy/{contact}/', [ContactController::class, 'destroy'])->name('contact.destroy.post');
Route::get('create-contact', [ContactController::class, 'create'])->name('create.contact.get');
Route::post('create-contact', [ContactController::class, 'store'])->name('create.contact.post');
Route::get('update-contact/{contact}/', [ContactController::class, 'edit'])->name('update.contact.get');
Route::post('update-contact', [ContactController::class, 'update'])->name('update.contact.post');
