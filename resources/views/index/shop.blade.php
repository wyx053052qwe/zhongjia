@extends('layouts.shop')
@section('title', $jodata['a_title'])
@section('a_title', $jodata['a_title'])
@section('content')
    <!--导航开始-->
    <!--导航开始-->
    <div class="nav shop-nav">
        <div id="menu_hover_bg" style="height: 0px; overflow: hidden;"></div>
        <div class="w1200 shop-nav">

            <div class="menu shop-menu">
                <ul>
                    <li>
                        <h2><a href="{{url('index/shop')}}?a_id={{$jodata['a_title']}}">期刊首页</a></h2>

                    </li>
                    <li>
                        <h2><a href="{{url('index/qkjs')}}?a_id={{$jodata['a_title']}}">期刊简介</a></h2>

                    </li>
                    <li>
                        <h2><a href="{{url('index/lmsz')}}?a_id={{$jodata['a_title']}}">栏目设置</a></h2>

                    </li>
                    <li>
                        <h2><a href="{{url('index/qkjj')}}?a_id={{$jodata['a_title']}}">期刊目录</a></h2>

                    </li>
                    <li>
                        <h2><a href="{{url('index/tgyq')}}?a_id={{$jodata['a_title']}}">投稿要求</a></h2>

                    </li>
                    <li>
                        <h2><a href="{{url('index/zxtg1')}}?a_id={{$jodata['a_title']}}">在线投稿</a></h2>

                    </li>
                    <li>
                        <h2><a href="{{url('index/gjcx1')}}?a_id={{$jodata['a_title']}}">稿件查询</a></h2>

                    </li>

                    <li>
                        <h2><a href="{{url('index/shoplxwn')}}?a_id={{$jodata['a_title']}}">联系我们</a></h2>

                    </li>
                    <li>
                        <h2><a href="{{url('index/fk')}}?a_id={{$jodata['a_title']}}">付款方式</a></h2>

                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--导航结束-->
    <div class="Main" id="con_sttow_2" style="display: block;">
        <!--最左 -->
        <div class="i_right Float_left mr_left">
            <div class="i_tit"><label class="Color3">期刊封面</label></div>
            <div class="i_bor qkfm">
                <img src="{{asset('uploads/'.$jodata['a_photos'])}}">
            </div>
            <div class="i_tit"><label class="Color3">期刊信息</label></div>
            <div class="i_bor qkxq">
                @foreach($j_extend as $e)
                <p class="qkxx">{{$e}}</span></p>
                @endforeach
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
<div class="right Float_right mr_right">
    <div class="i_tit"> <label class="ft_18 Color1 font-f2">                杂志简介                                </label>
        <p>当前位置:首页 &gt; 杂志简介 </p>
    </div>
    <div class="i_bor">
        <!--公告  -->
        <div class="qk-ly">
            <div class="qk-title">稿件录用公告</div>
        </div>
        <div class="content ft_14 qktg">

            <div id="demo02" class="message">
                <ul>
                    @foreach($anndata as $a)
                    <li>
                        <a href="" target="_blank"> {{$a['a_alias']}} <span>@if($a['status']==1)已通过@else 审核中 @endif</span><span><c>({{$a['a_name']}})</c></span> </a>
                    </li>
                    @endforeach
{{--                    <li>--}}
{{--                        <a href="" target="_blank"> 绞吸式挖泥船疏浚能力提升的改造分析 <span>已录用</span><span><c>(邓鸿昌)</c></span> </a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="" target="_blank"> 绞吸式挖泥船疏浚能力提升的改造分析 <span>已录用</span><span><c>(邓鸿昌)</c></span> </a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="" target="_blank"> 绞吸式挖泥船疏浚能力提升的改造分析 <span>已录用</span><span><c>(邓鸿昌)</c></span> </a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="" target="_blank"> 绞吸式挖泥船疏浚能力提升的改造分析 <span>已录用</span><span><c>(邓鸿昌)</c></span> </a>--}}
{{--                    </li>--}}
                </ul>
            </div>

        </div>
        <!--期刊简介  -->
        <div class="qk-ly">
            <div class="qk-title">期刊简介</div>
        </div>
        <div class="content ft_14 qktg qkji">
            <p>{{$jodata['j_excerpt']}}</p>
        </div>
        <!--栏目设置  -->
        <div class="qk-ly">
            <div class="qk-title">栏目设置</div>
            <div class="content ft_14 qktg qkji">
                <p>{{$jodata['j_cate_config']}}</p>
            </div>
        </div>
        <!--常见问题  -->
        <div class="qk-ly">
            <div class="qk-title">常见问题</div>
            <div class="content ft_14 qktg qkji">
                @foreach($j_problem as $p)
                <p>{{$p}}</p>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!--最右  -->
<div class="i_right Float_left mr_left">
    <div class="i_tit"><label class="Color3">发表流程</label></div>
    <div class="i_bor qkfm">
        <img src="{{asset('statics/img/shop-lc.png')}}">
    </div>
    <div class="i_tit"><label class="Color3">投稿要求</label></div>
    <div class="i_bor tgyq">
        <div class="content">
            <p>{{$jodata['j_yaoqiu']}}</p>
            <p class="k-more">
                <a href="shop-tgyq.html">查看详情</a>
            </p>
        </div>
    </div>
    <div class="i_tit"><label class="Color3">版权声明</label></div>
    <div class="i_bor">{{$jodata['j_banquan']}}</div>
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
                            @foreach($shji as $s)
                            <li class="cur">
                                <a href="#"><img src="{{asset('uploads/'.$s->j_thumbnail)}}" alt="" />
                                    <p>{{$s->j_title}}</p>
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
