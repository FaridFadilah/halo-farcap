<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller{    
    public function index(){
        
        return view("components.homepage");
    }
    public function feature(){
        return view("components.feature");
    }
    public function work(){
        return view("components.work");
    }
    public function pricing(){
        return view("components.pricing");
    }
    public function reviews(){
        return view("components.reviews");
    }
}