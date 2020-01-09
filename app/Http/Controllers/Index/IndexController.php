<?php

namespace App\Http\Controllers\Index;

use App\Announcement;
use App\Article;
use App\Category;
use App\Journal;
use App\Manuscript;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use think\Validate;


class IndexController extends Controller
{
    public function index()
    {
        $catedata = Category::get();
        $cateid = Category::where('p_id',2)->get()->toArray();
        $id = '';
        foreach($cateid as $v)
        {
            $id .=','.$v['c_id'];
        }
        $id = explode(',',trim($id,','));
        //最新上架
        $art = Journal::orderBy('created_at', 'desc')->where('p_id',0)->whereIN('c_id',$id)->limit(6)->get();
        //试读排行
        $sort = Journal::orderBy('sort','desc')->where('p_id',0)->whereIN('c_id',$id)->limit(6)->get();
        //新到期刊
        $xin = Category::where('p_id',26)->get(['c_id','c_name','c_alias']);

//        dd($xin);
        $lw = Article::where('c_id',1)->limit(3)->get();
        $cate = Category::where('c_id',3)->first();
        $cate1 = Category::where('c_id',4)->first();
        $cate2 = Category::where('c_id',5)->first();
        $cate3 = Category::where('c_id',6)->first();
        $cate4 = Category::where('c_id',7)->first();
        $cate5 = Category::where('c_id',8)->first();
        $cate6 = Category::where('c_id',9)->first();
        $cate7 = Category::where('c_id',10)->first();
        $cate8 = Category::where('c_id',11)->first();
        $cate9 = Category::where('c_id',12)->first();
        $cate10 = Category::where('c_id',13)->first();
        $cate11 = Category::where('c_id',18)->first();
        $cate12 = Category::where('c_id',20)->first();
//        dd($cate11);
        $cate_id = Category::where('p_id',13)->get('c_id')->toArray();
        $c_id = '';
        foreach($cate_id as $v)
        {
            $c_id .=','.$v['c_id'];
        }
        $c_id = explode(',',trim($c_id,','));
        $cate_id1 = Category::where('p_id',18)->get('c_id')->toArray();
        $c_id1 = '';
        foreach($cate_id1 as $v)
        {
            $c_id1 .=','.$v['c_id'];
        }
        $c_id1 = explode(',',trim($c_id1,','));

        $cate_id2 = Category::where('p_id',20)->get('c_id')->toArray();
        $c_id2 = '';
        foreach($cate_id2 as $v)
        {
            $c_id2 .=','.$v['c_id'];
        }
        $c_id2 = explode(',',trim($c_id2,','));
//        dd($c_id);
//        $c_id='';
//        foreach($cate as $k=>$v){
//            $c_id .= ','.$v['c_id'];
//        }
//        $c_id = explode(',',trim($c_id,','));
////        dd($c_id);
        $artdata = Journal::where('p_id',0)->where('c_id',3)->paginate(12);
        $artdata1 = Journal::where('p_id',0)->where('c_id',4)->paginate(12);
        $artdata2 = Journal::where('p_id',0)->where('c_id',5)->paginate(12);
        $artdata3 = Journal::where('p_id',0)->where('c_id',6)->paginate(12);
        $artdata4 = Journal::where('p_id',0)->where('c_id',7)->paginate(12);
        $artdata5 = Journal::where('p_id',0)->where('c_id',8)->paginate(12);
        $artdata6 = Journal::where('p_id',0)->where('c_id',9)->paginate(12);
        $artdata7 = Journal::where('p_id',0)->where('c_id',10)->paginate(12);
        $artdata8 = Journal::where('p_id',0)->where('c_id',11)->paginate(12);
        $artdata9 = Journal::where('p_id',0)->where('c_id',12)->paginate(12);
        $artdata10 = Article::join('category','articles.c_id','=','category.c_id')->whereIN('articles.c_id',$c_id)->paginate(12);
        $artdata11 = Article::join('category','articles.c_id','=','category.c_id')->whereIN('articles.c_id',$c_id1)->paginate(12);
        $artdata12 = Article::join('category','articles.c_id','=','category.c_id')->whereIN('articles.c_id',$c_id2)->paginate(12);
//        dd($artdata10);
        return view('index.index',[
            'catedata'=>$catedata,
            'art'=>$art,
            'lw'=>$lw,
            'sort'=>$sort,
            'xin'=>$xin,
            'cate'=>$cate,
            'cate1'=>$cate1,
            'cate2'=>$cate2,
            'cate3'=>$cate3,
            'cate4'=>$cate4,
            'cate5'=>$cate5,
            'cate6'=>$cate6,
            'cate7'=>$cate7,
            'cate8'=>$cate8,
            'cate9'=>$cate9,
            'cate10'=>$cate10,
            'cate11'=>$cate11,
            'cate12'=>$cate12,
            'artdata'=>$artdata,
            'artdata1'=>$artdata1,
            'artdata2'=>$artdata2,
            'artdata3'=>$artdata3,
            'artdata4'=>$artdata4,
            'artdata5'=>$artdata5,
            'artdata6'=>$artdata6,
            'artdata7'=>$artdata7,
            'artdata8'=>$artdata8,
            'artdata9'=>$artdata9,
            'artdata10'=>$artdata10,
            'artdata11'=>$artdata11,
            'artdata12'=>$artdata12,
        ]);
    }
    public function sousuo()
    {
        $cate = request()->input();
//        dd($cate);
        $keyboard = request()->input('keyboard');
        if(empty($keyboard)){
            echo "<script>alert('搜索条件不能为空');location.href='/';</script>";die;
        }
//        dd($cate);
//        if(!empty($cate)){
//            $catedata = Category::where('c_name',$cate)->first();
//            if(empty($catedata)){
//                echo "<script>alert('没有找到你要查找的内容');location.href='/';</script>";
//            }
//            $c_id = $catedata->c_id;
//        }
//        if(!empty($cate) && !empty($keyboard) ){
//            $artdata = Article::where(['c_id'=>$c_id,'a_title'=>$keyboard])->get();
//        }
            $artdata = Article::where('a_title','like','%'.$keyboard.'%')->paginate(10);
            $jo = Journal::where('p_id',0)->where('j_title','like','%'.$keyboard.'%')->paginate(10);
                return view('index.dosousuo',[
                    'artdata'=>$artdata,
                    'jo'=>$jo
                ]);
//




//        if(!empty($cate)){
//            $artdata = Article::where(['c_id'=>$c_id])->get();
//        }

//        dd($artdata);





    }

