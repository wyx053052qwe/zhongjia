<!DOCTYPE html>
<html>

<head>
{{--    <link href="{{asset('static/css/per.css')}}" rel="stylesheet" type="text/css">--}}
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{asset('statics/css/nav.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('statics/css/slider.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('statics/css/swiper.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('statics/css/animate.min.css')}}" />
    <link rel="stylesheet" href="{{asset('statics/css/index.css')}}" />
    <link rel="stylesheet" href="{{asset('statics/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('statics/css/shop.css')}}" />
    <link rel="stylesheet" href="{{asset('statics/css/owl.carousel.css')}}" />
    <link rel="stylesheet" href="{{asset('statics/css/about-us.css')}}" />
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link type="text/css" href="{{asset('static/css/prettyPhoto.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('static/css/new_file.css')}}" />
{{--    <link rel="stylesheet" type="text/css" href="{{asset('static/css/page.css')}}">--}}
    <link type="text/css" href="{{asset('static/css/style.css')}}" rel="stylesheet" />
{{--    <link rel="stylesheet" href="{{asset('static/css/owl.carousel.css')}}" />--}}
    <script type="text/javascript" src="{{asset('static/js/jquery.js')}}"></script>
</head>
<style>
    body{
        background: #f8fafc;
    }
    .top{
        background: url("{{asset('static/images/bg.gif')}}");
        height: auto;
        padding-bottom: 15px;
    }
    .red{
        color: red;
    }
    .z-long{
        color: #0168b7;
    }
    .imgs{
        height: auto;
    }
</style>
<body>
<!--  -->
<div id="bigpic">
{{--    <IMG src="{{asset('static/picture/loading.gif')}}" border=0>--}}
</div>

<div class="top-one">
    <div class="sy-top">
        <div background="{{asset('static/images/tbg.jpg')}}">

            <li>欢迎光临<span class="red">@yield('a_title')</span></li>
            <li>
                <script src="{{asset('static/js/date2.js')}}"></script>
            </li>

            <li style="text-align: right;"><iframe width="300" scrolling="no" height="25" frameborder="0" allowtransparency="true" src="http://i.tianqi.com/index.php?c=code&amp;id=40&amp;icon=1&amp;num=3"></iframe></li>

            <script type="text/javascript" src="{{asset('static/js/webj2f.js')}}"></script>

        </div>
    </div>
</div>


@yield('content')
@section('sidebar')
<!--底部-->
<script language="javascript" src="https://api.pop800.com/800.js?n=706054&s=01&p=r&l=cn"></script><div style="display:none;"><a href="">在线客服</a></div>
<div class="footer-box">
    <div class="w1200">
        <div class="box-5ser">
            <ul class="after-clear">
                <li><span class="img1"></span>100%安全可靠</li>
                <li><span class="img2"></span>8:00--18:00在线支持</li>

                <li><span class="img4"></span>发表不成功全额退款</li>
            </ul>
        </div>
        <div class="box-copyright">
            <div class="line"></div>
            <p><a href="http://beian.miit.gov.cn/">鲁ICP备19011248号-2</a></p>
            <p>版权所有：菏泽市牡丹区众佳文化传媒有限公司
            </p>
            <br>
            <br>
        </div>
    </div>
</div>
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

<script type="text/javascript" src="{{asset('statics/js/jquery-1.8.3.min.js')}}"></script>
<script type="text/javascript" src="{{asset('statics/js/jquery.select.js')}}"></script>
<script type="text/javascript" src="{{asset('statics/js/MessageRoll.js')}}"></script>
<script src="{{asset('statics/js/swiper.min.js')}}" type="text/javascript" charset="utf-8"></script>
<script src="{{asset('statics/js/swiper.animate.min.js')}}" type="text/javascript" charset="utf-8"></script>
<script src="{{asset('statics/js/main.js')}}" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="{{asset('statics/js/owl.carousel.js')}}"></script>
<script type="text/javascript" src="{{asset('statics/js/Lunbo.js')}}"></script>

<script type="text/javascript" src="{{asset('statics/js/style.js')}}"></script>
<script type="text/javascript">
    //滚动元素id，左切换按钮，右切换按钮，切换元素个数id,滚动方式，切换方向，是否自动滚动，滚动距离，滚动时间，滚动间隔，显示个数
    LbMove('BoxUl', 'btnl', 'btnr', 'BoxSwitch', true, 'left', true, 305, 1000, 5000, 4);
</script>
