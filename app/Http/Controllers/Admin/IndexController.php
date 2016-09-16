<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Http\Controllers\Controller;
class IndexController extends Controller
{
    public function index(){
        //echo 'd';die;
        return view('Admin/index');
    }
    
    public function theme()
    {
        return view('Admin/theme');
    }
}