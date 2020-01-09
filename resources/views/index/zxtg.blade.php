@extends('layouts.app')
@section('title', '在线投稿')
@section('content')
<!--在线投稿-->
<div class="w1200">
    <div class="sort-box">
        <dl class="box-item after-clear">
            <dd class="desc active">论文投稿<i></i></dd>
        </dl>
        <ul class="box-but after-clear">
            <li>
                <a class="" href="javascript:;" onclick="openChat();" title="">免费咨询</a>
            </li>
        </ul>
        <div class="clear"></div>
    </div>
    <div class="h20"></div>
    <div class="slideBox3">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="wycs1">
            <form name="tougao" id="uploadForm" method="" action="" onsubmit="" enctype="mulipart/form-data">
                @csrf
                <li>
                    <strong>说明</strong>： 1、本站是长期与杂志社合作的正规的期刊杂志代理机构。
                    <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2、请填写详细信息，以提高发表论文、论文发表成功率！
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
                    <p><span>*</span>论文标题</p>
                    <input type="text" name="title" id="xt" class="wycs1a">
                </li>

                <li>
                    <p>发表时间要求</p>
                    <input type="text" name="fbtime" class="wycs1a" id ='fbtime'>
                </li>

                <li class="message">
                    <p>文件上传 *</p>

{{--                    <input type="text" id="txt" name="txt" class="input" value="文件" disabled="disabled" />--}}
{{--                    <input type="button" onMouseMove="f.style.pixelLeft=event.x-60;f.style.pixelTop=this.offsetTop;" value="上传文件" onClick="f.click()" class="liulan">--}}
{{--                    <input type="file" id="f" onChange="txt.value=this.value" name="f" style="height:26px;" class="files" size="1" hidefocus>--}}
                    <input type="file" name="file" id="f">

                </li>

                <li>
                    <p>备注</p>
                    <textarea class="wycs1d" name="other" id="ly"></textarea>
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
        </div>
    </div>
</div>
<!--在线投稿-->
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
            url: "{{url('index/dozxtg')}}",
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
