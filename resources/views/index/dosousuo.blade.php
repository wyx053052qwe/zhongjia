@extends('layouts.app')
@section('title', '论文中心')
@section('content')
<!--列表  -->
<div class="body-con-4-1">
    <!--1-->
    @foreach($artdata as $d)
        <dl class="body-con-4-list">
            <dt class="list-title"> <a href="{{url('index/lunwen-zxnext')}}/{{$d->a_id}}/{{$d->c_id}}" target="_blank">{{$d->a_title}}？</a></dt>
            <dd class="list-content">
                <p>{{trim(mb_substr($d->a_contetn, 0, 158, 'utf-8'),'<p></p>')}}...
                    <a href="{{url('index/lunwen-zxnext')}}/{{$d->a_id}}/{{$d->c_id}}" class="more">[详细]</a>
                </p>
            </dd>
            <dd class="list-info">
                <div class="list-date">2018-11-16</div>
                <div class="list-author"></div>
                <div class="clear"></div>
            </dd>
        </dl>
    @endforeach
<!--1-->
    {{--        <dl class="body-con-4-list">--}}
    {{--            <dt class="list-title"> <a href="" target="_blank">期刊论文发表字数要求</a></dt>--}}
    {{--            <dd class="list-content">--}}
    {{--                <p>根据多年来的行业经验，发现很多作者在过程中，总是存在着字数过多或者过少的情况发生，这样就导致了在选择期刊论文发表的过程中出现如下问题。发表论文字数过多会加重作者的经济负担，因为杂志社都是按照版面来收费的，字数过多会导致版面的增加，字数过少的话，论文质量太低，审稿过程中达不到杂志社的要求。鉴于此种情况...--}}
    {{--                    <a href="lunwen-zxnext.html" class="more">[详细]</a>--}}
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
    {{--            <dt class="list-title"> <a href="" target="_blank">护理论文如何快速发表</a></dt>--}}
    {{--            <dd class="list-content">--}}
    {{--                <p>一篇优秀的护理论文可以使作者具有突破性的护理观点、学术成果得以发表和传播，供他人分享借鉴、相互学习，有助于扩大作者在业界和学术界的知名度和影响力。每位想要晋升的护士，都需要先发表护理论文，将护理论文发表成功之后，才能够进行职称评审。那么我们该怎么快速发表护理论文呢？　　　　护理论文快速发表的步骤　　...--}}
    {{--                    <a href="lunwen-zxnext.html" class="more">[详细]</a>--}}
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
{{--        <li><span>共计：{{$count}}篇</span></li>--}}
        {{$artdata->links()}}
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
</div>
<!--论文中心-->


<div class="w1200">
    <div class="articles-box">
        <ul class="li">
            @foreach($jo as $art)
                <li class="box-item">
                    <div class="item-icon"></div>
                    <div class="img-con item-image">
                        <a href="{{url('index/shop1')}}?j_id={{$art->j_id}}" title="{{$art->j_title}}" target="_blank"><img src="{{asset('uploads/'.$art->j_thumbnail)}}" width="130" height="180" alt="{{$art->j_title}}"></a>
                    </div>
                    <div class="item-title">
                        <h4> <a href="{{url('index/shop1')}}?j_id={{$art->j_id}}" title="{{$art->j_title}}" target="_blank">{{$art->j_title}}</a> </h4>
                    </div>
                    <div class="item-info tc">国家级期刊</div>
                    <div class="item-info tc"><span class="red">( 季刊 )</span><span class="red">1-3个月</span>审稿</div>
                </li>
            @endforeach

        </ul>

    </div>
    {{ $jo->links() }}

</div>



