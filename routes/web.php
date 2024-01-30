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

Route::match(['get','post'],"/login",[HomeController::class,"login"])->name('login');
Route::match(['get','post'],"/register",[HomeController::class,"register"])->name('register');

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

// user dash board root

Route::group(['prefix'=>'/admin','middleware'=>['auth:admin']],function(){
    Route::match(['get','post'],'/user-dashboard',[HomeController::class,'dashboard'])->name('user-dashboard');
    Route::match(['get','post'],'/investor-dashboard',[HomeController::class,'investorDashboard'])->name('investor-dashboard');
      Route::get('/userlogout' , function(){
    Auth::guard('user')->logout();
    return redirect(route('login'));
  })->name('userlogout');
});





