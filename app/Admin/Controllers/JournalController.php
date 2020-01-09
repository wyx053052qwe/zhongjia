<?php

namespace App\Admin\Controllers;

use App\Article;
use App\Category;
use App\Journal;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Support\Facades\Route;



class JournalController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '期刊管理';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Journal);

        $grid->column('j_id', __('id'))->sortable();
        $grid->column('j_title', __('标题'));
        $grid->column ('author.c_name',' 分类 ')->label();
//        $grid->column('p_id', __('上级期刊'))->display(function ($title) {
//
//            return "<span style='color:blue'>$title</span>";
//        });
        $grid->column('j_time', __('审稿时间'));

        $grid->column('j_thumbnail','图片')->image(env('APP_URL').'/uploads','100','100');

        $jo = Journal::where('p_id',1)->get();
        $grid->filter(function($filter){

            // 去掉默认的id过滤器
            $filter->disableIdFilter();
            // 在这里添加字段过滤器
            $filter->like('j_title', '标题');

        });

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Journal::findOrFail($id));

        $show->field('j_id', __('id'));
        $show->field('c_id', __('分类'));
        $show->field('a_id', __('上级期刊'));
        $show->field('j_title', __('标题'));
        $show->field('j_extend', __('期刊信息'));
        $show->field('j_time', __('审稿时间'));
        $show->field('j_excerpt', __('期刊简介'));
        $show->field('j_cate_config', __('栏目设置'));
        $show->field('j_yaoqiu', __('版权声明'));
        $show->field('j_problem', __('常见问题'));
        $show->field('j_thumbnail','图片')->image(env('APP_URL').'/uploads/','100','100');
        $show->field('j_picture','备案信息')->image(env('APP_URL').'/uploads/','100','100');

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {

        $form = new Form(new Journal);
        $form->column(2/3, function ($form) {
            $category = new Category();
            //判断是添加还是修改
            $aa = Route::currentRouteName();
            $c_id = request()->input('c_id');

           if(!empty($c_id)){
               $form->select('c_id','分类')->options(function() {
                   $c_id = request()->input('c_id');
//                    dd($c_id);
                   $cate = Category::where('c_id', $c_id)->get();
//                   dd($cate);
                   $arr = [$cate[0]->c_id=>$cate[0]->c_name];
                   foreach($cate as $k=>$v) {
//                    dump($v->j_title);
                       $arr[$v->c_id] = $v->c_name;
                       if ($v->c_name == $c_id) {
                           $arr[$k]['selected'] = true;
                       }
                   }
//                   dd($arr);
                   return $arr;

               });//根据select选择框改变，根据c_id使用api查询上级期刊
           }else if($aa == "journal.edit"){
                   $form->select('c_id', '分类')->options($category::selectOptions());
               }else{
                   $form->select('c_id', '分类')->options($category::selectOptions())->load('a_id', '/admin/api/article')->rules('required', ['required' => '请选择分类']);
               }


            $form->select('p_id','上级期刊')->options(function(){
                //接受路由上的值
                //查询数据库
                $su = request()->route('journal');
//                dd($su);
                $jodata = Journal::where('p_id',0)->get();
                $list = ['0'=>'顶级'];
                foreach($jodata as $k=>$v){
//                    dump($v->j_title);
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
            $form->UEditor('j_banquan', __('版权信息'));
            $form->UEditor('j_yaoqiu', __('投稿要求'))->placeholder('请使用中文逗号分隔,如期刊刊名：《errty》杂志社，国际刊号ISSN：2096-0298');
            $form->UEditor('j_problem', __('常见问题'))->placeholder('请使用中文逗号分隔,如期刊刊名：《errty》杂志社，国际刊号ISSN：2096-0298');
            $form->multipleImage('j_uploads','期刊目录图片')->removable();
            $form->text('j_num', __('子刊名称'))->placeholder('请使用中文逗号分隔,如第一期，第二期');
        });
        $form->column(1/3, function ($form) {
            $form->image('j_thumbnail','图片')->uniqueName();
            $form->image('j_picture','备案信息')->uniqueName();
        });
//        dd($form);
        return $form ;
    }
}
