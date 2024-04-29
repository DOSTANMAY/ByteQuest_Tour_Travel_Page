<?php

use Illuminate\Support\Facades\Route;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\HomeController;

Route::get("/home",[HomeController::class,"index"]);
Route::get("/home2",[HomeController::class,"index2"]);
Route::get("/about",[HomeController::class,"about"]);
Route::get("/booking",[HomeController::class,"booking"]);
Route::get("/service",[HomeController::class,"service"]);
Route::get("/package",[HomeController::class,"package"]);
Route::get("/contact",[HomeController::class,"contact"]);
Route::get("/blog",[HomeController::class,"blog"]);
Route::get("/gallery",[HomeController::class,"gallery"]);
Route::get("/tour",[HomeController::class,"tour"]);
Route::get("/guides",[HomeController::class,"guides"]);
Route::get("/destination",[HomeController::class,"destination"]);
Route::post('/bsubmit2',[HomeController::class,'bsubmit2']);
Route::get('/register',[HomeController::class,'register']);
Route::post('/submit',[HomeController::class,'submit']);
Route::post('/qsubmit',[HomeController::class,'qsubmit']);
Route::post('/bsubmit',[HomeController::class,'bsubmit']);
Route::get('/qdisplay',[HomeController::class,'qdisplay']);
Route::get('/bdisplay',[HomeController::class,'bdisplay']);
Route::get('/displayall',[HomeController::class,'displayall']);
Route::get('/block{blk}',[HomeController::class,'block']);
Route::get('/unblock{ublk}',[HomeController::class,'unblock']);
Route::get('/delete{del}',[HomeController::class,'delete']);
Route::get('/qdelete{del1}',[HomeController::class,'qdelete']);
Route::get('/bdelete{del2}',[HomeController::class,'bdelete']);
Route::get('/login',[HomeController::class,'login']);
Route::get('/displayclient', [HomeController::class, 'displayclient'])->name('client.display');
Route::get('/show/{id}', [HomeController::class, 'show'])->name('client.show');
Route::post('/save',[HomeController::class,'save']);
Route::post('/logout', [HomeController::class, 'logout'])->name('logout');
Route::get('/edit{ep}',[HomeController::class,'edit']);
Route::post('/update',[HomeController::class,'update']);
Route::get('/changepassword{cp}',[HomeController::class,'changepassword']);
Route::post('/newpassword',[HomeController::class,'newpassword']);
Route::get("/adminloginp1",[HomeController::class,"adminloginp1"]);
Route::get('/approve{aprv}',[HomeController::class,'approve']);
Route::get('/deny{dny}',[HomeController::class,'deny']);
Route::post('/qreply{rply}',[HomeController::class,'qreply']);
Route::get('/max_booking',[HomeController::class,'max_booking']);
Route::get('/max_query',[HomeController::class,'max_query']);


