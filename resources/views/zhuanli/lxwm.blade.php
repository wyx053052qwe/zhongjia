<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>专利</title>
    <link rel="stylesheet" type="text/css" href="{{asset('statics/css/nav.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('statics/css/slider.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('statics/css/swiper.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('statics/css/animate.min.css')}}" />

    <link rel="stylesheet" href="{{asset('statics/css/list.css')}}" />
    <link rel="stylesheet" href="{{asset('statics/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('statics/css/owl.carousel.css')}}" />
    <link rel="stylesheet" href="{{asset('statics/css/about-us.css')}}" />
    <link rel="stylesheet" href="{{asset('statics/css/shop.css')}}" />


</head>
<style>
    .new-layout {
        width: 1200px;
        margin: 0 auto;
    }

    #nav-header a,
    #nav-header a:link,
    #nav-header a:visited {
        color: #555555;
        text-decoration: none;
        font-size: 15px;
    }

    #nav-header a:hover,
    #nav-header nav li:hover {
        color: #35b558;
    }

    .left {
        width: 1200px;
        margin: 40px auto 0 auto;
    }

    .right {
        width: 1200px;
        margin: 40px auto 0 auto;
    }

    .title {
        font-size: 14px;
        font-weight: bold;
        color: #cc5522;
    }

    .content {
        font-size: 13px;
        color: #333;
        margin-top: 6px;
    }

    .container {
        width: 1200px;
        height: 400px;
    }
</style>

<body>
<!--专利申请-->
<div class="keti-logo">
    <div id="wrapper">

        <div id="nav-header">
            <div class="header">
                <h1>
                    <a href="javascript:;" class="logo">
                        <img src="{{asset('statics/images/keti-logo.png')}}" width="100"/>
                    </a>
                </h1>

                <nav style="width:490px;">
                    <ul>

                        <li class="careerpath">
                            <a href="{{url('zhuanli/index')}}">关于专利 </a>

                        </li>
                        <li>
                            <a href="{{url('zhuanli/news')}}">资讯中心</a>

                        </li>

                        <li>
                            <a href="javascript:;">专利项目</a><i class="slide-icon"></i>
                            <div class="slide-submeu">
                                <a href="{{url('zhuanli/fm')}}">发明专利 </a>
                                <a href="{{url('zhuanli/sy')}}">实用新型专利</a>
                                <a href="{{url('zhuanli/wg')}}">外观专利</a>

                            </div>
                        </li>
                        <li>
                            <a href="{{url('zhuanli/anli')}}">案例展示 </a>

                        </li>
                        <li>
                            <a href="{{url('zhuanli/lxwm')}}">联系我们</a>

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
    <div class="zhuanli-logo">
        <img src="{{asset('statics/images/logo.png')}}">
    </div>
    <img src="{{asset('statics/images/zhuanli-ban.jpg')}}">
</div>

<!--专利-->

<div class="w1200">
    <div class="sort-box">
        <dl class="box-item after-clear">
            <dd class="desc active">联系我们<i></i></dd>
        </dl>
        <ul class="box-but after-clear">
            <li>
                <a href="javascript:;" onclick="openChat();" title="免费咨询" rel="nofollow">免费咨询</a>
            </li>
        </ul>
        <div class="clear"></div>
    </div>
    <div class="h20"></div>
    <div class="article">
        <div class="article-content">
            <div class="pure-u-1 netcn r_50">
                <div class="wrapper">
                    <p style="margin:30px 0; font-size:36px;text-align:center;">联系我们</p>
                    <p>
                    </p>



                    <table>
                        <tbody>

                        <tr>
                            <td style="width:150px">
                                <h3><img src="{{asset('statics/images/icon-03.png')}}" style="height:18px; width:18px">&nbsp;联系电话</h3>
                            </td>
                            <td>13520747482</td>
                        </tr>
                        <tr>
                            <td style="width:150px">
                                <h3><img src="{{asset('statics/images/icon-06.png')}}" style="height:18px; width:18px">&nbsp;企业地址</h3>
                            </td>
                            <td>山东省菏泽市开发区东城青年南路东侧香格里拉国际广场6号楼A-1-502室</td>
                        </tr>
                        </tbody>
                    </table>

                    <p>&nbsp;</p>

                    <p>&nbsp;</p>

                    <p>&nbsp;</p>

                    <p>&nbsp;</p>

                    <p>&nbsp;</p>

                    <p>&nbsp;</p>

                </div>
            </div>
        </div>
    </div>
    <!--地图  -->
    <div class="lx-map">
        <div id="container2" class="container"></div>

    </div>
</div>

</div>

<!--底部 -->
<script language="javascript" src="https://api.pop800.com/800.js?n=706054&s=01&p=l&l=cn"></script><div style="display:none;">在线客服</div>
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
            <p>版权所有：菏泽市开发区众悦文化传媒有限公司
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
<script type="text/javascript" src="{{asset('statics/js/Lunbo.js')}}"></script>
<script type="text/javascript" src="{{asset('statics/js/jquery.select.js')}}"></script>
<script src="{{asset('statics/js/swiper.min.js')}}" type="text/javascript" charset="utf-8"></script>
<script src="{{asset('statics/js/swiper.animate.min.js')}}" type="text/javascript" charset="utf-8"></script>
<script src="{{asset('statics/js/main.js')}}" type="text/javascript" charset="utf-8"></script>

<script type="text/javascript" src="{{asset('statics/js/style.js')}}"></script>
<script type="text/javascript" src="{{asset('statics/js/owl.carousel.js')}}"></script>

<script src="http://api.map.baidu.com/api?v=2.0&ak=6MfRMq6EfAqxtFY3ptLazrIKzGIyXmBk"></script>

<script src="{{asset('statics/js/jquery.baiduMap.min.js')}}"></script>

<script type="text/javascript">
    new BaiduMap({
        id: "container2",
        title: {
            text: "众佳期刊",
            className: "title"
        },
        content: {
            className: "content",
            text: ["地址：山东省菏泽市开发区东城青年南路东侧香格里拉国际广场6号楼A-1-502室"]
        },
        point: {
            lng: "115.471198",
            lat: "35.245513"
        },
        level: 15,
        type: true,
        width: 320,
        height: 70,
        icon: {
            url: "{{asset('statics/img/icon.png')}}",
            width: 36,
            height: 36
        }
    });
</script>
<script type="text/javascript">
    function autoScroll(obj) {
        $(obj).find("ul").animate({
            marginTop: "-39px"
        }, 500, function() {
            $(this).css({
                marginTop: "0px"
            }).find("li:first").appendTo(this);
        })
    }
    $(function() {

        setInterval('autoScroll(".apple")', 2000);

    })
</script>
