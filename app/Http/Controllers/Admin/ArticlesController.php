<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Model\Articles;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;

class ArticlesController extends Controller
{
    public function index()
    {
        return view('Admin/articles/index');
    }
    
    public function add()
    {
        if($_POST){
            var_dump($_POST);die;
        }
        return view('Admin/articles/add');
    }
    
    public function show()
    {
        return view('Admin/articles/add');
    }
    
    public function store(Request $request){
        $data=$request->all();
        $articles=new Articles;
        $articles->save($data);
    }
}
