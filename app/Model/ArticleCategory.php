<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ArticleCategory extends Model
{
    public function getCategory()
    {
        $cate = self::all();
        $getTreeArr =  self::tree($cate);
        foreach ($getTreeArr as $key => $value) {
            $getTreeArr[$key]->newHtml = $value->html.$value->name;
        }

        return $getTreeArr;
    }
    
    public static function tree($model, $parentId = 0, $level = 0, $html = '-')
    {
        $data = array();
        foreach ($model as $k => $v) {
            if ($v->parent_id == $parentId) {
                if ($level != 0) {
                    $v->html = str_repeat('&nbsp;&nbsp;&nbsp;&nbsp;', $level);
                    $v->html .= '|';
                }
                $v->html .= str_repeat($html, $level);
                $data[] = $v;
                $data = array_merge($data, self::tree($model, $v->id, $level + 1));
            }
        }
        return $data;
    }
}
