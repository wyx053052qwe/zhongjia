<?php

namespace App\Http\Controllers\Zhuanli;

use App\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ZhuanliController extends Controller
{
    public function index()
    {
        $fm = Article::where('c_id',22)->get();

        return view('zhuanli.index',[
            'fm'=>$fm
        ]);
    }
    public function news()
    {
        $data = Article::where('c_id',21)->paginate(3);
        $count = Article::where('c_id',21)->count();
        return view('zhuanli.news',[
            'data'=>$data,
            'count'=>$count
        ]);
    }
    public function fm()
    {
        $title = request()->input('key');
//        dd($title);
        if(empty($title)){
            $data = Article::where('c_id',22)->paginate(8);
        }else{
            $data = Article::where('c_id',22)->where('a_title',$title)->paginate(8);
        }

        return view('zhuanli.fm',[
            'data'=>$data
        ]);
    }
    public function sy()
    {
        $title = request()->input('key');
//        dd($title);
        if(empty($title)){
            $data = Article::where('c_id',23)->paginate(8);
        }else{
            $data = Article::where('c_id',23)->where('a_title',$title)->paginate(8);
        }
        return view('zhuanli.sy',[
            'data'=>$data
        ]);
    }
    public function wg()
    {
        $title = request()->input('key');
//        dd($title);
        if(empty($title)){
            $data = Article::where('c_id',24)->paginate(8);
        }else{
            $data = Article::where('c_id',24)->where('a_title',$title)->paginate(8);
        }
        return view('zhuanli.wg',[
            'data'=>$data
        ]);
    }
    public function anli()
    {
        $data  = Article::where('c_id',25)->paginate(8);
        return view('zhuanli.anli',[
            'data'=>$data
        ]);
    }
    public function lxwm()
    {

        return view('zhuanli.lxwm');
    }
    public function next()
    {
        $a_id = request()->route('a_id');
        $c_id = request()->route('c_id');
        $data = Article::where('a_id',$a_id)->first();
//        dd($data);
        $prev_id = Article::where('c_id',$c_id)->max('a_id');
//        dd($prev_id);
        $next_id = Article::where('c_id',$c_id)->min('a_id');
        $up = Article::where('a_id',$prev_id)->first(['a_id','a_title','c_id']);
        $down = Article::where('a_id',$next_id)->first(['a_id','a_title','c_id']);
        return view('zhuanli.next',[
            'data'=>$data,
            'up'=>$up,
            'down'=>$data
        ]);
    }
}
