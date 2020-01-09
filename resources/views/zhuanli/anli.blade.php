@extends('layouts.zhuanli')
@section('title', '专利')
@section('content')
<!--专利-->

<div class="w1200">
    <p class="proname">CASE SHOW</p>
    <div class="kec">
        <p class="prona1">|
            <font color="#000000">案例展示</font> |</p>
    </div>

    <div class="productfra">
        <ul class="productul">
@foreach($data as $d)
            <li>
                <a href="news-next.html" title="{{$d->a_title}}"><img src="{{asset('uploads/'.$d->a_photos)}}" alt="{{$d->a_title}}" width="220" height="165">
                    <p>{{$d->a_title}}</p>
                </a>
            </li>
            @endforeach
{{--            <li>--}}
{{--                <a href="news-next.html" title="发明专利"><img src="{{asset('statics/images/zl01.jpg')}}" alt="发明专利" width="220" height="165">--}}
{{--                    <p>发明专利</p>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <a href="news-next.html" title="外观专利"><img src="{{asset('statics/images/zl01.jpg')}}" alt="外观专利" width="220" height="165">--}}
{{--                    <p>外观专利</p>--}}
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
