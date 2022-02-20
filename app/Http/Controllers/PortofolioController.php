<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortofolioController extends Controller
{
    public function welcome(){
    	return view("welcome");
    }

    public function home(){
    	return view("portofolio.home");
    }

    public function about(){
    	return view("portofolio.about");
    }

    public function service(){
    	return view("portofolio.service");
    }

    public function contact(){
    	return view("portofolio.contact");
    }
}
