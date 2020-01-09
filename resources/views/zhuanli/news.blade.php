@extends('layouts.zhuanli')
@section('title', '专利')
@section('content')
<!--新闻-->
<div class="w1200">
    <div class="sort-box lunwen-t">
        <dl class="box-item after-clear">
            <dd class="desc active">专利资讯<i></i></dd>
        </dl>
        <ul class="box-but after-clear">
            <li>
                <a href="javascript:;" onclick="openChat();" title="免费咨询" rel="nofollow">免费咨询</a>
            </li>
        </ul>
        <div class="clear"></div>
    </div>
    <!--列表  -->
    <div class="body-con-4-1">
        <!--1-->
        @foreach($data as $d)
        <dl class="body-con-4-list">
            <dt class="list-title"> <a href="{{url('zhuanli/next')}}/{{$d->a_id}}/{{$d->c_id}}" target="_blank">{{$d->a_title}}？</a></dt>
            <dd class="list-content">
                <p>{{trim(mb_substr($d->a_contetn, 0, 158, 'utf-8'),'<p></p>')}}...<a href="{{url('zhuanli/next')}}/{{$d->a_id}}/{{$d->c_id}}" class="more">[详细]</a></p>
            </dd>
            <dd class="list-info">
                <div class="list-date">{{$d->created_at}}</div>
                <div class="list-author"></div>
                <div class="clear"></div>
            </dd>
        </dl>
        @endforeach
        <!--1-->
{{--        <dl class="body-con-4-list">--}}
{{--            <dt class="list-title"> <a href="{{url('zhuanli/next')}}" target="_blank">期刊专利发表字数要求</a></dt>--}}
{{--            <dd class="list-content">--}}
{{--                <p>根据多年来的行业经验，发现很多作者在过程中，总是存在着字数过多或者过少的情况发生，这样就导致了在选择期刊专利发表的过程中出现如下问题。发表专利字数过多会加重作者的经济负担，因为杂志社都是按照版面来收费的，字数过多会导致版面的增加，字数过少的话，专利质量太低，审稿过程中达不到杂志社的要求。鉴于此种情况...--}}
{{--                    <a href="{{url('zhuanli/next')}}" class="more">[详细]</a>--}}
{{--                </p>--}}
{{--            </dd>--}}
{{--            <dd class="list-info">--}}
{{--                <div class="list-date">2018-11-16</div>--}}
{{--                <div class="list-author"></div>--}}
{{--                <div class="clear"></div>--}}
{{--            </dd>--}}
{{--        </dl>--}}
{{--        <!--1-->--}}
{{--        <dl class="body-con-4-list">--}}
{{--            <dt class="list-title"> <a href="{{url('zhuanli/next')}}" target="_blank">护理专利如何快速发表</a></dt>--}}
{{--            <dd class="list-content">--}}
{{--                <p>一篇优秀的护理专利可以使作者具有突破性的护理观点、学术成果得以发表和传播，供他人分享借鉴、相互学习，有助于扩大作者在业界和学术界的知名度和影响力。每位想要晋升的护士，都需要先发表护理专利，将护理专利发表成功之后，才能够进行职称评审。那么我们该怎么快速发表护理专利呢？　　　　护理专利快速发表的步骤　　...--}}
{{--                    <a href="{{url('zhuanli/next')}}" class="more">[详细]</a>--}}
{{--                </p>--}}
{{--            </dd>--}}
{{--            <dd class="list-info">--}}
{{--                <div class="list-date">2018-11-16</div>--}}
{{--                <div class="list-author"></div>--}}
{{--                <div class="clear"></div>--}}
{{--            </dd>--}}
{{--        </dl>--}}
    </div>
</div>
<!--分页 -->
<div class="page-box after-clear">
    <ul class="after-clear">
        <li><span>共计：{{$count}}篇</span></li>
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
