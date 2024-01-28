<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
            return view("frontend.login");
        }
        public function register(){
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
