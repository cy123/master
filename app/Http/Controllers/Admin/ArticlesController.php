<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Model\Articles;
use App\Model\ArticleCategory;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;

class ArticlesController extends Controller
{
    public function index()
    {
        //$articles=Articles::all();
        $articles=DB::table('articles')
                    ->leftJoin('article_categories','articles.cate_id','=','article_categories.id')
                    ->select('articles.*','article_categories.name')
                    ->get();
        return view('Admin/articles/index')->with('articles',$articles);
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
        $allCates=ArticleCategory::all('id','name');
        //print_r($allCates);die;
        return view('Admin/articles/add')->with('allCates',$allCates);
    }
    
    public function store(Request $request)
    {
        $data=$request->all();
        //var_dump($data);die;    
        $data['content']=$data['test-editormd-markdown-doc'];
        //unset($data['test-editormd-markdown-doc']);
        //unset($data['_token']);
        $res=Articles::create($data);
        print_r($res);
    }

    public function edit(Request $request,$id)
    {
        $article=Articles::find($id);
        //print_r($article);die;
        $allCates=ArticleCategory::all('id','name');
        return view('Admin/articles/edit')->with('article',$article)
        ->with('allCates',$allCates);
    }

    public function update(Request $request,$id)
    {
        $data=[
            'title'=>$request->get('title'),
            'content'=>$request->get('test-editormd-markdown-doc'),
            'cate_id'=>$request->get('cate_id')
        ];
        $article=Articles::find($id);
        if($article->update($data)){
            //echo 'success';
            return redirect('articles');
        }else{
            echo 'faile';
        }

    }

    public function destroy($id)
    {
        $res=Articles::find($id)->delete(); 
        if($res)
        return redirect()->back()->withInput()->withErrors('删除成功！');
    }
}
