@extends('layouts.app')
@section('title', '合作期刊')
@section('content')
<!--合作期刊-->

<!--列表-->
<div class="w1200">
    <div class="sort-box">
        <dl class="box-item after-clear">
            <dd>
                <a href="">期刊杂志大全</a>
            </dd>

        </dl>
        <ul class="box-but after-clear">
            <li>
                <a class="" href="javascript:;" onclick="openChat();" title="">免费咨询</a>
            </li>
        </ul>

    </div>
    <!--  -->
    <div class="articles-box hzqk-list">
        <ul>
                @foreach($artdata as $art)
            <li class="box-item">
                <div class="item-icon"></div>
                <div class="img-con item-image">
                    <a href="{{url('index/shop1')}}?j_id={{$art->j_id}}" title="{{$art->j_title}}" target="_blank"><img src="{{asset('uploads/'.$art->j_thumbnail)}}" width="130" height="180" alt="{{$art->j_title}}"></a>
                </div>
                <div class="item-title">
                    <h4> <a href="{{url('index/shop1')}}?j_id={{$art->j_id}}" title="{{$art->j_title}}" target="_blank">{{$art->j_title}}</a> </h4>
                </div>
            </li>
            @endforeach
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
        </ul>
    </div>
    <!--分页 -->
    <div class="page-box after-clear">
        <ul class="after-clear">
            <li><span>共计：{{$count}}篇</span></li>
            {{$artdata->links()}}
{{--            <li>--}}
{{--                <a title="首页" class="first" href="">首页</a>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <a title="上一页" class="prev" href="">上一页</a>--}}
{{--            </li>--}}
{{--            <li><span>1</span></li>--}}
{{--            <li>--}}
{{--                <a title="下一页" class="next" href="">下一页</a>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <a title="尾页" class="last" href="">尾页</a>--}}
{{--            </li>--}}
        </ul>
    </div>
</div>
<!--合作期刊-->
@endsection
