<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class HomeController extends Controller
{
    public function index(){
        return view("frontend.home");
        }
        public function about(){
            return view("frontend.about");
        }
        public function contact(){
            return view("frontend.contact");
        }

        public function dashboard(){
            return view("frontend.dashboard");
        }

        public function investorDashboard(){
            return view("frontend.investor_dashboard");
        }


        public function projects(){
            return view("frontend.projects");
        }
        public function blog(){
            return view("frontend.blogs");
        }
        public function blogdetail($id){
            return view("frontend.blog_details");
        }
        public function login(){
            if (request()->isMethod('post')) {
              $username = request('email');
              $password = request('password');
              if (Auth::guard('user')->attempt(['email' => $username, 'password' => $password])) {

                if (auth('user')->user()->role_id == '1') {
                    return redirect(route('investor-dashboard'));
                }else{
                    return redirect(route('user-dashboard'));
                }

              }else{
                return back()->with('error','Invalid Attempts');
              }
            }
            return view("frontend.login");
        }
        public function register(Request $request){
            if (request()->isMethod('post')) {
              request()->validate([
                'firstname' => 'required|min:3|max:50',
                'lastname' => 'required|min:3|max:50',
                'email' => 'required|email|unique:users,email',
                'address' => 'required',
                'city' => 'required',
                'country' => 'required',
                'role_id' => 'required',
                'profile_image' => 'required',
                'password' => 'required|min:5|max:15',
              ],[
                'email.email' => 'Email is already registered.',
              ]);
              $user = New User;
              $user->firstname = request('firstname');
              $user->lastname = request('lastname');
              $user->email = request('email');
              $user->address = request('address');
              $user->city = request('city');
              $user->country = request('country');
              $user->role_id = request('role_id');
              $user->password = bcrypt(request('password'));
              $image = $request->profile_image;
              $name  = $image->getClientOriginalName();
              $image->StoreAs('public/images',$name);
              $user->profile_image = $name;
              $user->save();
              return back()->with('success','Your account has been registered successfully.');
            }
            return view("frontend.register");
        }
        public function privacy_policy(){
            return view("frontend.privacy");
        }
        public function terms_conditions(){
            return view("frontend.terms_conditions");
        }
        public function help(){
            return view("frontend.help");
        }
}
