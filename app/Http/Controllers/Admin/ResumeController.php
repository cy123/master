<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Resume;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;


class ResumeController extends Controller
{
    public function index(){
        //echo 'd';die;
        
        return view('Admin/resume/index')->withResumes(\App\Resume::all());
    }
    public function add(){
        
        return view('Admin/resume/add');
    }
    
    public function store(Request $request){
        //var_dump($request);die;
        $model=new Resume;
        $model->content=$request->get('test-editormd-markdown-doc');
        if($model->save()){
            return view('Admin/resume/index');
        }else{
            return redirect()->back()->withInput()->withErrors('保存失败！');
        }
           
    }
    
    public function update(Request $request,$id){
        //echo $id;die;
        $resume = \App\Resume::find($id);
        $resume->content=$request->get('test-editormd-markdown-doc');

        if($resume->save()){
            return view('Admin/resume/index');
        }else{
            return redirect()->back()->withInput()->withErrors('保存失败！');
        }
    }
    
    public function show ($id){
        return view('Admin/resume/add')->withResumes(\App\Resume::find($id));
    }

}