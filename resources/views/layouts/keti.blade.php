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

<!--导航  -->
<div class="keti-logo">
    <div id="wrapper">

        <div id="nav-header">
            <div class="header">
                <h1>
                    <a href="{{url('keti/index')}}" class="logo">
                        <img src="{{asset('statics/images/keti-logo1.png')}}" width="130"/>
                    </a>
                </h1>

                <nav style="width:490px;position: relative;top: 4px;">
                    <ul>
                        <li>
                            <a href="{{url('keti/index')}}" class="home">首页</a>
                        </li>
                        <li class="careerpath">
                            <a href="{{url('keti/jj')}}">内容简介</a>

                        </li>
                        <li>
                            <a href="{{url('keti/czlc')}}">操作流程</a>

                        </li>
                        <li>
                            <a href="{{url('keti/fwys')}}">服务优势</a>

                        </li>
                        <li>
                            <a href="{{url('keti/anli')}}">成功案例</a>

                        </li>

                    </ul>
                </nav>
                <div class="search">
                    <input class="searchinput" id="searchinput" placeholder="输入你要搜索的内容" />
                    <span class="search-icon" id="search-bottom"></span>
                    <div class="search-result">
                    </div>
                </div>

            </div>
        </div>

    </div>

</div>
<div class="zhunli-head">

    <img src="{{asset('statics/images/keti-ban.jpg')}}">
</div>
@yield('content')
@section('sidebar')

<!--底部 -->
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
            <p>版权所有：菏泽市开发区众佳文化传媒有限公司
            </p>
            <br />
            <br />
        </div>
    </div>
</div>
<!--底部-->
<!--返回顶部  -->
<script language="javascript" src="https://api.pop800.com/800.js?n=706054&s=01&p=r&l=cn"></script><div style="display:none;"><a href="">在线客服</a></div>
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
<script type="text/javascript" src="{{asset('statics/js/Lunbo.js')}}"></script>
<script type="text/javascript" src="{{asset('statics/js/jquery.select.js')}}"></script>
<script src="{{asset('statics/js/swiper.min.js')}}" type="text/javascript" charset="utf-8"></script>
<script src="{{asset('statics/js/swiper.animate.min.js')}}" type="text/javascript" charset="utf-8"></script>
<script src="{{asset('statics/js/main.js')}}" type="text/javascript" charset="utf-8"></script>

<script type="text/javascript" src="{{asset('statics/js/style.js')}}"></script>
<script type="text/javascript" src="{{asset('statics/js/owl.carousel.js')}}"></script>

<script type="text/javascript">
    //滚动元素id，左切换按钮，右切换按钮，切换元素个数id,滚动方式，切换方向，是否自动滚动，滚动距离，滚动时间，滚动间隔，显示个数
    LbMove('BoxUl', 'btnl', 'btnr', 'BoxSwitch', true, 'left', true, 305, 1000, 5000, 4);
</script>
