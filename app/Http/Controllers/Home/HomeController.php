<?php

namespace App\Http\Controllers\Home;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    //
    public function index(){
        return view('Home/index');
    }
    
    public function categorys($args){
        
    }
    
    public function about(){
        return view('Home/about');
    }
    
    public function resume(){
        return view('Home/resume')->withResumes(\App\Resume::find(7));
    }
     
    public function game(){
       return view('Home/game');
    }
 
}
