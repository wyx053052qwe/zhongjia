<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

//    $router->get('/', 'HomeController@index')->name('admin.home');
    Route::get('/', function () {
        return redirect('admin/category');
    });

    Route::get('/admin/dashboard', function () {
        return redirect('admin/category');
    });
    $router->resource('users', UserController::class);    //用户

    $router->resource('article', ArticleController::class); //文章管理

    $router->resource('category', CategoryController::class);  //分类
//    $router->resource('/web/categories',CategoryController::class);

    $router->resource('journal', JournalController::class);   //期刊

    $router->resource('manuscript', ManuscriptController::class); //稿件管理

    $router->resource('announcement', AnnouncementController::class);   //录用公告管理

//接口
    $router->get('api/article','ApiController@article');   //查询分类
    $router->get('api/manuscript','ApiController@manuscript');     //查询投稿标题

    $router->get('/grid','ApiController@grid');
    $router->get('/delete','ApiController@delete');
    $router->post('upload','ApiController@upload');
    $router->put('/admin/journal/docrea','JournalController@docrea');


});
