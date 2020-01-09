<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>联系我们</title>
    <link rel="stylesheet" type="text/css" href="{{asset('statics/css/nav.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('statics/css/slider.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('statics/css/swiper.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('statics/css/animate.min.css')}}" />
    <link rel="stylesheet" href="{{asset('statics/css/index.css')}}" />
    <link rel="stylesheet" href="{{asset('statics/css/list.css')}}" />
    <link rel="stylesheet" href="{{asset('statics/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('statics/css/owl.carousel.css')}}" />
    <link rel="stylesheet" href="{{asset('statics/css/about-us.css')}}" />
</head>
<style>

    .left {
        width: 1200px;
        margin:40px auto 0 auto;
    }

    .right {
        width: 1200px;
        margin:40px auto 0 auto;
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
    .container{width:1200px;height:400px;}

</style>
<body>
<!--导航开始-->
<div class="nav">
    <div id="menu_hover_bg" style="height: 0px; overflow: hidden;"></div>
    <div class="w1200 w-nav">
        <div class="logo">
{{--            <a href="#"><img src="{{asset('statics/images/logo.png')}}" /></a>--}}
            <h2 style="color:#fffacc;">菏泽市开发区众佳文化传媒有限公司</h2>
        </div>
        <div class="menu">
            <ul>
                <li>
                    <h2><a href="{{url('/')}}" class="a-active">首页</a></h2>

                </li>
                <li>
                    <h2><a href="{{url('/index/lunwen-zx')}}">论文中心</a></h2>

                </li>
                <li>
                    <h2><a href="{{url('/index/hzqk')}}">合作期刊</a></h2>

                </li>
                <li>
                    <h2><a href="{{url('index/zhuzuo')}}">著作教材</a></h2>

                </li>
                <li>
                    <h2><a href="{{url('keti/index')}}">课题</a></h2>

                </li>
                <li>
                    <h2><a href="{{url('zhuanli/index')}}">专利</a></h2>

                </li>
                <li>
                    <h2><a href="{{url('index/us')}}">关于我们</a></h2>
                </li>
                <li>
                    <h2><a href="{{url('index/fblc')}}">发表流程</a></h2>
                </li>
                <li>
                    <h2><a href="{{url('index/gjcx')}}">稿件查询</a></h2>
                </li>
                <li>
                    <h2><a href="{{url('index/fkfs')}}">付款方式</a></h2>
                </li>
                <li>
                    <h2><a href="{{url('index/lus')}}">联系我们</a></h2>
                </li>
                <li>
                    <h2><a href="{{url('index/zxtg')}}">在线投稿</a></h2>
                </li>
            </ul>
        </div>
    </div>
</div>
<!--导航结束-->
<!--轮播开始-->
<div class="swiper-banner swiper-container">
    <div class="swiper-wrapper">
        <a href="#" class="swiper-slide slide3">

        </a>
        <a class="swiper-slide slide1" href="#">
            <div class="w1200">
                <div class="ani pa sl-left" swiper-animate-effect="fadeInDown" swiper-animate-duration="0.5s">
                    <div class="pa t1">
                        众佳期刊
                    </div>
                    <div class="pa t2">
                        正规机构认证
                    </div>
                    <div class="pa t3">
                        100%正刊 所推荐刊物均版属备案
                    </div>
                    <div class="pa btn">
                        立即咨询
                    </div>
                </div>
                <div class="img2 ani pa" swiper-animate-effect="fadeInDown" swiper-animate-duration="0.5s">
                    <img src="{{asset('statics/images/banner/wsc.png')}}" alt="">
                </div>
            </div>
        </a>
        <a href="#" class="swiper-slide slide4">

        </a>
        <a href="#" class="swiper-slide slide4 slide6">

        </a>
        <a href="#" target="_blank" class="swiper-slide slide5">
            <div class="w1200">
                <div class="ani pa sl-left" swiper-animate-effect="fadeInDown" swiper-animate-duration="0.5s">
                    <div class="pa t1">
                        众佳期刊
                    </div>
                    <div class="pa t2">
                        资源丰富，800家刊社保持合作
                    </div>
                    <div class="pa t3">
                        100%正刊 所推荐刊物均版属备案
                    </div>
                    <div class="pa btn">
                        立即咨询
                    </div>
                </div>
                <div class="img3 ani pa" swiper-animate-effect="fadeInDown" swiper-animate-duration="0.5s" style="top:0;">
                    <img src="{{asset('statics/images/banner/ysd.png')}}" alt="">
                </div>
            </div>
        </a>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination swiper-pagination-white"></div>
    <div class="swiper-nav pa">
        <ul class="w1200 clearfix">
            <li id="g1" class="active">
                <div class="icon">
                    <img src="{{asset('statics/images/banner/icon3.png')}}" alt="">
                </div>
                <div class="info">
                    <div>8年历程</div>
                    <p>近6万客户真实见证</p>
                </div>
            </li>
            <li id="g2">
                <div class="icon">
                    <img src="{{asset('statics/images/banner/icon1.png')}}" alt="">
                </div>
                <div class="info">
                    <div>可靠更需要</div>
                    <p>正规机构认证</p>
                </div>
            </li>
            <li id="g3">
                <div class="icon">
                    <img src="{{asset('statics/images/banner/icon4.png')}}" alt="">
                </div>
                <div class="info">
                    <div>正规授权</div>
                    <p>征稿授权协议全面覆盖</p>
                </div>
            </li>
            <li id="g4">
                <div class="icon">
                    <img src="{{asset('statics/images/banner/icon2.png')}}" alt="">
                </div>
                <div class="info">
                    <div>学术查重</div>
                    <p>学术查重检测</p>
                </div>
            </li>
            <li id="g5">
                <div class="icon">
                    <img src="{{asset('statics/images/banner/icon5.png')}}" alt="">
                </div>
                <div class="info">
                    <div>海量资源</div>
                    <p>近800本学术杂志</p>
                </div>
            </li>
        </ul>
    </div>
</div>

<!--轮播结束-->
<!--联系我们-->
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

                    <p>1. 只要您没有收到我们的全部论文,您可随时要求我们全额退款。</p>

                    <p>2. 撰写论文者全部是硕士、博士,公司名称:菏泽市开发区众佳文化传媒有限公司 保证论文是原创，版权归您。</p>

                    <table>
                        <tbody>

                        <tr>
                            <td style="width:150px">
                                <h3><img src="statics/images/icon-03.png" style="height:18px; width:18px">&nbsp;联系电话</h3>
                            </td>
                            <td>13520747482</td>
                        </tr>
                        <tr>
                            <td style="width:150px">
                                <h3><img src="statics/images/icon-06.png" style="height:18px; width:18px">&nbsp;企业地址</h3>
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
<!--联系我们-->
<!--底部 -->
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
                <img class="hd_qr" src="statics/images/weixin.jpg" width="125" alt="关注你附近"> </li>
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
<script src="{{asset('statics/js/news.js')}}"></script>
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
