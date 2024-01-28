<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\HomeController;

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

// ***************** Home routes ***********************


// ***************** Home routes ***********************
Route::get("/",[HomeController::class,"index"])->name('home');
Route::get("/contact",[HomeController::class,"contact"])->name('contact');
Route::get("/about",[HomeController::class,"about"])->name('about');
Route::get("/blog",[HomeController::class,"blog"])->name('blog');
Route::get("/help",[HomeController::class,"help"])->name('help');
Route::get("/privacy-policy",[HomeController::class,"privacy_policy"])->name('privacy-policy');
Route::get("/terms-conditions",[HomeController::class,"terms_conditions"])->name('terms-conditions');
Route::get("/blogdetail/{id}",[HomeController::class,"blogdetail"])->name('blogdetail');
Route::get("/blogs",[HomeController::class,"blogs"])->name('blogs');
Route::get("/projects",[HomeController::class,"projects"])->name('projects');

Route::get("/login",[HomeController::class,"login"])->name('login');
Route::get("/register",[HomeController::class,"register"])->name('register');

// ****************** admin panel routes *********************

// Route::get('/admin',[ AdminHomeController::class,'index']);

Route::match(['get','post'],'/admin' , [AdminHomeController::class , 'index'])->middleware("guest:admin")->name('admin');

Route::group(['prefix'=>'/admin','middleware'=>['auth:admin']],function(){
	
  Route::match(['get','post'],'/dashboard',[AdminHomeController::class,'dashboard'])->name('admin-dashboard');
  Route::get('/adminlogout' , function(){
    Auth::guard('admin')->logout();
    return redirect(route('admin'));
  })->name('adminlogout');
});





