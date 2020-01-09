<?php

namespace App\Admin\Controllers;

use App\Article;
use App\Category;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Encore\Admin\Widgets\Table;
use think\facade\Request;

class ArticleController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '文章管理';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {


        $grid = new Grid(new Article);

        $grid->column('a_id', __('Id'))->sortable();
        $grid->column('a_title', __('标题'));
        $grid->column ('author.c_name',' 分类 ')->label();
//        $grid->column('c_id', __('分类'));
        $grid->column('a_photos','图片')->image(env('APP_URL').'/uploads','100','100');

        $grid->filter(function($filter){

            // 去掉默认的id过滤器
            $filter->disableIdFilter();
            // 在这里添加字段过滤器
            $filter->like('a_title', '标题');
            $filter->like('author.c_name', '分类');

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

        $show = new Show(Article::findOrFail($id));
        $show->author('分类', function ($author) {

            $author->setResource('/admin/category');

            $author->c_name();
        });
        $show->field('id', __('Id'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {

        $category = new Category();
        $form = new Form(new Article);

        $form->select('c_id', '分类')->options($category::selectOptions());
        $form->text('a_title', '文章标题');
        $form->text('a_keywords', '文章关键词');
        $form->text('a_source', '文章来源');
        $form->textarea('a_excerpt', '摘要');
        $form->UEditor('a_contetn','内容');
       // options 中参数会覆盖 extensions.ueditor.config 中参数
//        $form->UEditor('content')->options(['initialFrameHeight' => 800]);
      // 如果 extensions.ueditor.field_type 定义为 xxxEditor
       // $form->xxxEditor('content');
        $form->image('a_photos','图片')->uniqueName();
        return $form;
    }
}
