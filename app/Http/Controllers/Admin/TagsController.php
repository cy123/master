<?php

namespace App\Http\Controllers\Admin;

use App\Model\Tags;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TagsController extends Controller
{
    public function index()
    {
        $tags=Tags::all();
        return view('Admin/tags/index')->with('tags',$tags);

    }

    public function create()
    {
        return view('Admin/tags/create');
    }

    public function store(Request $request)
    {
        $data=[
            'tag'=>$request->get('tag')
        ];
        $res=Tags::create($data);
        if($res)
            return redirect('tags');
    }

    public function edit(Request $request,$id)
    {
        $tag=Tags::find($id);
        return view('Admin/tags/edit')->with('tag',$tag);
    }

    public function update(Request $request,$id)
    {
        $data=[
            'tag'=>$request->get('tag'),
        ];
        $tag=Tags::find($id);
        if($tag->update($data)){
            //echo 'success';
            return redirect('tags');
        }else{
            echo 'error';
        }

    }
    public function destroy($id)
    {
        $res=Tags::find($id)->delete();
        if($res)
            return redirect()->back()->withInput()->withErrors('删除成功！');
    }

}
