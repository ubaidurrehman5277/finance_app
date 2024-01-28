<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;

class AdminHomeController extends Controller
{
    public function index(Request $request){

    	if (request()->isMethod('post')) {
	      $username = request('email');
	      $password = request('password');
	      if (Auth::guard('admin')->attempt(['email' => $username, 'password' => $password])) {
	        return redirect(route('admin-dashboard'));
	      }else{
	        return back()->with('error','Invalid Attempts');
	      }
	    }

    	return view("admin.index");
    }

    public function dashboard(){
    	return view('admin.dashboard');
    }
}
