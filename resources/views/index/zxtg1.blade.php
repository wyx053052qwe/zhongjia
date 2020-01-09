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
    <div class="i_tit"> <label class="ft_18 Color1 font-f2">                在线投稿                                </label>
        <p>当前位置:首页 &gt; 在线投稿</p>
    </div>
    <div class="i_bor">

        <!--投稿要求  -->
        <div class="qk-ly">
            <div class="qk-title">在线投稿</div>
        </div>
        <div class="content ft_14 qktg qkji">
            <div class="i_bor" style="border: none;">
                <div class="slideBox3">
                    <div class="wycs1">
                        <form name="tougao" id="uploadForm" method="post" action="" onsubmit="" enctype="mulipart/form-data">

                            <li>
                                <p><span>*</span>论文标题</p>
                                <input type="text" name="title" id="username" class="wycs1a">
                            </li>
                            <li>
                                <p><span>*</span>投稿杂志</p>
                                <input type="hidden" name="a_id" value="{{$jodata['j_id']}}">
                                <span style="font-size: 13px;margin-left: 3%;">{{$jodata['j_title']}}</span>
                            </li>
                            <li class="message">
                                <p>文件上传 *</p>

{{--                                <input type="text" id="txt" name="txt" class="input" value="文件" disabled="disabled">--}}
{{--                                <input type="button" onmousemove="f.style.pixelLeft=event.x-60;f.style.pixelTop=this.offsetTop;" value="上传文件" onclick="f.click()" class="liulan">--}}
{{--                                <input type="file" id="f" onchange="txt.value=this.value" name="f" style="height:26px;" class="files" size="1" hidefocus="">--}}
                                <input type="file" name="file" id="f">
                            </li>
                            <li>
                                <p><span>*</span>真实姓名</p>
                                <input type="text" name="name" id="username" class="wycs1a">
                            </li>
                            <li>
                                <p><span>*</span>联系电话</p>
                                <input type="text" name="tel" id="tel" class="wycs1a">
                            </li>
                            <li>
                                <p><span>*</span>邮箱</p>
                                <input type="text" name="email" id="email" class="wycs1a">
                            </li>
                            <li>
                                <p><span>*</span>QQ/微信 </p>
                                <input type="text" name="qq" id="qq" class="wycs1a">
                            </li>
                            <li>
                                <p><span>*</span>邮寄地址</p>
                                <input type="text" name="address" id="xt" class="wycs1a">
                            </li>

                            <li>
                                <p>投稿说明</p>
                                <textarea class="wycs1d" name="other_" id="ly" placeholder="   填写投稿说明，没有可留空"></textarea>
                            </li>
                            <li>
                                <input type="hidden" name="ver" class="ver" value="">
                                <p><span>*</span>验证码</p>
                                <p>
                                    <input type="text" class="topAlign" id="verify"  name="verify"  required>
                                    <span class="yzm">
								<canvas width="100" height="40" id="verifyCanvas"></canvas>
								<img id="code_img"></span>
                                </p>

                            </li>

                            <div class="wycs1e">

                                <input name="file1" id="file2" size="70" style="width:300px;" class="input" type="hidden">
                                <input type="button" name="submit" class="wycs1e-1" value="提  交">
                                <input type="reset" name="reset" class="wycs1e-2" value="重  置">&nbsp;
                                <font color="red"> 提交后请联系在线客服尽快处理
                                </font>
                            </div>
                        </form>
                        <div class="zxtg-tis">
                            <p>*注：如果稿件传输慢,确定稿件没有在线投稿成功，请选择邮箱投稿，邮箱地址：cnzazhi@yeah.net（如果在线投稿成功，请勿再邮箱投稿，同时请不要一稿多投，否则，一经发现不予受理！</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="clear"></div>

</div>
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
                                        <p style="text-align: center">{{$shji->j_title.'.'.$s['qi']}}</p>
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

    <script>
        var nums = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "0", 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R',
            'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x',
            'y', 'z'];

        drawCode();
        // 绘制验证码
        function drawCode() {
            var canvas = document.getElementById("verifyCanvas");  //获取HTML端画布
            var context = canvas.getContext("2d");                 //获取画布2D上下文
            context.fillStyle = "cornflowerblue";                  //画布填充色
            context.fillRect(0, 0, canvas.width, canvas.height);   //清空画布
            context.fillStyle = "white";                           //设置字体颜色
            context.font = "25px Arial";                           //设置字体
            var rand = new Array();
            var x = new Array();
            var y = new Array();
            var ver = '';
            for (var i = 0; i < 5; i++) {
                rand[i] = nums[Math.floor(Math.random() * nums.length)]
                x[i] = i * 16 + 10;
                y[i] = Math.random() * 20 + 20;
                context.fillText(rand[i], x[i], y[i]);
                ver +=rand[i];
            }
            $('.ver').val(ver);


            //画3条随机线
            for (var i = 0; i < 3; i++) {
                drawline(canvas, context);
            }

            // 画30个随机点
            for (var i = 0; i < 30; i++) {
                drawDot(canvas, context);
            }
            convertCanvasToImage(canvas)
        }

        // 随机线
        function drawline(canvas, context) {
            context.moveTo(Math.floor(Math.random() * canvas.width), Math.floor(Math.random() * canvas.height));             //随机线的起点x坐标是画布x坐标0位置，y坐标是画布高度的随机数
            context.lineTo(Math.floor(Math.random() * canvas.width), Math.floor(Math.random() * canvas.height));  //随机线的终点x坐标是画布宽度，y坐标是画布高度的随机数
            context.lineWidth = 0.5;                                                  //随机线宽
            context.strokeStyle = 'rgba(50,50,50,0.3)';                               //随机线描边属性
            context.stroke();                                                         //描边，即起点描到终点
        }
        // 随机点(所谓画点其实就是画1px像素的线，方法不再赘述)
        function drawDot(canvas, context) {
            var px = Math.floor(Math.random() * canvas.width);
            var py = Math.floor(Math.random() * canvas.height);
            context.moveTo(px, py);
            context.lineTo(px + 1, py + 1);
            context.lineWidth = 0.2;
            context.stroke();

        }
        // 绘制图片
        function convertCanvasToImage(canvas) {
            document.getElementById("verifyCanvas").style.display = "none";
            var image = document.getElementById("code_img");
            image.src = canvas.toDataURL("image/png");
            return image;
        }

        // 点击图片刷新
        document.getElementById('code_img').onclick = function () {
            $('#verifyCanvas').remove();
            $('#verify').after('<canvas width="100" height="40" id="verifyCanvas"></canvas>')
            drawCode();
        }

        $(".wycs1e-1").click(function () {
            var formData = new FormData($('#uploadForm')[0]);
            $.ajax({
                type: 'post',
                url: "{{url('index/dozxtg1')}}",
                data: formData,
                cache: false,
                processData: false,
                contentType: false,
                dataType:'json',
                success:function(res){
                    // alert(res);
                    if(res.code==1){
                        alert(res.massage);
                        location.href='/'
                    }else if(res.code==2){
                        alert(res.massage);
                    }else if(res.code==3){
                        alert(res.massage);
                    }else if(res.code==5){
                        alert(res.massage);
                    }else if(res.code==6){
                        alert(res.massage);
                    }else if(res.code==7){
                        alert(res.massage);
                    }
                }
            })
        });

</script>
@endsection
