@extends('layouts.shop')
@section('title', $jodata['j_title'])
@section('a_title', $jodata['j_title'])
@section('content')
    <style>
        .mr_left .qkxq {
            height: 562px;
        }
        .i_right{
            height:950px;
        }
        .shopxq-right .i_bor {
            border-top: 0px;
            height: 900px;
        }
    </style>
    <!--导航开始-->
    <div class="top">
        <div class="sy-top top-top">

            <li>
                <a href="" target="_blank"><img height="130" width="100" src="{{asset('uploads/'.$jodata['j_thumbnail'])}}" alt="{{$jodata['j_title']}}" border="0" style="padding: 10px 0px 10px 0px;"></a>
            </li>
            <li style="width: 700px;" class="z-long">
                <a class="zz-name">{{$jodata['j_title']}}</a>
            </li>

            <li class="zz-xx">
                @foreach($j_extend as $k)
                {!! $k !!}</br>
                @endforeach
            </li>

        </div>
    </div>
    <div class="sy-navigation">

        <ul class="dh-li" id="per_nav">
            <li class=" per_nav">
                <a href='{{url('index/shop1')}}?j_id={{$jodata['j_id']}}' class="m1">期刊首页</a>

            </li>
            <li class=" per_nav">
                <a href='{{url('index/qkjs')}}?j_id={{$jodata['j_id']}}' class="m2">期刊简介</a>
                <!--<div>
                                    <a href="zgwyj/introduction">杂志介绍</a>
                                    <a href="zgwyj/page/send_word">社长寄语</a>
                                </div>-->
            </li>
            <li class=" per_nav">
                <a href='{{url('index/lmsz')}}?j_id={{$jodata['j_id']}}' class="m3">栏目设置</a>

            </li>
            <li class=" per_nav">
                <a href='{{url('index/qkjj')}}?j_id={{$jodata['j_id']}}' class="m4">期刊目录</a>
            </li>
            <li class=" per_nav">
                <a href='{{url('index/tgyq')}}?j_id={{$jodata['j_id']}}' class="m5">投稿要求</a>
            </li>
            <li class=" per_nav">
                <a href='{{url('index/zxtg1')}}?j_id={{$jodata['j_id']}}' class="m6">在线投稿</a>
            </li>

            <li class=" per_nav">
                <a href='{{url('index/shoplxwn')}}?j_id={{$jodata['j_id']}}' class="m7">联系我们</a>
            </li>
            <li class=" per_nav">
                <a href='{{url('index/fk')}}?j_id={{$jodata['j_id']}}' class="m8">付款方式</a>
            </li>
        </ul>
        <script>
            $('#per_nav a').each(function(k, v) {
                var url = window.location.href;
                var nav_url = $(v).attr('href');

                if(url == nav_url) {
                    $(v).parents('.per_nav').addClass('no');
                }
            })
        </script>

    </div>
    <!--导航结束-->
    <div class="Main" id="con_sttow_2" style="display: block;">
        <!--最左 -->
        <div class="i_right Float_left mr_left">
            <div class="i_tit"><label class="Color3">期刊封面</label></div>
            <div class="i_bor qkfm">
                <img src="{{asset('uploads/'.$jodata['j_thumbnail'])}}">
            </div>
            <div class="i_tit"><label class="Color3">期刊信息</label></div>
            <div class="i_bor qkxq">
{{--                @foreach($j_extend as $e)--}}
{{--                    <p class="qkxx">{!! $e !!}</span></p>--}}
{{--                @endforeach--}}
                    {!! $j_banquan !!}
                {{--                <p class="qkxx">国际刊号ISSN：<span>2096-0298</span></p>--}}
                {{--                <p class="qkxx">国内刊号C N：<span>10-1337/F</span></p>--}}
                {{--                <p class="qkxx">主管单位：<span>中国商业联合会</span></p>--}}
                {{--                <p class="qkxx">主办单位：<span>中国商业联合会</span></p>--}}
                {{--                <p class="qkxx">电子邮箱：<span>qikancn@139.com</span></p>--}}
                {{--                <p class="qkxx">邮发代号：<span>46-357</span></p>--}}
                {{--                <p class="qkxx">创刊时间：<span>1993</span></p>--}}
                {{--                <p class="qkxx">刊社电话：<span>17310730304</span></p>--}}
                {{--                <p class="qkxx">出 版 地：<span>北京市</span></p>--}}
                {{--                <p class="qkxx">出版周期：<span>旬刊</span></p>--}}
                {{--                <p class="qkxx">期刊语种：<span>中文</span></p>--}}
                {{--                <p class="qkxx">期刊开本：<span>大16开</span></p>--}}

            </div>

        </div>

        <!--中间  -->
