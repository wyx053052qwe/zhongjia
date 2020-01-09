<?php

namespace App\Admin\Controllers;

use App\Article;
use App\Manuscript;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use App\Admin\Actions\Document\StarDocument;

class ManuscriptController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '稿件管理';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Manuscript);
        $grid->column('status','状态')->action(StarDocument::class);
        $grid->column('m_id', __('ID'))->sortable();
        $grid->column('m_title', __('标题'));
        $grid->column('jtitle.j_title', __('投稿杂志'));
        $grid->column('m_username', __('姓名'));
        $grid->column('m_phone', __('电话'));
        $grid->column('m_email', __('邮箱'));
//        $grid->column('m_qq', __('qq'));
        $grid->column('m_address', __('邮寄地址'));
//        $grid->column('m_fbtime', __('发表时间要求'));

//        $grid->column('m_remarks', __('说明'));
        $grid->column('m_files')->downloadable();
        $grid->column('created_at','投稿时间')->date('Y-m-d');
        //禁用编辑按钮
        $grid->actions(function ($actions) {
            $actions->disableEdit();
             //编辑按钮重构
        });

        $grid->filter(function($filter){

            // 去掉默认的id过滤器
            $filter->disableIdFilter();

            // 在这里添加字段过滤器
            $filter->like('m_title', '标题');

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
        $show = new Show(Manuscript::findOrFail($id));

        $show->field('m_id', __('M id'));
        $show->field('m_title', __('M title'));
        $show->field('m_files', __('M files'));
        $show->field('m_username', __('M username'));
        $show->field('m_phone', __('M phone'));
        $show->field('m_email', __('M email'));
        $show->field('m_qq', __('M qq'));
        $show->field('m_fbtime', __('M fbtime'));
        $show->field('m_remarks', __('M remarks'));
        $show->field('create_at', __('Create at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
//    protected function form()
//    {
//        $form = new Form(new Manuscript);
//
//        $form->text('m_title', __('M title'));
//        $form->text('m_files', __('M files'));
//        $form->text('m_username', __('M username'));
//        $form->text('m_phone', __('M phone'));
//        $form->text('m_email', __('M email'));
//        $form->text('m_qq', __('M qq'));
//        $form->text('m_fbtime', __('M fbtime'));
//        $form->textarea('m_remarks', __('M remarks'));
//        $form->number('create_at', __('Create at'));
//
//        return $form;
//    }
}
