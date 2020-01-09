<?php
namespace App\Admin\controllers;

use App\Article;
use App\Category;
use App\Journal;
use App\Manuscript;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Controllers\ModelForm;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;
use Encore\Admin\Widgets\Table;
use Illuminate\Http\Request;
use Encore\Admin\Facades\Admin;
use Illuminate\Support\Facades\Storage;
use DB;



class ApiController extends AdminController
{
//    public  function article(Request $request)
//    {
//        $provinceId = $request->get('q');
//
//         $a = Article::where('c_id', $provinceId)->get(['c_id', DB::raw('a_title')]);
//         return  response()->json($a);
//    }
    public function article(Request $request)
    {
        $provinceId = $request->get('q');
//        dd($provinceId);
        $data = Journal::where('c_id', $provinceId)->where('p_id',0)->get(['j_id','j_title'])->toArray();
//        dd($data);
        $arr = [];
        if (empty($data)) {
            return $arr;
        }
        foreach ($data as $item) {
//            dump($item);
            $_item = $item["j_id"];
            $_item1 = $item["j_title"];
            $arr[$_item] = $_item1;
        }
//        dd($arr);
        return $arr;
    }
    public static function getSelectOptions()
    {
        $options = DB::table('Journal')->select('a_id','a_title as text')->get();
        $selectOption = [];
        foreach ($options as $option){
            $selectOption[$option->id] = $option->text;
        }
        return $selectOption;
    }

    protected function grid(Content $content)
    {

        return Admin::content(function ($content) {
            $c_id = request()->input('c_id');
            $data = Journal::where('c_id',$c_id)->get(['j_id','j_title','sort','created_at','c_id']);
//            dd($c_id);
            $content->body(view('video',['data'=>$data]));
        });

    }

    public function delete()
    {
        $j_id = request()->input('j_id');
//        dd($j_id);
        $count = Journal::where('p_id',$j_id)->count();
        if($count){
            return json_encode(['code'=>2,'massage'=>"该分类有子分类，请删除子分类"]);
        }
        $res = Journal::where('j_id',$j_id)->first();
        $mconfig = Journal::where('j_thumbnail',$res->j_thumbnail)->first();
//        dd($mconfig->val);
        $path = 'uploads/'.$mconfig->j_thumbnail;
//        dd($path);
        if(file_exists($path)){
           @unlink ($path);
        }
        $result = Journal::where('j_id',$j_id)->delete();
        if($result){
            return json_encode(['code'=>1,'massage'=>'删除成功']);
        }else{
            return json_encode(['code'=>2,'massage'=>'删除失败']);
        }

    }

//    public function manuscript(Request $request)
//    {
//        $q = $request->get('q');
////dd($q);
//         $data = Manuscript::where('m_title', 'like', "%$q%")->paginate(null, ['m_id', 'm_title as text']);
//         return $data;
//    }

    public function creates()
    {
        return Admin::content(function ($content) {
            $c_id = request()->input('c_id');
//            dd($c_id);
            $c_name = Category::where('c_id',$c_id)->first();
            $content->body(view('creates',['$c_name'=>$c_name]));
        });
    }
    protected function form()
    {

        $form = new Form(new Journal);
        $form->column(3/4, function ($form) {
            $category = new Category();
            //判断是添加还是修改
            //根据select选择框改变，根据c_id使用api查询上级期刊

//                $form->select('c_id', '分类')->options(function(){
//                    $c_id = request()->input('c_id');
////                    dd($c_id);
//                    $cate = Category::where('c_id',$c_id)->get();
//                    $arr = [];
//                    foreach($cate as $k=>$v){
//                        $arr[$v->c_id] = $v->c_name;
//                        if($v->c_name==$c_id){
//                            $arr[$k]['selected'] = true;
//                        }
//                    }
//
//                    return $arr;
//                })->rules('required', ['required' => '请选择分类']);
            $form->text('c_id','分类')->default(function() {
                $c_id = request()->input('c_id');
//                    dd($c_id);
                $cate = Category::where('c_id', $c_id)->first();
                $c_name = $cate->c_name;
                return $c_name;
            });

            $form->select('p_id','上级期刊')->options(function(){
                //接受路由上的值
                //查询数据库
                $su = request()->route('journal');
//                dd($su);
                $jodata = Journal::where('p_id',0)->get();
                $list = ['0'=>'顶级'];
                foreach($jodata as $k=>$v){
//                    dump($v->a_title);
                    $list[$v->j_id]=$v->j_title;
                    if($v->j_title==$su){
                        $list[$k]['selected'] = true;
                    }

                }
                return $list;
            });


            $form->text('j_title', __('标题'))->creationRules(['required', "unique:journal"]);
            $form->textarea('j_extend', __('期刊信息'))->placeholder('请使用中文逗号分隔,如期刊刊名：《errty》杂志社，国际刊号ISSN：2096-0298');
            $form->text('j_time', __('审稿时间'))->placeholder('2012-02-12');
            $form->textarea('j_excerpt', __('期刊简介'));
            $form->textarea('j_cate_config', __('栏目设置'));
            $form->UEditor('j_banquan', __('版权声明'));
            $form->UEditor('j_yaoqiu', __('投稿要求'))->placeholder('请使用中文逗号分隔,如期刊刊名：《errty》杂志社，国际刊号ISSN：2096-0298');
            $form->UEditor('j_problem', __('常见问题'))->placeholder('请使用中文逗号分隔,如期刊刊名：《errty》杂志社，国际刊号ISSN：2096-0298');
        });
        $form->column(1/4, function ($form) {
            $form->image('j_thumbnail','图片')->uniqueName();
            $form->image('j_picture','备案信息')->uniqueName();
        });
        $form->setAction('/admin/journal/create');
        return $form;
    }


    public function upload()
    {
        $data = [];
        if (request()->Method() == 'POST') {
            $file = request()->file('file');
            // 移动到框架应用根目录/upload/ 目录下
            //确认上传的文件是否成功
            if ($file->isValid()) {
                //$picname = $file->getClientOriginalName(); //获取上传原文件名
                $ext = $file->getClientOriginalExtension(); //获取上传文件名的后缀名
                //执行移动上传文件
                $file_path = "uploads/images/" . date('Y-m-d', time());
//                dd($file_path);
                $filename = time() . rand(1000, 9999) . "." . $ext;
                $file->move($file_path, $filename);
                return json_encode(['data'=>$file_path.'/'.$filename]);
            }
        }
    }

}

