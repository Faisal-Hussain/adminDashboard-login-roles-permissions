<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function loginView(){
    	return view('admin.login');
    }
    public function registerView(){
    	return view('admin.register');
    }
    public function dashboard(){
    	return view('admin.dashboard');
    }
}
