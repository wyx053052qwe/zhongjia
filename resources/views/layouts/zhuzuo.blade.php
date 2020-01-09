<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{asset('statics/css/nav.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('statics/css/slider.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('statics/css/swiper.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('statics/css/animate.min.css')}}" />
    <link rel="stylesheet" href="{{asset('statics/css/index.css')}}" />
    <link rel="stylesheet" href="{{asset('statics/css/list.css')}}" />
    <link rel="stylesheet" href="{{asset('statics/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('statics/css/owl.carousel.css')}}" />
    <link rel="stylesheet" href="{{asset('statics/css/about-us.css')}}" />
    <link rel="stylesheet" href="{{asset('statics/css/shop.css')}}" />
{{--    <link rel="stylesheet" href="{{asset('css/app.css')}}">--}}
</head>

<body>
<div class="keti-logo">
    <div id="wrapper">

        <div id="nav-header">
            <div class="header zhuzuo-header">
                <h1>
                    <a href="{{url('index/zhuzuo')}}" class="logo">
                        <img src="{{asset('statics/images/keti-logo2.png')}}" width="130">
                    </a>
                </h1>

                <nav style="width:890px;position: relative;top: 4px;">
                    <ul>

                        <li class="careerpath">
                            <a href="/index/gywm">关于我们</a>

                        </li>
                        <li>
                            <a href="{{url('index/jc')}}">教材出版</a>

                        </li>
                        <li>
                            <a href="{{url('index/zzcb')}}">著作出版</a>

                        </li>
                        <li>
                            <a href="{{url('index/csgm')}}?c_id=16">出书挂名</a>

                        </li>
                        <li>
                            <a href="{{url('index/fwys')}}">服务优势</a>

                        </li>
                        <li>
                            <a href="{{url('index/czlc')}}">操作流程</a>

                        </li>
                        <li>
                            <a href="{{url('index/xwlist')}}?c_id=17">新闻资讯</a>

                        </li>
                        <li>
                            <a href="{{url('index/lxwm')}}">联系我们</a>

                        </li>
                    </ul>
                </nav>

            </div>
        </div>

    </div>

</div>
<div class="zhunli-head">

    <img src="{{asset('statics/images/zhuzuo-ban.png')}}">
</div>
<!--著作 教材-->
@yield('content')
@section('sidebar')
<!--底部 -->
<script language="javascript" src="https://api.pop800.com/800.js?n=706054&s=01&p=r&l=cn"></script><div style="display:none;"><a href="">在线客服</a></div>
<div class="footer-box">
    <div class="w1200">
        <div class="box-5ser">
            <ul class="after-clear">
                <li><span class="img1"></span>100%安全可靠</li>
                <li><span class="img2"></span>8:00--18:00在线支持</li>

                <li><span class="img4"></span>出书不成功全额退款</li>
            </ul>
        </div>
        <div class="box-copyright">
            <div class="line"></div>
            <p><a href="http://beian.miit.gov.cn/">鲁ICP备19011248号-2</a></p>
            <p>版权所有：菏泽市开发区众佳文化传媒有限公司
            </p>
            <br />
            <br />
        </div>
    </div>
</div>
<!--底部-->
<!--返回顶部  -->
<div class="yb_conct">
    <div class="yb_bar">
        <ul>
            <li class="yb_top">返回顶部</li>
            <li class="yb_phone">13520747482</li>
            <li class="yb_QQ">
                <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&amp;uin=425758560&amp;site=qq&amp;menu=yes&amp;from=message&amp;isappinstalled=0" title="即刻发送您的需求">在线咨询</a>
            </li>
            <li class="yb_ercode" style="height:53px;">微信二维码 <br>
                <img class="hd_qr" src="{{asset('statics/images/weixin.jpg')}}" width="125" alt="关注你附近"> </li>
        </ul>
    </div>
</div>

</body>

</html>
<script src="{{asset('statics/js/jquery-1.11.0.js')}}" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="{{asset('statics/js/jquery-1.8.3.min.js')}}"></script>
<script type="text/javascript" src="{{asset('statics/js/jquery.select.js')}}"></script>
<script src="{{asset('statics/js/swiper.min.js')}}" type="text/javascript" charset="utf-8"></script>
<script src="{{asset('statics/js/swiper.animate.min.js')}}" type="text/javascript" charset="utf-8"></script>
<script src="{{asset('statics/js/main.js')}}" type="text/javascript" charset="utf-8"></script>

<script type="text/javascript" src="{{asset('statics/js/style.js')}}"></script>
<script type="text/javascript" src="{{asset('statics/js/owl.carousel.js')}}"></script>
<script type="text/javascript" src="{{asset('statics/js/ZoomPic.js')}}"></script>