    public function zxnext()
    {
        $a_id = request()->route('a_id');
        $c_id = request()->route('c_id');
        $data = Article::where('a_id',$a_id)->first();
        $prev_id = Article::where('c_id',$c_id)->max('a_id');
//        dd($prev_id);
        Article::where('a_id',$a_id)->increment('sort');
        $next_id = Article::where('c_id',$c_id)->min('a_id');
        $up = Article::where('a_id',$prev_id)->first(['a_id','a_title','c_id']);
        $down = Article::where('a_id',$next_id)->first(['a_id','a_title','c_id']);
//        dd($up);
        $rm = Journal::where('p_id',0)->orderBy('sort','desc')->get();

        return view('index.lunwen-zxnext',[
            'data'=>$data,
            'up'=>$up,
            'down'=>$down,
            'rm'=>$rm
        ]);
    }

    public function zx()
    {
        $data = Article::where('c_id',1)->paginate(4);
        $count = Article::where('c_id',1)->count();
        return view('index/lunwen-zx',[
            'data'=>$data,
            'count'=>$count
        ]);
    }

    public function hzqk()
    {
        $cate = Category::where('p_id',2)->get('c_id')->toArray();
//        dd($cate);
        $c_id = '';
        foreach($cate as $v)
        {
            $c_id .= ','.$v['c_id'];
        }
        $c_id = explode(',',trim($c_id,','));
//        dd($c_id);
        $artdata = Journal::where('p_id',0)->whereIN('c_id',$c_id)->paginate(12);
        $count = Journal::where('p_id',0)->whereIN('c_id',$c_id)->count();
        return view('index.hzqk',[
            'artdata'=>$artdata,
            'count'=>$count
        ]);
    }

