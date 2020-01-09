<?php
namespace App\Admin\Extensions;

use Encore\Admin\Form\Field;

class Uploade extends Field
{
    protected $view = 'admin.upload';

    protected static $css = [
        '/vendor/layui/css/layui.css',
    ];

    protected static $js = [
        '/vendor/layui/layui.js',
    ];

    public function render()
    {
        $name = $this->formatName($this->column);

        $this->script = <<<EOT
layui.use('upload', function () {
        var upload = layui.upload;
	//多图片上传
  upload.render({
    elem: '#test2'
    ,url: '/admin/upload'
    ,auto:true
    ,multiple: true
    ,dataType:'json'
    ,success: function(obj){
      //预读本地文件示例，不支持ie8
      obj.preview(function(index, file, result){
      console.log(file);
        $('#demo2').append('<img src="'+ result +'" alt="'+ file.name +'" height="50px" class="layui-upload-img">')
      });
    }
    ,done: function(res){
<!--     console.log(res);-->
     $('#demo3').append('<input type="hidden" name="j_uploads[]" value="'+res.data+'">');
    }
  });
  });

EOT;
        return parent::render();
    }

}
