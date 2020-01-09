<?php
use Encore\Admin\Grid;
use Encore\Admin\Form;
use App\Admin\Extensions\Uploade;
/**
 * Laravel-admin - admin builder based on Laravel.
 * @author z-song <https://github.com/z-song>
 *
 * Bootstraper for Admin.
 *
 * Here you can remove builtin form field:
 * Encore\Admin\Form::forget(['map', 'editor']);
 *
 * Or extend custom form field:
 * Encore\Admin\Form::extend('php', PHPEditor::class);
 *
 * Or require js and css assets:
 * Admin::css('/packages/prettydocs/css/styles.css');
 * Admin::js('/packages/prettydocs/js/main.js');
 *
 */
Form::extend('upload', Uploade::class);

Encore\Admin\Form::forget(['map', 'editor']);
use Encore\Admin\Facades\Admin;

Admin::navbar(function (\Encore\Admin\Widgets\Navbar $navbar) {

//    $navbar->left('html...');
//
//    $navbar->right('html...');
    $navbar->left(new \App\Admin\Extensions\Nav\Links());
});