<div class="right Float_right mr_right shopxq-right">
    <div class="i_tit"> <label class="ft_18 Color1 font-f2">                投稿要求                                </label>
        <p>当前位置:首页 &gt; 投稿要求</p>
    </div>
    <div class="i_bor">

        <!--投稿要求  -->
        <div class="qk-ly">
            <div class="qk-title">投稿要求</div>
        </div>
        <div class="content ft_14 qktg qkji">
            <p>{!! $jodata['j_yaoqiu'] !!}</p>
            <br />
            <div>
							<span style="font-family: arial, helvetica, sans-serif;"><span style="color: rgb(0, 0, 0);"><span style="font-size: 14px;">所投稿件 文责自负，请勿一稿多投！</span></span>
							</span>
            </div>
            <div>
							<span style="font-family: arial, helvetica, sans-serif;"><span style="color: rgb(0, 0, 0);"><span style="font-size: 14px;">为方便于稿件的修改及联络，请作者提供联系方式：通信地址：邮编、电话、手 机、电子信箱等</span></span>
							</span>
            </div>
        </div>

    </div>
</div>

<div class="clear"></div>

</div>
    <!--期刊目录-->
    <div class="Main qkml-lb">
        <div class="Box" id="kt4">
            <div class="content">
                <h2>期刊目录</h2>

                <div class="Box_con clearfix">
                    <span class="btnl btn" id="btnl"></span>
                    <span class="btnr btn" id="btnr"></span>

                    <div class="conbox" id="BoxUl">
                        <ul>
                            @foreach($uploads as $s)
                                <li class="cur">
                                    <a href="#"><img src="{{asset('uploads/'.$s['uploads'])}}" alt="" />
                                        <p>{{$shji->j_title.'.'.$s['qi']}}</p>
                                    </a>
                                </li>
                            @endforeach
                            {{--                            <li class="cur">--}}
                            {{--                                <a href="#"><img src="{{asset('statics/img/02.jpg')}}" alt="" />--}}
                            {{--                                    <p>西安市微型体育课题研究范例参考</p>--}}
                            {{--                                </a>--}}
                            {{--                            </li>--}}
                            {{--                            <li class="cur">--}}
                            {{--                                <a href="#"><img src="{{asset('statics/img/03.jpg')}}" alt="" />--}}
                            {{--                                    <p>西安市微型体育课题研究范例参考</p>--}}
                            {{--                                </a>--}}
                            {{--                            </li>--}}
                            {{--                            <li class="cur">--}}
                            {{--                                <a href="#"><img src="{{asset('statics/img/04.jpg')}}" alt="" />--}}
                            {{--                                    <p>西安市微型体育课题研究范例参考</p>--}}
                            {{--                                </a>--}}
                            {{--                            </li>--}}
                            {{--                            <li class="cur">--}}
                            {{--                                <a href="#"><img src="{{asset('statics/img/05.jpg')}}" alt="" />--}}
                            {{--                                    <p>西安市微型体育课题研究范例参考</p>--}}
                            {{--                                </a>--}}
                            {{--                            </li>--}}
                            {{--                            <li class="cur">--}}
                            {{--                                <a href="#"><img src="{{asset('statics/img/06.jpg')}}" alt="" />--}}
                            {{--                                    <p>西安市微型体育课题研究范例参考</p>--}}
                            {{--                                </a>--}}
                            {{--                            </li>--}}
                        </ul>
                    </div>

                    <p class="BoxSwitch" id="BoxSwitch">
                        <span class="cur"></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </p>

                </div>

            </div>
        </div>

    </div>
@endsection
