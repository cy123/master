<?php

namespace App\Model;

use App\Model\Articles;
use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    protected $fillable=['tag'];

    /**
     * 获取标签和标签对应的文章数
     * @return array
     */
    static public function getTags()
    {
        $tagArr=[];
        $articles = Articles::all();
        $tags = self::all();
        foreach ($tags as $tag){
            $tagArr[$tag->tag]['row']=0;
        }
        foreach ($articles as $article){
            foreach ($tags as $tag){
                if($tag->id == $article->tag_id){
                    $tagArr[$tag->tag]['row']++;
                }
            }
        }
        //print_r($tagArr);die;
        return $tagArr;
    }
}
