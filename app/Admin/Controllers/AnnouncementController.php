<?php

namespace App\Admin\Controllers;

use App\Announcement;
use App\Journal;
use App\Manuscript;
use Encore\Admin\Layout\Content;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Encore\Admin\Controllers\HasResourceActions;
use Illuminate\Support\Facades\DB;

class AnnouncementController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '录用公告管理';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Announcement);

        $grid->column('a_id', __('id'))->sortable();
//        $grid->column('author.m_title', __('期刊名称'));
        $grid->column('status', __('状态'))->radio([
            '1' => '已通过',
            '2' => '审核中'
        ]);;
        $grid->column('a_name', __('作者姓名'));
        $grid->column('a_gjbh', __('审核编号'));
        $grid->column('p_name', __('期刊名称'));

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
        $show = new Show(Announcement::findOrFail($id));

        $show->field('a_id', __('id'));
        $show->status()->using(['1' => '已通过', '2' => '审核中']);
        $show->field('a_name', __('A name'));
        $show->field('a_gjbh', __('A gjbh'));
        $show->field('p_name', __('P name'));
        $show->field('upload_time', __('Upload time'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Announcement);

//        $form->select('m_title')->options('/admin/api/manuscript');
//        $form->select('m_id','期刊名称')->options(function ($id) {
//            $user = Manuscript::find($id);
//            if ($user) {
//                return [$user->m_id => $user->m_title];
//            }
//        })->ajax('/admin/api/manuscript');
        $form->select('m_id', '期刊名称')->match(function ($keyword) {
            return Journal::where('p_id',0)->where('j_title', 'LIKE', '%' . $keyword . '%')
                // because select2 js plugin needs `text` and `id` column,
                // so if your model does not contains these two, remember to AS for them
                ->select([DB::raw('j_title AS text'),('j_id AS id'),])
                ->latest();
        })->text(function ($id) {
            // return type is `{id1: text1, id2: text2...}
            return Journal::where('p_id',0)->whereIn('j_id', [$id])->pluck('j_title', 'j_id');
        });
//        $form->select('a_title','上级期刊');
        $form->radio('status', __('状态'))->options([1 => '已通过', 2 => '审核中'])->default('1');
        $form->text('a_alias', __('文章题目'));
        $form->text('a_name', __('作者姓名'));
        $form->text('a_gjbh', __('审稿编号'));
        $form->text('p_name', __('期刊名称'));
        $form->text('upload_time', __('投稿时间'));

        return $form;
    }
}
