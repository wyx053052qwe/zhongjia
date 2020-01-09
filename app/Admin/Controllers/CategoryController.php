<?php
namespace App\Admin\Controllers;

use App\Category;

use Encore\Admin\Form;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;
use Encore\Admin\Layout\Row;
use Encore\Admin\Tree;
use Encore\Admin\Widgets\Box;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    use ModelForm;

    protected $header = '分类管理';

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header($this->header);
            $content->description('分类列表');

            $content->row(function (Row $row) {

                $row->column(6, $this->treeView()->render());

                $row->column(6, function (Column $column) {
                    $form = new \Encore\Admin\Widgets\Form();
                    $form->action(admin_base_path('/category'));

                    $category = new  Category();
                    $form->select('p_id', '上级')->rules('required')->options($category::selectOptions());
                    $form->text('c_name', __('分类名称'))->creationRules(['required', "unique:category"]);
                    $form->radio('sort','状态')->options(['1' => '显示', '2'=> '隐藏'])->default('1');
                    $form->text('c_alias', __('分类别名'));
                    $form->textarea('c_description', __('描述'));
                    $form->image('c_preview','图片')->uniqueName();

                    $form->hidden('_token')->default(csrf_token());

                    $column->append((new Box(trans('admin.new'), $form))->style('success'));
                });
            });



        });
    }


    protected function treeView()
    {
        return Category::tree(function (Tree $tree) {
            $tree->disableCreate();
            return $tree;
        });
    }


    /**
     * Edit interface.
     *
     * @param $id
     * @return Content
     */
    public function edit($id)
    {
        return Admin::content(function (Content $content) use ($id) {

            $content->header($this->header);
            $content->description('编辑分类');

            $content->body($this->form()->edit($id));
        });
    }

    /**
     * Create interface.
     *
     * @return Content
     */
    public function create()
    {
        return Admin::content(function (Content $content) {

            $content->header($this->header);
            $content->description('添加分类');

            $content->body($this->form());
        });
    }


    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Category::class, function (Form $form) {
            $category = new Category();
            $form->select('p_id', '上级')->rules('required')->options($category::selectOptions());
            $form->text('c_name', __('分类名称'))->creationRules(['required', "unique:category"]);
            $form->radio('sort','状态')->options(['1' => '显示', '2'=> '隐藏'])->default('1');
            $form->text('c_alias', __('分类别名'));
            $form->textarea('c_description', __('描述'));
            $form->image('c_preview','图片')->uniqueName();


        });
    }


//    public function getCategoryOptions()
//    {
//        return DB::table('category')->select('c_id','c_name as text')->get();
//    }
}

























//
//namespace App\Admin\Controllers;
//
//use App\Category;
//use Encore\Admin\Controllers\AdminController;
//use Encore\Admin\Form;
//use Encore\Admin\Grid;
//use Encore\Admin\Show;
//
//class CategoryController extends AdminController
//{
//
//    /**
//     * Title for current resource.
//     *
//     * @var string
//     */
//    protected $title = '分类管理';
//
//    /**
//     * Make a grid builder.
//     *
//     * @return Grid
//     */
//    protected function grid()
//    {
//        $category = new Category();
//        $grid = new Grid(new Category);
//
//        $grid->column('c_id', __('id'));
//        $grid->column('c_name', __('分类名称'));
//
//        //不需要行内编辑/
////        $grid->column('sort','状态')->using(['1' => '显示', '2' => '隐藏']);
//        //可以行内编辑
//        $grid->column('sort','状态')->radio([
//            '1' => '显示',
//            '2' => '隐藏'
//        ]);
////        $grid->column('c_alias', __('分类别名'));
//        $grid->column('c_description', __('描述'));
//        $grid->column('c_preview','图片')->image(env('APP_URL').'/uploads','100','100');
////        $grid->logo('c_pereview')->image(config('http://www.zhongyue.com/uploads'), 100, 100);;
////        $grid->batchActions(function ($batch) {
////            $batch->disableDelete();
////        });
//        $grid->filter(function($filter){
//
//            // 去掉默认的id过滤器
//            $filter->disableIdFilter();
//
//            // 在这里添加字段过滤器
//            $filter->like('c_name', '分类名称');
//        });
//
//        return $grid;
//    }
//
//    /**
//     * Make a show builder.
//     *
//     * @param mixed $id
//     * @return Show
//     */
//    protected function detail($id)
//    {
//        $show = new Show(Category::findOrFail($id));
//
//        $show->field('c_id', __('C id'));
//        $show->field('c_name', __('C name'));
//        $show->field('c_alias', __('分类别名'));
//        $show->field('c_description', __('描述'));
//        $show->field('c_preview','图片')->image(env('APP_URL').'/uploads/','100','100');
//
//        return $show;
//    }
//
//    /**
//     * Make a form builder.
//     *
//     * @return Form
//     */
//    protected function form()
//    {
//        $category = new Category();
//        $form = new Form(new Category);
//
//        $form->select('p_id', '上级')->rules('required')->options($category::selectOptions());
//        $form->text('c_name', __('分类名称'))->creationRules(['required', "unique:category"]);
//        $form->radio('sort','状态')->options(['1' => '显示', '2'=> '隐藏'])->default('1');
//        $form->text('c_alias', __('分类别名'));
//        $form->textarea('c_description', __('描述'));
//        $form->image('c_preview','图片')->uniqueName();
//
//        return $form;
//    }
//
//    protected function tree()
//    {
//        return Category::tree(function (Tree $tree) {
//
//            $tree->branch(function ($data) {
//                return "{$data['c_id']} - {$data['c_name']}";
//
//            });
//
//        });
//    }
//}
