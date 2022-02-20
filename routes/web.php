<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\AdminController;


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

// Route::get('welcome', function(){
//     return view('welcome')->with("foo", "bar");
// })->name('welcome');

Route::get('/admin', [MemberController::class, 'd_confirm']);
Route::get('/payment', [MemberController::class, 'payment']);


// Route::get('/admin.register', [AdminController::class, 'register']);
Route::get('/admin.login', [AdminController::class, 'login']);
Route::post('/admin.login', [AdminController::class, 'authenticate'])->name('admin.login');
Route::post('/admin.logout', [AdminController::class, 'logout'])->name('admin.logout');

Route::post('/admin.confirm', [MemberController::class, 'confirmed']);
Route::post('/admin.pay', [MemberController::class, 'pay']);


Route::get('/member', [MemberController::class, 'index']);
Route::post('/member', [MemberController::class, 'create'])->name('member-reg');


Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->middleware(['auth']);

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index', ['referral']);