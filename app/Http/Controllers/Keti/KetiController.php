<?php

namespace App\Http\Controllers\Keti;

use App\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KetiController extends Controller
{
    public function index()
    {
        $data = Article::where('c_id',19)->limit(6)->get();
        return view('keti.index',[
            'data'=>$data
        ]);
    }
    public function jj()
    {
        return view('keti.jj');
    }
    public function czlc()
    {
        return view('keti.czlc');
    }
    public function fwys()
    {
        return view('keti.fwys');
    }
    public function anli()
    {
        $data = Article::where('c_id',19)->paginate(5);
        return view('keti.anli',[
            'data'=>$data
        ]);
    }
    public function anlinext()
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
        return view('keti.anlinext',[
            'data'=>$data,
            'up'=>$up,
            'down'=>$data
        ]);
    }
}
