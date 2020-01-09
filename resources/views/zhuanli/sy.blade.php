@extends('layouts.zhuanli')
@section('title', '专利')
@section('content')
<!--发明 外观专利页面同此页面  -->
<div class="w1200">
    <p class="proname">SERVICE PROJECT</p>
    <div class="kec">
        <p class="prona1">|
            <font color="#000000">实用新型专利</font> |</p>
    </div>
    <div class="lv_mmtopc">
        <div class="search">
            <form action="{{url('zhuanli/sy')}}" method="get" onsubmit="">
                <input type="text" class="text" name="key" placeholder="请输入关键词">
                <input type="submit" title="搜索" class="button" value=""></form>
        </div>
    </div>
    <div class="prolanmu1">
        <div class="pro_lanfra" style="padding-bottom:0">

            <span><a href="?classid=16" title="实用新型专利" class="">实用新型专利</a></span>

            <span><a href="?classid=18" title="医生（医疗）职称专利" class="">医生（医疗）职称专…</a></span>
            <span><a href="?classid=19" title="教师（学生）职称专利" class="">教师（学生）职称专…</a></span>
            <span><a href="?classid=20" title="企事业单位职称专利" class="">企事业单位职称专利…</a></span>
        </div>
    </div>
    <div class="productfra">
        <ul class="productul">
@foreach($data as $d)
            <li>
                <a href="{{url('zhuanli/next')}}/{{$d->a_id}}/{{$d->c_id}}" title="{{$d->title}}"><img src="{{asset('uploads/'.$d->a_photos)}}" alt="{{$d->title}}" width="220" height="165">
                    <p>{{$d->title}}</p>
                </a>
            </li>
            @endforeach
{{--            <li>--}}
{{--                <a href="news-next.html" title="实用新型专利"><img src="{{asset('statics/images/zl01.jpg')}}" alt="实用新型专利" width="220" height="165">--}}
{{--                    <p>实用新型专利</p>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <a href="news-next.html" title="实用新型专利"><img src="{{asset('statics/images/zl01.jpg')}}" alt="实用新型专利" width="220" height="165">--}}
{{--                    <p>实用新型专利</p>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <a href="news-next.html" title="实用新型专利"><img src="{{asset('statics/images/zl01.jpg')}}" alt="实用新型专利" width="220" height="165">--}}
{{--                    <p>实用新型专利</p>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <a href="news-next.html" title="实用新型专利"><img src="{{asset('statics/images/zl01.jpg')}}" alt="实用新型专利" width="220" height="165">--}}
{{--                    <p>实用新型专利</p>--}}
{{--                </a>--}}
{{--            </li>--}}
        </ul>
        <div class="clear"></div>
        <!--分页样式-->

    </div>
</div>
<!--分页 -->
<div class="page-box after-clear">
    <ul class="after-clear">
{{$data->links()}}
{{--        <li>--}}
{{--            <a title="首页" class="first" href="">首页</a>--}}
{{--        </li>--}}
{{--        <li>--}}
{{--            <a title="上一页" class="prev" href="">上一页</a>--}}
{{--        </li>--}}
{{--        <li><span>1</span></li>--}}
{{--        <li>--}}
{{--            <a title="下一页" class="next" href="">下一页</a>--}}
{{--        </li>--}}
{{--        <li>--}}
{{--            <a title="尾页" class="last" href="">尾页</a>--}}
{{--        </li>--}}
    </ul>
</div>
@endsection