    public function zhuzuo()
    {
        $zu = Article::where('c_id',14)->limit(5)->get();
        $jc = Article::where('c_id',15)->limit(5)->get();
        $cs = Article::where('c_id',16)->limit(5)->get();
        $xw = Article::where('c_id',17)->limit(4)->get();
        return view('index.zhuzuo',[
            'zu'=>$zu,
            'jc'=>$jc,
            'cs'=>$cs,
            'xw'=>$xw
        ]);
    }
    public function gywm()
    {
        return view('index.gywm');
    }

    public function jc()
    {
        $c_id = request()->input('c_id');
        $data = Article::where('c_id',$c_id)->paginate(10);
        return view('index.jc',[
            'data'=>$data,
        ]);
    }
    public function zhuxq()
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
        $zz = Article::where('c_id',14)->get();

        return view('index.zhuxq',[
            'data'=>$data,
            'up'=>$up,
            'down'=>$data,
            'zz'=>$zz
        ]);
    }
    public function zzcb()
    {
        $data = Article::where('c_id',13)->paginate(10);
        return view('index.zzcb',[
            'data'=>$data
        ]);
    }
    public function csgm()
    {
        $c_id = request()->input('c_id');
        $data = Article::where('c_id',$c_id)->paginate(5);
        return view('index.csgm',[
            'data'=>$data
        ]);
    }
    public function fwys()
    {
        return view('index.fwys');
    }
    public function czlc()
    {
        return view('index.czlc');
    }
    public function xwlist()
    {
        $c_id = request()->input('c_id');
        $data = Article::where('c_id',$c_id)->limit(4)->get();

        return view('index.xwlist',[
            'data'=>$data
        ]);
    }
    public function xw()
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
        return view('index.xw',[
            'data'=>$data,
            'up'=>$up,
            'down'=>$data
        ]);
    }
    public function lxwm()
    {
        return view('index.lxwm');
    }

    public function us()
    {
        return view('index.us');
    }
    public function fblc()
    {
        return view('index.fblc');
    }

    public function gjcx()
    {
        return view('index.gjcx');
    }
    public function fkfs()
    {
        return view('index.fkfs');
    }
    public function lus()
    {
        return view('index.lus');
    }
    public function zxtg()
    {
        return view('index.zxtg');
    }

    public function dozxtg(Request $request)
    {
        $data = request()->post();
        $file = $request->file("file");
//        dd($data);

        $m_title = $data['title'];
        $m_username = $data['name'];
//        dd($m_username);
        $m_phone = $data['tel'];
        $m_email = $data['email'];
        $m_qq = $data['qq'];
        $m_remarks = $data['other'];
        $m_fbtime = $data['fbtime'];
        $vers = $data['ver'];
        $verify = $data['verify'];
        $count = Manuscript::where('m_title',$m_title)->count();
        if($count){
            return json_encode(['code'=>3,'massage'=>'该标题已经添加']);
        }
        if(strcasecmp($vers,$verify)!=0){
            return json_encode(['code'=>7,'massage'=>'验证码不正确']);
        }

        if(empty($m_username)){
            return json_encode(['code'=>6,'massage'=>'请填写姓名']);
        }
        if(empty($m_phone)){
            return json_encode(['code'=>6,'massage'=>'请填写手机号']);
        }
        if(empty($m_email)){
            return json_encode(['code'=>6,'massage'=>'请填写邮箱']);
        }
        if(empty($m_qq)){
            return json_encode(['code'=>6,'massage'=>'请填写qq/微信']);
        }
        if(empty($m_title)){
            return json_encode(['code'=>6,'massage'=>'请填写标题']);
        }
//        dd($file->type);
        //获取上传信息
//        if(empty($file['file']['name'])){
//            return json_encode(['code'=>3,'massage'=>'请选择文件']);
//        }
//        $filename=$file->getClientOriginalName();
//        $filesize=$file->getClientSize();
        $fileextension=$file->getClientOriginalExtension();   //获取文件后缀名
//        dd($fileextension);
        if($fileextension!="docx" && $fileextension!="txt" && $fileextension!="doc"){
            return json_encode(['code'=>5,'massage'=>'请上传合法文件。（*.docx，*.txt,*.doc）']);
        }

//        dd($filesize);
        //确认上传的文件是否成功
        if($file->isValid()) {
            //$picname = $file->getClientOriginalName(); //获取上传原文件名
            $ext = $file->getClientOriginalExtension(); //获取上传文件名的后缀名
            //执行移动上传文件
            $file_path = "uploads/files/".date('Y-m-d',time());
//                dd($file_path);
            $filename = time() . rand(1000, 9999) . "." . $ext;
            $file->move($file_path, $filename);
            $res = Manuscript::insert([
                'm_title'=>$m_title,
                'm_username'=>$m_username,
                'm_phone'=>$m_phone,
                'm_email'=>$m_email,
                'm_qq'=>$m_qq,
                'm_fbtime'=>$m_fbtime,
                'm_files'=>'/files/'.date('Y-m-d',time()).'/'.$filename,
                'm_remarks'=>$m_remarks,
            ]);
            if(!$res){
                return json_encode(['code'=>2,'massage'=>'失败']);
            }
            return json_encode(['code'=>1,'massage'=>'上传成功']);

        }else{
            return json_encode(['code'=>2,'massage'=>'上传失败']);
        }



    }

    public function shop()
    {

        $j_id = request()->input('j_id');
        Journal::where('j_id',$j_id)->increment('sort');
        $jodata = Journal::where('j_id',$j_id)->first();

        $shi = Article::where('c_id',27)->get();
//        dd($jodata);
        $j_extend = $jodata->j_extend;
        if(strpos($j_extend,',')!==false){
            $j_extend =  str_replace(',','，',$j_extend);
        }
        $j_extend = explode('，',$j_extend);
        $j_problem = $jodata->j_problem;
        $j_problem = explode('，',$j_problem);
        $j_yaoqiu = $jodata->j_yaoqiu;
        $j_yaoqiu = explode('。',$j_yaoqiu);
        $j_banquan = $jodata->j_banquan;
//        dd($j_problem);
        $anndata = Announcement::where('m_id',$j_id)->get()->toArray();
//        dd($anndata);
        $shji = Journal::where('j_id',$j_id)->first();
//        dd($shji);
        $uploads = $shji->j_uploads;
        $qi = $shji->j_num;
        if(!empty($qi)){
            if(strpos($qi,',')!==false){
                $qi =  str_replace(',','，',$qi);
             }
             $qi = explode('，',trim($qi,'，'));
             $a = sizeof($qi);
        }

        if(!empty($uploads) && !empty($qi) ){
            $arr = [];
            foreach($uploads as $k=>$v){
                if($k<$a){
                    $arr[$k] = ['uploads'=>$v,'qi'=>$qi[$k]];
                }

            }
        }else{
            $arr = [];
            foreach($uploads as $k=>$v){
                    $arr[$k] = ['uploads'=>$v,'qi'=>null];

            }
        }

        return view('index.shop1',[
            'jodata'=>$jodata,
            'j_extend'=>$j_extend,
            'j_problem'=>$j_problem,
            'j_yaoqiu'=>$j_yaoqiu,
            'j_banquan'=>$j_banquan,
            'anndata'=>$anndata,
            'shji'=>$shji,
            'shi'=>$shi,
            'uploads'=>$arr,

        ]);
    }
    public function qkjs()
    {
        $j_id = request()->input('j_id');
//        dd($a_id);
        $jodata = Journal::where('j_id',$j_id)->first();
//        dd($jodata);
        if(empty($jodata)){
            echo "<script>alert('该期刊下没有期刊';location.href='/';)</script>";
        }
        $j_extend = $jodata->j_extend;
        if(strpos($j_extend,',')!==false){
            $j_extend =  str_replace(',','，',$j_extend);
        }
        $j_extend = explode('，',$j_extend);
        $j_problem = $jodata->j_problem;
        $j_banquan = $jodata->j_banquan;
        $shji = Journal::where('j_id',$j_id)->first();
//        dd($shji);
        $uploads = $shji->j_uploads;
        $qi = $shji->j_num;
        if(!empty($qi)){
            if(strpos($qi,',')!==false){
                $qi =  str_replace(',','，',$qi);
             }
             $qi = explode('，',trim($qi,'，'));
             $a = sizeof($qi);
        }

        if(!empty($uploads) && !empty($qi) ){
            $arr = [];
            foreach($uploads as $k=>$v){
                if($k<$a){
                    $arr[$k] = ['uploads'=>$v,'qi'=>$qi[$k]];
                }

            }
        }else{
            $arr = [];
            foreach($uploads as $k=>$v){
                    $arr[$k] = ['uploads'=>$v,'qi'=>null];

            }
        }

        return view('index.qkjs',[
            'jodata'=>$jodata,
            'j_extend'=>$j_extend,
            'j_banquan'=>$j_banquan,
            'shji'=>$shji,
            'uploads'=>$arr,
        ]);
    }
    public function lmsz()
    {
        $j_id = request()->input('j_id');
//        dd($a_id);
        $jodata = Journal::where('j_id',$j_id)->first();
//        dd($jodata);
        if(empty($jodata)){
            echo "<script>alert('该期刊下没有期刊';location.href='/';)</script>";
        }
        $j_extend = $jodata->j_extend;
        if(strpos($j_extend,',')!==false){
            $j_extend =  str_replace(',','，',$j_extend);
        }
        $j_extend = explode('，',$j_extend);
        $j_banquan = $jodata->j_banquan;
        $shji = Journal::where('j_id',$j_id)->first();
//        dd($shji);
        $uploads = $shji->j_uploads;
//        dd($uploads);
        $qi = $shji->j_num;
        if(!empty($qi)){
            if(strpos($qi,',')!==false){
                $qi =  str_replace(',','，',$qi);
             }
             $qi = explode('，',trim($qi,'，'));
             $a = sizeof($qi);
        }

        if(!empty($uploads) && !empty($qi) ){
            $arr = [];
            foreach($uploads as $k=>$v){
                if($k<$a){
                    $arr[$k] = ['uploads'=>$v,'qi'=>$qi[$k]];
                }

            }
        }else{
            $arr = [];
            foreach($uploads as $k=>$v){
                    $arr[$k] = ['uploads'=>$v,'qi'=>null];

            }
        }

        return view('index.lmsz',[
            'jodata'=>$jodata,
            'j_banquan'=>$j_banquan,
            'j_extend'=>$j_extend,
            'shji'=>$shji,
            'uploads'=>$arr
        ]);
    }
    public function qkjj()
    {
        $j_id = request()->input('j_id');
//        dd($j_id);
        $jodata = Journal::where('j_id',$j_id)->first();
//        dd($jodata);
        $j_extend = $jodata->j_extend;
        if(strpos($j_extend,',')!==false){
            $j_extend =  str_replace(',','，',$j_extend);
        }
        $j_extend = explode('，',$j_extend);
        $j_banquan = $jodata->j_banquan;
        $shji = Journal::where('j_id',$j_id)->first();
//        dd($shji);
        $uploads = $shji->j_uploads;
        $qi = $shji->j_num;
        if(!empty($qi)){
            if(strpos($qi,',')!==false){
                $qi =  str_replace(',','，',$qi);
             }
             $qi = explode('，',trim($qi,'，'));
             $a = sizeof($qi);
        }

        if(!empty($uploads) && !empty($qi) ){
            $arr = [];
            foreach($uploads as $k=>$v){
                if($k<$a){
                    $arr[$k] = ['uploads'=>$v,'qi'=>$qi[$k]];
                }

            }
        }else{
            $arr = [];
            foreach($uploads as $k=>$v){
                    $arr[$k] = ['uploads'=>$v,'qi'=>null];

            }
        }

        return view('index.qkjj',[
            'jodata'=>$jodata,
            'j_extend'=>$j_extend,
            'j_banquan'=>$j_banquan,
            'shji'=>$shji,
            'uploads'=>$arr
        ]);
    }
    public function tgyq()
    {
        $j_id = request()->input('j_id');
//        dd($a_id);
        $jodata = Journal::where('j_id',$j_id)->first();
//        dd($jodata);
        if(empty($jodata)){
            echo "<script>alert('该期刊下没有期刊';location.href='/';)</script>";
        }
        $j_extend = $jodata->j_extend;
        if(strpos($j_extend,',')!==false){
            $j_extend =  str_replace(',','，',$j_extend);
        }
        $j_extend = explode('，',$j_extend);
        $j_banquan = $jodata->j_banquan;
        $shji = Journal::where('j_id',$j_id)->first();
//        dd($shji);
        $uploads = $shji->j_uploads;
        $qi = $shji->j_num;
        if(!empty($qi)){
            if(strpos($qi,',')!==false){
                $qi =  str_replace(',','，',$qi);
             }
             $qi = explode('，',trim($qi,'，'));
             $a = sizeof($qi);
        }

        if(!empty($uploads) && !empty($qi) ){
            $arr = [];
            foreach($uploads as $k=>$v){
                if($k<$a){
                    $arr[$k] = ['uploads'=>$v,'qi'=>$qi[$k]];
                }

            }
        }else{
            $arr = [];
            foreach($uploads as $k=>$v){
                    $arr[$k] = ['uploads'=>$v,'qi'=>null];

            }
        }

        return view('index.tgyq',[
            'jodata'=>$jodata,
            'j_extend'=>$j_extend,
            'j_banquan'=>$j_banquan,
            'shji'=>$shji,
            'uploads'=>$arr
        ]);
    }
    public function zxtg1()
    {
        $j_id = request()->input('j_id');
//        dd($a_id);
        $jodata = Journal::where('j_id',$j_id)->first();
//        dd($jodata);
        if(empty($jodata)){
            echo "<script>alert('该期刊下没有期刊';location.href='/';)</script>";
        }
        $j_extend = $jodata->j_extend;
        if(strpos($j_extend,',')!==false){
            $j_extend =  str_replace(',','，',$j_extend);
        }
        $j_extend = explode('，',$j_extend);
        $j_banquan = $jodata->j_banquan;
        $shji = Journal::where('j_id',$j_id)->first();
//        dd($shji);
        $uploads = $shji->j_uploads;
        $qi = $shji->j_num;
        if(!empty($qi)){
            if(strpos($qi,',')!==false){
                $qi =  str_replace(',','，',$qi);
             }
             $qi = explode('，',trim($qi,'，'));
             $a = sizeof($qi);
        }

        if(!empty($uploads) && !empty($qi) ){
            $arr = [];
            foreach($uploads as $k=>$v){
                if($k<$a){
                    $arr[$k] = ['uploads'=>$v,'qi'=>$qi[$k]];
                }

            }
        }else{
            $arr = [];
            foreach($uploads as $k=>$v){
                    $arr[$k] = ['uploads'=>$v,'qi'=>null];

            }
        }

        return view('index.zxtg1',[
            'jodata'=>$jodata,
            'j_extend'=>$j_extend,
            'j_banquan'=>$j_banquan,
            'shji'=>$shji,
            'uploads'=>$arr
        ]);
    }

    public function dozxtg1(Request $request)
    {
        $data = request()->post();
        $file = $request->file("file");
//        dd($data);

        $m_title = $data['title'];
        $a_id = $data['a_id'];
        $m_username = $data['name'];
//        dd($m_username);
        $address = $data['address'];
        $m_phone = $data['tel'];
        $m_email = $data['email'];
        $m_qq = $data['qq'];
        $m_remarks = $data['other_'];
        $vers = $data['ver'];
        $verify = $data['verify'];

        if(strcasecmp($vers,$verify)!=0){
            return json_encode(['code'=>7,'massage'=>'验证码不正确']);
        }
        if(empty($m_title)){
            return json_encode(['code'=>6,'massage'=>'请填写标题']);
        }
        $count = Manuscript::where('m_title',$m_title)->count();
        if($count){
            return json_encode(['code'=>3,'massage'=>'该标题已经添加']);
        }
        if(empty($m_username)){
            return json_encode(['code'=>6,'massage'=>'请填写姓名']);
        }
        if(empty($m_phone)){
            return json_encode(['code'=>6,'massage'=>'请填写手机号']);
        }
        if(empty($m_email)){
            return json_encode(['code'=>6,'massage'=>'请填写邮箱']);
        }
        if(empty($m_qq)){
            return json_encode(['code'=>6,'massage'=>'请填写qq/微信']);
        }
        if(empty($address)){
            return json_encode(['code'=>6,'massage'=>'请填写邮寄地址']);
        }

//        dd($file->type);
        //获取上传信息
//        if(empty($file['file']['name'])){
//            return json_encode(['code'=>3,'massage'=>'请选择文件']);
//        }
//        $filename=$file->getClientOriginalName();
//        $filesize=$file->getClientSize();
        $fileextension=$file->getClientOriginalExtension();   //获取文件后缀名
//        dd($fileextension);
        if($fileextension!="docx" && $fileextension!="txt" && $fileextension!="doc"){
            return json_encode(['code'=>5,'massage'=>'请上传合法文件。（*.docx，*.txt,*.doc）']);
        }

//        dd($filesize);
        //确认上传的文件是否成功
        if($file->isValid()) {
            //$picname = $file->getClientOriginalName(); //获取上传原文件名
            $ext = $file->getClientOriginalExtension(); //获取上传文件名的后缀名
            //执行移动上传文件
            $file_path = "uploads/files/".date('Y-m-d',time());
//                dd($file_path);
            $filename = time() . rand(1000, 9999) . "." . $ext;
            $file->move($file_path, $filename);
            $res = Manuscript::insert([
                'm_title'=>$m_title,
                'j_id'=>$a_id,
                'm_username'=>$m_username,
                'm_phone'=>$m_phone,
                'm_email'=>$m_email,
                'm_qq'=>$m_qq,
                'm_address'=>$address,
                'm_files'=>'/files/'.date('Y-m-d',time()).'/'.$filename,
                'm_remarks'=>$m_remarks,
            ]);
            if(!$res){
                return json_encode(['code'=>2,'massage'=>'失败']);
            }
            return json_encode(['code'=>1,'massage'=>'上传成功']);

        }else{
            return json_encode(['code'=>2,'massage'=>'上传失败']);
        }

    }

    public function gjcx1()
    {
        $j_id = request()->input('keyword');
        $jodata = Journal::where('j_id',$j_id)->first();
//        dd($jodata);
        if(empty($jodata)){
            echo "<script>alert('该期刊下没有期刊';location.href='/';)</script>";
        }
        $j_extend = $jodata->j_extend;
        if(strpos($j_extend,',')!==false){
            $j_extend =  str_replace(',','，',$j_extend);
        }
        $j_extend = explode('，',$j_extend);
//        dd($j_problem);
        $shji = Journal::where('p_id',$j_id)->paginate(12);
        return view('index.gjcx1',[
            'jodata'=>$jodata,
            'j_extend'=>$j_extend,
            'shji'=>$shji
        ]);
    }
    public function serchs()
    {
        $data = request()->input();
        $j_id = $data['j_id'];
//        dd($data);
        $key  = $data['keyword'];
        if(empty($key)){
            echo "<script>alert('请填写编号');location.href='/index/gjcx1?j_id=$j_id';</script>";
        }
        $data = Announcement::join('manuscript','announcement.m_id','=','manuscript.m_id')->where('a_gjbh',$key)->get();
        return view('index.serch',[
            'data'=>$data
        ]);
    }
    public function serch1()
    {
        $data = request()->input();

        $key  = $data['keyword'];
        if(empty($key)){
            echo "<script>alert('请填写编号');location.href='/index/gjcx';</script>";
        }
        $data = Announcement::join('manuscript','announcement.m_id','=','manuscript.m_id')->where('a_gjbh',$key)->get();
        return view('index.serch',[
            'data'=>$data
        ]);
    }
    public function shoplxwn()
    {
        $j_id = request()->input('j_id');
        $jodata = Journal::where('j_id',$j_id)->first();
//        dd($jodata);
        if(empty($jodata)){
            echo "<script>alert('该期刊下没有期刊';location.href='/';)</script>";
        }
        $j_extend = $jodata->j_extend;
        if(strpos($j_extend,',')!==false){
            $j_extend =  str_replace(',','，',$j_extend);
        }
        $j_extend = explode('，',$j_extend);
//        dd($j_problem);
        $j_banquan = $jodata->j_banquan;
        $shji = Journal::where('j_id',$j_id)->first();
//        dd($shji);
        $uploads = $shji->j_uploads;
        $qi = $shji->j_num;
        if(!empty($qi)){
            if(strpos($qi,',')!==false){
                $qi =  str_replace(',','，',$qi);
             }
             $qi = explode('，',trim($qi,'，'));
             $a = sizeof($qi);
        }

        if(!empty($uploads) && !empty($qi) ){
            $arr = [];
            foreach($uploads as $k=>$v){
                if($k<$a){
                    $arr[$k] = ['uploads'=>$v,'qi'=>$qi[$k]];
                }

            }
        }else{
            $arr = [];
            foreach($uploads as $k=>$v){
                    $arr[$k] = ['uploads'=>$v,'qi'=>null];

            }
        }

        return view('index.shoplxwn',[
            'jodata'=>$jodata,
            'j_extend'=>$j_extend,
            'j_banquan'=>$j_banquan,
            'shji'=>$shji,
            'uploads'=>$arr
        ]);
    }
    public function fk()
    {
        $j_id = request()->input('j_id');
        $jodata = Journal::where('j_id',$j_id)->first();
//        dd($jodata);
        if(empty($jodata)){
            echo "<script>alert('该期刊下没有期刊';location.href='/';)</script>";
        }
        $j_extend = $jodata->j_extend;
        if(strpos($j_extend,',')!==false){
            $j_extend =  str_replace(',','，',$j_extend);
        }
        $j_extend = explode('，',$j_extend);
//        dd($j_problem);
        $j_banquan = $jodata->j_banquan;
        $shji = Journal::where('j_id',$j_id)->first();
        $uploads = $shji->j_uploads;
//        dd($shji);
        $qi = $shji->j_num;
        if(!empty($qi)){
            if(strpos($qi,',')!==false){
                $qi =  str_replace(',','，',$qi);
             }
             $qi = explode('，',trim($qi,'，'));
             $a = sizeof($qi);
        }

        if(!empty($uploads) && !empty($qi) ){
            $arr = [];
            foreach($uploads as $k=>$v){
                if($k<$a){
                    $arr[$k] = ['uploads'=>$v,'qi'=>$qi[$k]];
                }

            }
        }else{
            $arr = [];
            foreach($uploads as $k=>$v){
                    $arr[$k] = ['uploads'=>$v,'qi'=>null];

            }
        }

        return view('index.fk',[
            'jodata'=>$jodata,
            'j_extend'=>$j_extend,
            'j_banquan'=>$j_banquan,
            'shji'=>$shji,
            'uploads'=>$arr
        ]);
    }

//    public function page()
//    {
//        $page = request()->input('page');
//        $c_id = request()->input('c_id');
//        if(empty($page)){
//            $page = 1;
//        }else{
//            $page = $page;
//        }
//        $count = Article::where('c_id',$c_id)->count();
//        //每页数量
//        $size = 2;
//        //计算总页数
//        $last = ceil($count/$size);
//        //计算上一页
//        $up = $page-1>1?$page-1:1;
//        $down = $page+1>$last?$last:$page+1;
//        //计算偏移量
//        $limit = ($page-1)*$size;
//        $res = DB::select("select * from articles limit $limit,$size");
//        $arr = [];
//        for($i=1;$i<=$last;$i++){
//            $arr[$i]=$i;
//        }
//        if(request()->ajax()){
//            return json_encode(['date'=>$res,'last'=>$last,'up'=>$up,'down'=>$down,'page'=>$page,'arr'=>$arr]);
//        }
//
//    }

}
