@extends('layouts.shop')
@section('title', $jodata['a_title'])
@section('a_title', $jodata['a_title'])
@section('content')
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
<div class="right Float_right mr_right shopxq-right">
    <div class="i_tit"> <label class="ft_18 Color1 font-f2">                稿件查询                                </label>
        <p>当前位置:首页 &gt; 稿件查询 </p>
    </div>
    <div class="i_bor">

        <!--稿件查询  -->
        <div class="qk-ly">
            <div class="qk-title">稿件查询</div>
        </div>
        <div class="i_bor">

            <div class="content ft_14">
                <div class="cont">
                    <form action="{{url('index/serchs')}}?a_id={{$jodata['a_title']}}" method="post" onsubmit="return search_check(document.search_js1);">
                        <input type="text" name="keyword" id="textfield" value="" placeholder="请输入稿件编号">
                        <input type="image" src="{{asset('statics/images/anniu-1.jpg')}}" alt="Submit" id="anniu">
                    </form>
                    <div style="margin-top:20px;text-align:center;color: #666;font-size: 13px;">教育探索杂志查稿系统正式通过国家工业和信息化部备案，并将严格把关稿件审核。查稿：17310730304</div>

                </div>
                <br>

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
