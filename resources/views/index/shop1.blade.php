<!DOCTYPE html >
<html>

<head>

    <link href="{{asset('static/css/per.css')}}" rel="stylesheet" type="text/css">
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>{{$jodata['j_title']}}</title>
    <link rel="stylesheet" type="text/css" href="{{asset('static/css/page.css')}}">
    <link type="text/css" href="{{asset('static/css/style.css')}}" rel="stylesheet" />
    <link type="text/css" href="{{asset('static/css/prettyPhoto.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('static/css/new_file.css')}}" />
    <link rel="stylesheet" href="{{asset('static/css/owl.carousel.css')}}" />
    <style>
        .more{
            color:red!important;
        }
    </style>
    <script type="text/javascript" src="{{asset('static/js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('static/js/jquery.SuperSlide.js')}}"></script>
    <script type="text/javascript" src="{{asset('static/js/owl.carousel.js')}}"></script>
</head>

<body>
<div id="bigpic">
    <IMG src="{{asset('static/picture/loading.gif')}}" border=0>
</div>

<div>
    <div class="top-one">
        <div class="sy-top">
            <div background="{{asset('static/images/tbg.jpg')}}">

                <li>欢迎光临<span class="red">{{$jodata['j_title']}}</span></li>
                <li>
                    <script src="{{asset('static/js/date2.js')}}"></script>
                </li>

                <li style="text-align: right;"><iframe width="300" scrolling="no" height="25" frameborder="0" allowtransparency="true" src="http://i.tianqi.com/index.php?c=code&amp;id=40&amp;icon=1&amp;num=3"></iframe></li>

                <script type="text/javascript" src="{{asset('static/js/webj2f.js')}}"></script>

            </div>
        </div>
    </div>
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

    <div class="news" id="main">
        <!--左 -->
        <div class="syy-left">
            <div class="sy-left">
                <div class="titright">时事报道/
                    <c> CURRENT EVENTS</c><span><a href="javascript:void(0);" class="more">+更多</a></span></div>
                <div class="titrightm">


                    <!-- 轮播（Carousel）导航 -->
                    <div id="owl-demo" class="owl-carousel">
                        @foreach($shi as $sh)
                        <!-- <a class="item" href="{{url('index/lunwen-zxnext')}}/{{$sh->a_id}}/{{$sh->c_id}}" target="_blank"> -->
                        <a class="item" href="javascript:void(0);" target="_blank">
                        <img src="{{asset('uploads/'.$sh->a_photos)}}" alt=""></a>
                        @endforeach
                    </div>

                    <!-- 轮播（Carousel）导航 -->

                    <div class="newslist" style="vertical-align:top;float: right;width: 300px;">
                        @foreach($shi as $shi)
                        <li>
                            <!-- <a href="{{url('index/lunwen-zxnext')}}/{{$sh->a_id}}/{{$sh->c_id}}" target="_blank"> -->
                            <a href="javascript:void(0)" target="_blank">
                            {{$shi->a_title}}</a><span>{{$shi->created_at}}</span></li>
                        @endforeach
                    </div>

                </div>
            </div>
            <!-- -->
            <div class="sy-left" style="height: 440px;">

                <div class="titright">国家新闻出版广电总局备案信息</div>
                <div class="gd-photo">
                    <a><img src="{{asset('uploads/'.$jodata['j_picture'])}}" class="china-news" style="height: 384px;"/></a>
                </div>
            </div>


            <div class="sy-left" style="height: 411px;">

                <div class="titright">发表流程</div>
                <div class="gd-photo">
                    <a><img src="{{asset('static/images/shop-lc1.png')}}" class="china-news" style="width: 100%;text-align: center;margin-top: 25px;" /></a>
                </div>
            </div>
        </div>
        <!--左 -->
        <!--右 -->
        <div class="syy-right">
            <div class="sy-left sy-right" style="height: 288px;">
                <div class="titleft">稿件录用公告</div>

                <div id="demos" style="overflow:hidden;height:260px;width:95%;padding: 14px;">
                    <div class="bd" id="demos1" style="position: relative; overflow:hidden;height:230px;">
                        <ul style="padding:0;margin:0;">
                        @foreach($anndata as $b)
                        <div class="gao">
                            题目：<span class="lan1"> @if(empty($b['a_alias'])) {{$b['p_name']}} @else {{$b['a_alias']}} @endif </span>作者：<span class="green"><strong>{{$b['a_name']}}</strong></span> 状态：<span class="red">@if($b['status']==1)已通过@else 审核中 @endif</span>
                        </div>
                        @endforeach
                        </ul>
                    </div>
                    <div class="hd"></div>
                </div>
               
            </div>
            <!-- -->
            <div class="sy-left sy-right" style="height: 121px;position: relative;">
                <div class="mart15">

                    <div class="titleft">稿件录用查询</div>

                    <div valign="top" class="con">
                        <form action="{{url('index/serchs')}}?j_id={{$jodata['j_id']}}" method="post" class="gjcx">

                            <input type="text" name="keyword" id="textfield" placeholder="请输入稿件编号" value="" class="ss">
                            <input type="image" src="{{asset('static/images/anniu-1.jpg')}}" alt="Submit" id="anniu">
                        </form>
                    </div>

                </div>
            </div>
            <div class="sy-left sy-right" style="height: 327px;">

                <div class="titright">投稿要求
                    <c> / NOTICE</c>
                </div>
                <div class="pad1015">
                    <p style="text-indent: 2em; margin: 0;">{!! mb_substr($jodata['j_yaoqiu'],0, 240, 'utf-8') !!}...
                        <a href="{{url('index/tgyq')}}?j_id={{$jodata['j_id']}}" class="more">[详细]</a>
                    </p>
                </div>

            </div>
            <div class="sy-left sy-right" style="height: 440px;">
                <div class="mart15">

                    <div class="titleft">版权信息</div>

                    <div class="bqxx">


                            <p style="margin: 0px;">{!! $j_banquan !!} </span></p>
{{--                        <p style="margin: 0px;">期刊刊名：《管理学家》杂志社--}}
{{--                            <br>国际刊号ISSN：1674-1722--}}
{{--                            <br>国内刊号C N：11-5630/F--}}
{{--                            <br>主管单位：中国航空工业集团有限公司--}}
{{--                            <br>主办单位：中航出版传媒有限责任公司--}}
{{--                            <br>邮发代号：2-317--}}
{{--                            <br>创刊时间：2017--}}
{{--                            <br>刊社电话：13240139418--}}
{{--                            <br>电子邮箱：zazhicn@139.com--}}
{{--                            <br>出 版 地：北京市--}}
{{--                            <br>出版周期：半月刊--}}
{{--                            <br>期刊语种：中文--}}
{{--                            <br>期刊开本：16开</p>--}}

                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

