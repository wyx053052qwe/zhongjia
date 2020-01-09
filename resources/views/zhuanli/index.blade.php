@extends('layouts.zhuanli')
@section('title', '专利')
@section('content')
    <!--专利申请-->


    <!--专利申请-->

    <!--专利-->
    <div class="tittle1 wrap"><b></b><span>专利<i>申请</i></span></div>
    <!--  -->
    <div class="block-content">
        <div class="block-content-box">
            <ul class="block-content-box-list">
                <li class="block-list-item">
                    <div class="block-list-item-box clearfix">
                        <div class="block-list-item-mask">
                            <div class="block-list-item-image">
                                <div class="block-list-item-content">
                                    <div class="block-list-item-middle">
                                        <img src="{{asset('statics/images/icon-item001.png')}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-list-item-text">
                            <div class="block-list-item-body">
                                <div class="block-list-item-body-title">
                                    <p>
                                        <strong>发明专利</strong>
                                    </p>
                                </div>
                                <div class="block-list-item-body-text">
                                    <p>产品、方法或改进所提出的新的技术方案,保护范围广,权利稳定性高。</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </li>
                <li class="block-list-item">
                    <div class="block-list-item-box clearfix">
                        <div class="block-list-item-mask">
                            <div class="block-list-item-image">
                                <div class="block-list-item-content">
                                    <div class="block-list-item-middle">
                                        <img src="{{asset('statics/images/icon-item003.png')}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-list-item-text">
                            <div class="block-list-item-body">
                                <div class="block-list-item-body-title">
                                    <p>
                                        <strong>外观专利</strong>
                                    </p>
                                </div>
                                <div class="block-list-item-body-text">
                                    <p>对产品的形状、图案或其结合以及色彩与形状、图案的结合所做出的富有美感并适于工业应用的新设计。</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </li>
                <li class="block-list-item">
                    <div class="block-list-item-box clearfix">
                        <div class="block-list-item-mask">
                            <div class="block-list-item-image">
                                <div class="block-list-item-content">
                                    <div class="block-list-item-middle">
                                        <img src="{{asset('statics/images/icon-item002.png')}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-list-item-text">
                            <div class="block-list-item-body">
                                <div class="block-list-item-body-title">
                                    <p>
                                        <strong>实用新型专利</strong>
                                    </p>
                                </div>
                                <div class="block-list-item-body-text">
                                    <p>产品的形状、构造新的技术方案,授权快 ,成本低。</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!--优势 -->
    <div class="apply_progress">
        <div class="new-layout">
            <h2 style="font-size:38px;">申请专利的好处</h2>
            <div class="notice">我国采用申请优先原则，即不论谁先完成发明创造，专利权授予最先提出专利申请的人。</div>
            <ul class="clearfix">
                <li class="ic1">
                    <h3>独占市场</h3>
                    <p>一种产品只要授予专利权，就等于在市<br>场上具有了独占权</p>
                    <p>
                        <a onclick="openWin();" style="cursor:pointer">专利申请政策详解&gt;&gt;</a>
                    </p>
                </li>
                <li class="ic2">
                    <h3>技术保护</h3>
                    <p>防止他人模仿本企业开发的新技术、<br>新产品</p>
                    <p>
                        <a onclick="openWin();" style="cursor:pointer">专利被侵权时该如何进行专利保护&gt;&gt;</a>
                    </p>
                </li>
                <li class="ic3">
                    <h3>无形资产</h3>
                    <p>纯技术一旦授予专利权就变成了工业<br>产权，形成了无形资产，具有了价值，<br>可作为商品出售或转让</p>
                    <p>
                        <a onclick="openWin();" style="cursor:pointer">了解如何使专利增值</a>
                    </p>
                </li>
                <li class="ic4">
                    <h3>荣誉价值</h3>
                    <p>企业荣誉、提升价值、评定职称、<br>个人成就实现</p>
                    <p>
                        <a href="http://ksz.shengfanwang.com/zhuanlidz.php" style="cursor:pointer">查看如何快速购买专利&gt;&gt;</a>
                    </p>
                </li>
                <li class="ic5">
                    <h3>政策奖励</h3>
                    <p>各地方政府均出台相应文件，对专利<br>申请者进行奖励或补助</p>
                    <p>
                        <a onclick="openWin();" style="cursor:pointer">了解各地区专利补助政策</a>
                    </p>
                </li>
                <li class="ic6">
                    <h3>企业宣传</h3>
                    <p>在宣传广告或产品时打上专利标志，<br>消费者认为这种商品更具可靠性、<br>信用性、提高企业的知名度</p>
                    <p>
                        <a onclick="openWin();" style="cursor:pointer">点击咨询专利的六大广告技巧&gt;&gt;</a>
                    </p>
                </li>
            </ul>
        </div>
    </div>
    <!---->
    <!--<div class="zl-xq">
        <div class="search search-type" id="section-1">
            <p class="search-infor">已有<span class="proposerNum">1206870</span>位客户完成了查询，注册成功率为<span>93.5%</span></p>
            <div class="search-cont">
                <input type="text" id="search-content" class="fl" placeholder="请输入专利信息">

                <span class="fr" onclick="searchshow(2)">查询能否申请</span>
            </div>
            <div class="record">
                <div class="apple">
                    <ul>
                        <li>
                            <a href="#" target="_blank"><span>2019-01-02 14:26</span>
                                <span>150****5470</span>
                                <span>成功申请专利无效答辩服务</span> </a>
                        </li>
                        <li>
                            <a href="#" target="_blank"><span>2019-01-02 14:15</span>
                                <span>157****8754</span>
                                <span>成功申请实用新型专利服务</span></a>
                        </li>
                        <li>
                            <a href="#" target="_blank"><span>2019-01-02 14:09</span>
                                <span>157****7564</span>
                                <span>成功申请发明专利专利服务</span>
                            </a>
                        </li>

                    </ul>
                </div>

            </div>
        </div>
    </div>-->
    <!--成功案例 -->
    <div class="Main qkml-lb zhuanli-cgal">
        <div class="Box" id="kt4">
            <div class="content">
                <div class="tittle1 wrap"><b></b><span>成功<i>案例</i></span></div>

                <div class="Box_con clearfix">
                    <span class="btnl btn" id="btnl"></span>
                    <span class="btnr btn" id="btnr"></span>

                    <div class="conbox" id="BoxUl">
                        <ul style="width: 1830px; left: 0px;">
                    @foreach($fm as $f)
                            <li class="cur">
                                <a href="#"><img src="{{asset('uploads/'.$f->a_photos)}}" alt="">
                                    <p>{{$f->a_title}}</p>
                                </a>
                            </li>
                            @endforeach
{{--                            <li class="cur">--}}
{{--                                <a href="#"><img src="{{asset('statics/images/zz_1.png')}}" alt="">--}}
{{--                                    <p>xxxx发明专利证书</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="cur">--}}
{{--                                <a href="#"><img src="{{asset('statics/images/zz_1.png')}}" alt="">--}}
{{--                                    <p>xxxx发明专利证书</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="cur">--}}
{{--                                <a href="#"><img src="{{asset('statics/images/zz_1.png')}}" alt="">--}}
{{--                                    <p>xxxx发明专利证书</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="cur">--}}
{{--                                <a href="#"><img src="{{asset('statics/images/zz_1.png')}}" alt="">--}}
{{--                                    <p>xxxx发明专利证书</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="cur">--}}
{{--                                <a href="#"><img src="{{asset('statics/images/zz_1.png')}}" alt="">--}}
{{--                                    <p>xxxx发明专利证书</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
                        </ul>
                    </div>

                    <p class="BoxSwitch" id="BoxSwitch"><span class=""></span><span class=""></span><span class=""></span><span class=""></span><span class=""></span><span class="cur"></span></p>

                </div>

            </div>
        </div>

    </div>
    <!--专利-->
@endsection
