<link rel="stylesheet" href="{{asset('layui/css/layui.css')}}">
<?$c_id = request()->input('c_id')?>
<a class="layui-btn" href="journal/create?c_id={{$c_id}}">添加期刊</a>
<table class="hrPageTable table table-hover table-bordered">
    <tr>
        <td>ID</td>
        <td>标题</td>
        <td>点击量</td>
        <td>添加时间</td>
        <td>操作</td>
    </tr>
    @foreach($data as $d)
    <tr>
        <td>{{$d->j_id}}</td>
        <td>{{$d->j_title}}</td>
        <td>{{$d->sort}}</td>
        <td>{{$d->created_at}}</td>
        <td>
            <a href="/admin/journal/{{$d->j_id}}/edit" class="layui-btn layui-btn-normal">编辑</a>
            <a data-_key="{{$d->j_id}}" href="javascript:void(0);" class="delete layui-btn layui-btn-danger"  j_id="{{$d->j_id}}">删除</a>
{{--            <a href="" class="delete">删除</a>--}}
        </td>
    </tr>
        @endforeach
</table>

<link rel="stylesheet" href="{{asset('layui/layui.js')}}">
<script>
    // $(document).on('click','.delete',function(){
    //     var j_id = $('.id').attr('j_id');
    //
    // });
    $('.delete').on('click', function() {
        var j_id = $(this).attr('j_id');
        swal({
            title: "确认删除,如果删除该分类下所有子分类都将删除?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "确认",
            showLoaderOnConfirm: true,
            cancelButtonText: "取消",
            preConfirm: function() {
                    $.ajax({
                        method: 'get',
                        url: 'delete/',
                        data:{j_id:j_id},
                        dataType:'json',
                        success: function (data) {
                            if(data.code==1){
                                alert(data.massage);
                                location.href='grid';
                            }else if(data.code==2){
                                alert(data.massage);
                            }else if(data.code==3){
                                alert(data.massage);
                            }
                        }
                    });
            }
        })
    });

</script>
