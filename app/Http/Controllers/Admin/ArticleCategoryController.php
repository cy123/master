<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Model\ArticleCategory;
use App\Http\Controllers\Controller;

class ArticleCategoryController extends Controller
{
    public function  index()
    {
        $model=new ArticleCategory;
        $treeArr=$model->getCategory();
        //print_r($data);die;

        //$category=\App\Model\ArticleCategory::all();
        //print_r($category);die;
        return view('Admin/category/index')->with('categorys',$treeArr);
        
    }
    
    public function create()
    {
        $level=ArticleCategory::all('name','id');
        return view('Admin/category/create')->with('level',$level);
    }
    
    public function store(Request $request)
    {
        $cate=new ArticleCategory;
        $cate->name=$request->get('name');
        $cate->parent_id=$request->get('id');
        $res=$cate->save();
        if($res){
            return redirect('articleCategory');
        }else{
            echo 'faile';
        }
    }
    
    public function edit(Request $request,$id)
    {
        $cate=ArticleCategory::find($id);
        $level=ArticleCategory::all();
        //var_dump($level);die;
        return view('Admin/category/edit')->with('cate',$cate)->with('level',$level);
        
    }
    
    public function update(Request $request,$id)
    {
        
        $model=new ArticleCategory;
        $cate=$model->find($id);
        $cate->name=$request->get('name');
        $cate->parent_id=$request->get('id');
        $res=$cate->save();
        if($res){
            echo 'successfully';
        }else{
            echo 'faile';
        }
    }
    
    public function destroy($id)
    {
        $res=ArticleCategory::find($id)->delete(); 
        if($res)
        return redirect()->back()->withInput()->withErrors('删除成功！');
    }
}
