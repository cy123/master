<?php

namespace App\Http\Controllers\Home;
use DB;
use App\Http\Requests;
use App\Model\Articles;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    //
    public function index()
    {
        //$articles=Articles::all();
        $articles=DB::table('articles')
                ->leftJoin('article_categories','articles.cate_id','=','article_categories.id')
                ->select('articles.*','article_categories.name')
                ->get();
        $tags='';
        return view('Home/index')->with('articles',$articles);
    }
    
    public function categorys($args)
    {
        
    }
    
    public function about()
    {
        return view('Home/about');
    }
    
    public function resume()
    {
        return view('Home/resume')->withResumes(\App\Resume::find(7));
    }
     
    public function game()
    {
       return view('Home/game');
    }

    //文章祥情
    public function detail($id)
    {
        $article=Articles::find($id);
        return view('Home/detail')->with('article',$article);
    }
 
}
