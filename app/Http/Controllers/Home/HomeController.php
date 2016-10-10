<?php

namespace App\Http\Controllers\Home;

use DB;
use App\Http\Requests;
use App\Model\Articles;
use App\Model\Tags;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * index
     * @return $this
     */
    public function index()
    {

        $articles=DB::table('articles')
                ->leftJoin('article_categories','articles.cate_id','=','article_categories.id')
                ->select('articles.*','article_categories.name')
                ->get();

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

    /**
     * 文章祥情页
     * @param $id
     * @return $this
     */
    public function detail($id)
    {
        $article=Articles::find($id);
        return view('Home/detail')->with('article',$article);
    }

    /**
     * 通过标签对文章才归档
     * @param $tag_id
     * @return $this
     */
    public function achives($tag_id)
    {
        $articles=Articles::where('tag_id','=',$tag_id)->get();
        //dd($articles);
        return view('Home/achives')->with('articles',$articles);
    }

    /**
     * 通过分类ID对文章归档
     * @param $cate_id
     * @return $this
     */
    public function categories($cate_id)
    {
        $articles=Articles::where('cate_id','=',$cate_id)->get();
        return view('Home/achives')->with('articles',$articles);
    }
 
}
