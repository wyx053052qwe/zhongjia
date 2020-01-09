@extends('layouts.keti')
@section('title', '成功案例')
@section('content')
<!--成功案例 -->
<div class="keti-anli list-c4">
    @foreach($data as $d)
    <li>
        <div class="clearfix">
            <div class="pic"><img src="{{asset('uploads/'.$d->a_photos)}}" alt="{{$d->a_title}}"></div>
            <div class="text">
                <div class="info">2019-01-22 15:07:24 / 人气145 / 评论0</div>
                <div class="title">
                    <a href="{{url('keti/anlinext')}}/{{$d->a_id}}/{{$d->c_id}}" title="{{$d->a_title}}">{{$d->a_title}}</a><span class="red">精品</span></div>
                <p>{{trim(mb_substr($d->a_contetn, 0, 158, 'utf-8'),'<p></p>')}}....</p>

                <div class="list-c4-btn">
                    <a rel="nofollow" href="{{url('keti/anlinext')}}/{{$d->a_id}}/{{$d->c_id}}" title="">查看详情</a>
                </div>
            </div>
        </div>
    </li>
    @endforeach
{{--    <li>--}}
{{--        <div class="clearfix">--}}
{{--            <div class="pic"><img src="{{asset('statics/img/keti2.jpg')}}" alt="高教授参与国家级教育课题成功"></div>--}}
{{--            <div class="text">--}}
{{--                <div class="info">2019-01-22 15:07:24 / 人气145 / 评论0</div>--}}
{{--                <div class="title">--}}
{{--                    <a href="{{url('keti/anlinext')}}" title="SCI医学论文题目高教授参与国家级教育课题成功">高教授参与国家级教育课题成功</a><span class="red">精品</span></div>--}}
{{--                <p>高教授已经评上了副高级教授职称，目前正在努力评正高级教授职称。高教授所在的高校是全日制本科院校，要求正高级教授职称评审必须有国家级课题，而今年高教授专业的国家级课题申请非常难。 高教授与亿百出版网编辑团队协商合作，由我们这里的专业团队帮助高....</p>--}}

{{--                <div class="list-c4-btn">--}}
{{--                    <a rel="nofollow" href="{{url('keti/anlinext')}}" title="">查看详情</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </li>--}}
{{--    <li>--}}
{{--        <div class="clearfix">--}}
{{--            <div class="pic"><img src="{{asset('statics/img/keti3.jpg')}}" alt="高教授参与国家级教育课题成功"></div>--}}
{{--            <div class="text">--}}
{{--                <div class="info">2019-01-22 15:07:24 / 人气145 / 评论0</div>--}}
{{--                <div class="title">--}}
{{--                    <a href="{{url('keti/anlinext')}}" title="SCI医学论文题目高教授参与国家级教育课题成功">高教授参与国家级教育课题成功</a><span class="red">精品</span></div>--}}
{{--                <p>高教授已经评上了副高级教授职称，目前正在努力评正高级教授职称。高教授所在的高校是全日制本科院校，要求正高级教授职称评审必须有国家级课题，而今年高教授专业的国家级课题申请非常难。 高教授与亿百出版网编辑团队协商合作，由我们这里的专业团队帮助高....</p>--}}

{{--                <div class="list-c4-btn">--}}
{{--                    <a rel="nofollow" href="{{url('keti/anlinext')}}" title="">查看详情</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </li>--}}
{{--    <li>--}}
{{--        <div class="clearfix">--}}
{{--            <div class="pic"><img src="{{asset('statics/img/keti4.jpg')}}" alt="高教授参与国家级教育课题成功"></div>--}}
{{--            <div class="text">--}}
{{--                <div class="info">2019-01-22 15:07:24 / 人气145 / 评论0</div>--}}
{{--                <div class="title">--}}
{{--                    <a href="keti-anlinext.html" title="SCI医学论文题目高教授参与国家级教育课题成功">高教授参与国家级教育课题成功</a><span class="red">精品</span></div>--}}
{{--                <p>高教授已经评上了副高级教授职称，目前正在努力评正高级教授职称。高教授所在的高校是全日制本科院校，要求正高级教授职称评审必须有国家级课题，而今年高教授专业的国家级课题申请非常难。 高教授与亿百出版网编辑团队协商合作，由我们这里的专业团队帮助高....</p>--}}

{{--                <div class="list-c4-btn">--}}
{{--                    <a rel="nofollow" href="keti-anlinext.html" title="">查看详情</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </li>--}}
</div>
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
<!--成功案例 -->
@endsection