<!--右 -->

<!---->
<div class="qk-title">期刊目录</div>
<div class="infopic">

    <div class="picbox" id="qkml" style="border: none;">
        <div class="bd">
        <ul class="gallery piclist">
            @foreach($uploads as $k=>$s)
                <li class="cur">
                    <a href="{{url('index/shop1')}}?j_id={{$shji->j_id}}" rel="prettyPhoto[]"><img src="{{asset('uploads/'.$s['uploads'])}}" alt="{{$shji->j_title}}.{{$s['qi']}}" /></a>
                </li>
            @endforeach
        </ul>
        </div>
        <div class="hd">
            <a class="pic_prev next"></a>
            <a class="pic_next prev"></a>
        </div>
    </div>
</div>
<!---->
<div class="foot">
    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" style="1px solid #8dc3ec">

        <tr>
            <td height="13" align="center"></td>
        </tr>
        <tr>
            <p><a href="http://beian.miit.gov.cn/">鲁ICP备19011248号-2</a></p>
            <td align="center" class="l30 s14 white hei"> 技术支持 &copy; 菏泽市开发区众佳文化传媒有限公司</td>
        </tr>
    </table>
</div>



<script type="text/javascript">
    jQuery("#qkml").slide({mainCell:".bd ul",autoPlay:true,effect:"leftMarquee",vis:7,interTime:50});
    jQuery("#demos").slide({mainCell:".bd ul",autoPage:true,effect:"topMarquee",autoPlay:true,vis:5,interTime:50});
</script>

<script type="text/javascript">
    $(function () {
        $('#owl-demo').owlCarousel({
            items: 1,
            navigation: true,
            navigationText: [],
            autoPlay: true,
            stopOnHover: true
        }).hover(function () {
            $('.owl-buttons').show();
        }, function () {
            $('.owl-buttons').hide();
        });
    });
</script>



</body>

</html>
<script language="javascript" src="https://api.pop800.com/800.js?n=706054&s=01&p=r&l=cn"></script><div style="display:none;"><a href="">在线客服</a></div>