{{--<div class="articles-box hzqk-list" >--}}
{{--    <ul>--}}
{{--        @foreach($jo as $art)--}}
{{--            <li class="box-item">--}}
{{--                <div class="item-icon"></div>--}}
{{--                <div class="img-con item-image">--}}
{{--                    <a href="{{url('index/shop1')}}?j_id={{$art->j_id}}" title="{{$art->j_title}}" target="_blank"><img src="{{asset('uploads/'.$art->j_thumbnail)}}" width="130" height="180" alt="{{$art->j_title}}"></a>--}}
{{--                </div>--}}
{{--                <div class="item-title">--}}
{{--                    <h4> <a href="{{url('index/shop1')}}?j_id={{$art->j_id}}" title="{{$art->j_title}}" target="_blank">{{$art->j_title}}</a> </h4>--}}
{{--                </div>--}}
{{--                <div class="item-info tc">国家级期刊</div>--}}
{{--                <div class="item-info tc"><span class="red">( 季刊 )</span><span class="red">1-3个月</span>审稿</div>--}}
{{--            </li>--}}
{{--        @endforeach--}}
        {{--            <li class="box-item">--}}
        {{--                <div class="item-icon"></div>--}}
        {{--                <div class="img-con item-image">--}}
        {{--                    <a href="qikan_6674.html" title="中国地质教育" target="_blank"><img src="statics/img/02.jpg" width="130" height="180" alt="中国地质教育"></a>--}}
        {{--                </div>--}}
        {{--                <div class="item-title">--}}
        {{--                    <h4> <a href="qikan_6674.html" title="中国地质教育" target="_blank">中国地质教育</a> </h4>--}}
        {{--                </div>--}}
        {{--                <div class="item-info tc">国家级期刊</div>--}}
        {{--                <div class="item-info tc"><span class="red">( 季刊 )</span><span class="red">1-3个月</span>审稿</div>--}}
        {{--            </li>--}}
        {{--            <li class="box-item">--}}
        {{--                <div class="item-icon"></div>--}}
        {{--                <div class="img-con item-image">--}}
        {{--                    <a href="qikan_6674.html" title="中国地质教育" target="_blank"><img src="statics/img/03.jpg" width="130" height="180" alt="中国地质教育"></a>--}}
        {{--                </div>--}}
        {{--                <div class="item-title">--}}
        {{--                    <h4> <a href="qikan_6674.html" title="中国地质教育" target="_blank">中国地质教育</a> </h4>--}}
        {{--                </div>--}}
        {{--                <div class="item-info tc">国家级期刊</div>--}}
        {{--                <div class="item-info tc"><span class="red">( 季刊 )</span><span class="red">1-3个月</span>审稿</div>--}}
        {{--            </li>--}}
        {{--            <li class="box-item">--}}
        {{--                <div class="item-icon"></div>--}}
        {{--                <div class="img-con item-image">--}}
        {{--                    <a href="qikan_6674.html" title="中国地质教育" target="_blank"><img src="statics/img/04.jpg" width="130" height="180" alt="中国地质教育"></a>--}}
        {{--                </div>--}}
        {{--                <div class="item-title">--}}
        {{--                    <h4> <a href="qikan_6674.html" title="中国地质教育" target="_blank">中国地质教育</a> </h4>--}}
        {{--                </div>--}}
        {{--                <div class="item-info tc">国家级期刊</div>--}}
        {{--                <div class="item-info tc"><span class="red">( 季刊 )</span><span class="red">1-3个月</span>审稿</div>--}}
        {{--            </li>--}}
        {{--            <li class="box-item">--}}
        {{--                <div class="item-icon"></div>--}}
        {{--                <div class="img-con item-image">--}}
        {{--                    <a href="qikan_6674.html" title="中国地质教育" target="_blank"><img src="statics/img/05.jpg" width="130" height="180" alt="中国地质教育"></a>--}}
        {{--                </div>--}}
        {{--                <div class="item-title">--}}
        {{--                    <h4> <a href="qikan_6674.html" title="中国地质教育" target="_blank">中国地质教育</a> </h4>--}}
        {{--                </div>--}}
        {{--                <div class="item-info tc">国家级期刊</div>--}}
        {{--                <div class="item-info tc"><span class="red">( 季刊 )</span><span class="red">1-3个月</span>审稿</div>--}}
        {{--            </li>--}}
        {{--            <li class="box-item">--}}
        {{--                <div class="item-icon"></div>--}}
        {{--                <div class="img-con item-image">--}}
        {{--                    <a href="qikan_6674.html" title="中国地质教育" target="_blank"><img src="statics/img/06.jpg" width="130" height="180" alt="中国地质教育"></a>--}}
        {{--                </div>--}}
        {{--                <div class="item-title">--}}
        {{--                    <h4> <a href="qikan_6674.html" title="中国地质教育" target="_blank">中国地质教育</a> </h4>--}}
        {{--                </div>--}}
        {{--                <div class="item-info tc">国家级期刊</div>--}}
        {{--                <div class="item-info tc"><span class="red">( 季刊 )</span><span class="red">1-3个月</span>审稿</div>--}}
        {{--            </li>--}}
        {{--            <li class="box-item">--}}
        {{--                <div class="item-icon"></div>--}}
        {{--                <div class="img-con item-image">--}}
        {{--                    <a href="qikan_6674.html" title="中国地质教育" target="_blank"><img src="statics/img/07.jpg" width="130" height="180" alt="中国地质教育"></a>--}}
        {{--                </div>--}}
        {{--                <div class="item-title">--}}
        {{--                    <h4> <a href="qikan_6674.html" title="中国地质教育" target="_blank">中国地质教育</a> </h4>--}}
        {{--                </div>--}}
        {{--                <div class="item-info tc">国家级期刊</div>--}}
        {{--                <div class="item-info tc"><span class="red">( 季刊 )</span><span class="red">1-3个月</span>审稿</div>--}}
        {{--            </li>--}}
        {{--            <li class="box-item">--}}
        {{--                <div class="item-icon"></div>--}}
        {{--                <div class="img-con item-image">--}}
        {{--                    <a href="qikan_6674.html" title="中国地质教育" target="_blank"><img src="statics/img/08.jpg" width="130" height="180" alt="中国地质教育"></a>--}}
        {{--                </div>--}}
        {{--                <div class="item-title">--}}
        {{--                    <h4> <a href="qikan_6674.html" title="中国地质教育" target="_blank">中国地质教育</a> </h4>--}}
        {{--                </div>--}}
        {{--                <div class="item-info tc">国家级期刊</div>--}}
        {{--                <div class="item-info tc"><span class="red">( 季刊 )</span><span class="red">1-3个月</span>审稿</div>--}}
        {{--            </li>--}}
{{--    </ul>--}}
{{--</div>--}}
@endsection
