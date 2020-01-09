<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{asset('layui/layui.js')}}"></script>
    <title>Document</title>
</head>
<body>
<form action="/adminyc/area" method="post">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">添加期刊</h3>
                </div>
                <div class="form-horizontal">
                    <div class="box-body">
                        <div class="form-group ">
                            <label for="text1" class="col-sm-2 control-label">标题</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="text1" placeholder="公司名称" name="j_title" value="">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="text1" class="col-sm-2 control-label">标题</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="text1" placeholder="公司名称" name="j_title" value="">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="text1" class="col-sm-2 control-label">标题</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="text1" placeholder="公司名称" name="j_title" value="">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="text1" class="col-sm-2 control-label">标题</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="text1" placeholder="公司名称" name="j_title" value="">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="text1" class="col-sm-2 control-label">标题</label>
                            <div class="col-sm-10">
                                <textarea id="demo" style="display: none;"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="box-footer">
        <button type="submit" class="btn btn-info pull-right">保存</button>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </div>
</form>
</body>
</html>
    <script>
        layui.use(['layedit'], function(){
            var layedit = layui.layedit;
            layedit.build('demo'); //建立编辑器
        });
</script>

