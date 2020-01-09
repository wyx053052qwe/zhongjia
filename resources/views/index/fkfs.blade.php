@extends('layouts.app')
@section('title', '付款方式')
@section('content')
<!--付款方式-->
<div class="w1200">
    <div class="fkfs-title">
        <p style="margin-top:96px; font-size:36px;">付款方式</p>
        <p style="margin-top:12px; font-size:16px; color:#909090">简单、快捷、安全</p>
    </div>
    <div class="payment_box">
        <div class="zfb_box">
            <p><img width="310" height="41" src="{{asset('statics/images/zfb_tit.jpg')}}"></p>

            <div class="zfb_content netcn2">
                <table style="margin-top:20px;">
                    <tbody>
                    <tr>
                        <td class="tc" style="width: 200px; vertical-align: middle;">
                            <img width="88" height="88" src="{{asset('statics/images/zfb.png')}}">
                        </td>
                        <td class="text-size-14" style="width: 350px;">
                            <span style="color:#ff0000;">支付宝帐号: 1234567</span><br> (本帐户为对公帐户,扫描左边二维码即可支付,没有限额)
                        </td>
                        <td class="text-size-12" style="width: 250px;">
                            支付宝特约商户是指与支付宝公司合作，采用支付宝作为交易方式，参加支付宝信任计划，并愿意接受所有用户监督的商户，支付金额没有限制。
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div style="clear: both;"></div>
        </div>

        <div class="payment_box">
            <a name="fkfs-2"></a>
            <div class="zfb_box">
                <p><img src="{{asset('statics/images/zf_03.jpg')}}"></p>

                <div class="zfb_content netcn2">
                    <table style="margin-top:20px;">
                        <tbody>
                        <tr>
                            <td class="tc" style="width: 200px; vertical-align: middle;">
                                <img width="88" height="88" src="{{asset('statics/images/wx_6.jpg')}}">
                            </td>
                            <td class="text-size-14" style="width: 350px;">
                                <span style="color:#ff0000;">微信收款帐号:菏泽市牡丹区众悦文化传媒有限公司</span><br>(本帐户为对公帐户,扫描左边二维码即可支付,没有限额)
                            </td>
                            <td class="text-size-12" style="width: 250px;">
                                微信特约商户是指与腾讯公司合作，参加信任计划，并愿意接受用户监督的商户。扫描左边二维码可快捷支付，支付金额没有限制。
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <p style="font-size: 16px; line-height: 1.45;padding: 20px;">为了保证广大作者的付款安全，我司唯一法人付款户名为“徐秀梅”，详细账户请向网站客服编辑咨询<br>
                    汇款注意事项：<br>
                    ☆ 汇款金额请与工作人员确定(可来电或在线咨询)。&nbsp;<br>☆ 请选择您最方便的汇款方式。如到银行柜台汇款，请携带您本人的身份证。&nbsp;☆ 汇款时要正确填写卡号。同行汇款（如工行-工行）更为快捷。个人汇款，请选择个人对个人汇款，实时到帐。&nbsp;<br>☆ 汇款后请保存好凭条，以便及时查询。汇款后请立即致电或发邮件以便确认到帐。&nbsp;<br>☆ 如没有银行卡，可以通过邮局汇款，并在汇款单附言上写明即可。 &nbsp;</p>

{{--                <form class="pay wxzf" action="" method="post" target="_blank">--}}
{{--                    <input type="hidden" name="id" value="9">--}}
{{--                    <input type="hidden" name="address" value="">--}}
{{--                    <input type="hidden" name="demo" value="">--}}
{{--                    <div class="zfb_content" id="wxzf">--}}
{{--                        <div class="zfb_pic" style="text-align:center;"><img width="50" height="50" style="margin-top:18px;" src="{{asset('statics/images/wx_03.jpg')}}"></div>--}}
{{--                        <div class="zfb_div">--}}
{{--                            <p class="payment_p1">--}}
{{--                                <span>金额：</span>--}}
{{--                                <span class="zfb_inputbg"><input name="price" type="text" maxlength="10" value="" validate="/^[1-9][0-9]*(\.[0-9]{2})?$/"></span>--}}
{{--                                <span>元，</span>--}}
{{--                                <span>付款人：</span>--}}
{{--                                <span class="zfb_inputbg"><input name="name" type="text" maxlength="20" value="" _validate="/^[\u4e00-\u9fa5]{2,15}$/"> </span>--}}
{{--                                <span class="zfb_button" style="margin-left:10px;"><img width="122" height="35" style="cursor: pointer;" src="{{asset('statics/images/zfb_button.jpg')}}"></span>--}}
{{--                            </p>--}}
{{--                            <p class="payment_p2">提示：微信支付商家动态码支付，支付金额不受限制且安全可靠。支付后请联系客服老师确认到帐！</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--                <script type="text/javascript">--}}
{{--                    $(function() {--}}
{{--                        $('#wxzf img').on('click', function() {--}}
{{--                            var s = $('.wxzf').validate();--}}
{{--                            if(!s)--}}
{{--                                return false;--}}
{{--                            $('.wxzf').submit();--}}
{{--                        });--}}
{{--                    });--}}
{{--                </script>--}}
{{--            </div>--}}
{{--            <div style="clear: both;"></div>--}}
{{--        </div>--}}

{{--        <div class="payment_box netcn" style="margin-top:50px">--}}
{{--            <a name="fkfs-1"></a>--}}
{{--            <p><img width="351" height="54" src="{{asset('statics/images/yl_tit.jpg')}}"></p>--}}
{{--            <table style="margin-top:0;margin-left:0;">--}}
{{--                <thead>--}}
{{--                <tr>--}}
{{--                    <th class="title" style="width: 130px;"></th>--}}
{{--                    <th class="text-center" style="width: 300px;">帐号</th>--}}
{{--                    <th class="text-center">说明</th>--}}
{{--                </tr>--}}
{{--                </thead>--}}
{{--                <tbody>--}}
{{--                <tr>--}}
{{--                    <td class="title" style="width: 150px;">--}}
{{--                        <img src="{{asset('statics/images/img_brank_1.jpg')}}">--}}
{{--                    </td>--}}
{{--                    <td class="text-size-14">--}}
{{--                        <span style="color:#ff0000;">工商银行汇款 (支持ATM自动取款转帐)</span><br> 卡 号： 1234567<br> 收款人：张月胜--}}
{{--                    </td>--}}
{{--                    <td class="text-size-12">--}}
{{--                        <span style="color:#ff0000;">上班时间：</span>无需有银行卡，携带身份证到工行储蓄点柜台填写汇款凭证，无需工行卡，即时到帐当天开通。<br>--}}
{{--                        <span style="color:#ff0000;">下班时间：</span>需工行卡，通过工行ATM自动取款机直接转帐至卡号即可。--}}
{{--                    </td>--}}
{{--                </tr>--}}
{{--                <tr>--}}
{{--                    <td class="title" style="width: 150px;">--}}
{{--                        <img src="{{asset('statics/images/img_brank_2.jpg')}}">--}}
{{--                    </td>--}}
{{--                    <td class="text-size-14">--}}
{{--                        <span style="color:#ff0000;">农业银行汇款(支持ATM自动取款转帐)</span><br> 卡　号：1234567--}}
{{--                        <br> 收款人：张月胜--}}
{{--                    </td>--}}
{{--                    <td class="text-size-12">--}}
{{--                        <span style="color:#ff0000;">上班时间：</span>无需有银行卡，携带身份证，直接到农行营业网点填写“存款凭条”户名和卡号即可。<br>--}}
{{--                        <span style="color:#ff0000;">下班时间：</span>需农行卡，通过农行ATM自动取款机直接转帐至卡号即可。--}}
{{--                    </td>--}}
{{--                </tr>--}}
{{--                <tr>--}}
{{--                    <td class="title" style="width: 150px;">--}}
{{--                        <img src="{{asset('statics/images/img_brank_3.jpg')}}">--}}
{{--                    </td>--}}
{{--                    <td class="text-size-14">--}}
{{--                        <span style="color:#ff0000;">中国银行汇款(支持ATM自动取款转帐)</span><br> 卡　号：1234567--}}
{{--                        <br> 收款人：张月胜--}}
{{--                    </td>--}}
{{--                    <td class="text-size-12">--}}
{{--                        <span style="color:#ff0000;">上班时间：</span>无需有银行卡，携带身份证，直接到营业网点填写“存款凭条”户名和卡号即可。<br>--}}
{{--                        <span style="color:#ff0000;">下班时间：</span>需中行卡，通过中行ATM自动取款机直接转帐至卡号即可。--}}
{{--                    </td>--}}
{{--                </tr>--}}
{{--                <tr>--}}
{{--                    <td class="title" style="width: 150px;">--}}
{{--                        <img src="{{asset('statics/images/img_brank_4.jpg')}}">--}}
{{--                    </td>--}}
{{--                    <td class="text-size-14">--}}
{{--                        <span style="color:#ff0000;">建设银行汇款(支持ATM自动取款转帐)</span><br> 卡号：1234567--}}
{{--                        <br> 户名：张月胜--}}
{{--                    </td>--}}
{{--                    <td class="text-size-12">--}}
{{--                        <span style="color:#ff0000;">上班时间：</span>无需有银行卡，携带身份证到建设银行柜台填写“电汇申请书”，即时到帐开通。<br>--}}
{{--                        <span style="color:#ff0000;">下班时间：</span>需建行卡，通过建行ATM自动取款机直接转帐至卡号即可。--}}
{{--                    </td>--}}
{{--                </tr>--}}
{{--                <tr>--}}
{{--                    <td class="title" style="width: 150px;">--}}
{{--                        <img src="{{asset('statics/images/img_brank_5.jpg')}}">--}}
{{--                    </td>--}}
{{--                    <td class="text-size-14">--}}
{{--                        <span style="color:#ff0000;">邮政储绿汇款(支持ATM自动取款转帐)</span><br> 卡号：1234567--}}
{{--                        <br> 户名：张月胜--}}
{{--                    </td>--}}
{{--                    <td class="text-size-12">--}}
{{--                        <span style="color:#ff0000;">上班时间：</span>无需有银行卡，请到邮政储蓄所办理“储蓄异地无折续存”业务 。<br>--}}
{{--                        <span style="color:#ff0000;">下班时间：</span>需邮政卡，通过邮政ATM自动取款机直接转帐至卡号即可。--}}
{{--                    </td>--}}
{{--                </tr>--}}
{{--                <tr>--}}
{{--                    <td class="title" style="width: 150px;">--}}
{{--                        <img src="{{asset('statics/images/img_brank_6.jpg')}}">--}}
{{--                    </td>--}}
{{--                    <td class="text-size-14">--}}
{{--                        <span style="color:#ff0000;">工商银行对公帐户汇款</span><br> 户名：菏泽市牡丹区众悦文化传媒有限公司--}}
{{--                        <br> 账号：1234567--}}
{{--                    </td>--}}
{{--                    <td class="text-size-12">--}}
{{--                        <span style="color:#ff0000;">上班时间：</span>无需有银行卡，携带身份证到工行储蓄点柜台填写汇款凭证。<br>--}}
{{--                        <span style="color:#ff0000;">下班时间：</span>网银转帐付款。--}}
{{--                    </td>--}}
{{--                </tr>--}}
{{--                </tbody>--}}
{{--            </table>--}}
{{--        </div>--}}

{{--        <div class="payment_box">--}}
{{--            <a name="fkfs-3"></a>--}}
{{--            <div class="zfb_box">--}}
{{--                <p><img width="407" height="41" src="{{asset('statics/images/zfb_tit4.jpg')}}"></p>--}}


{{--                <form class="pay wypay" action="" method="post" target="_blank">--}}
{{--                    <input type="hidden" name="id" value="2">--}}
{{--                    <div class="zfb_content" id="wyzf">--}}
{{--                        <div class="zfb_pic"><img width="230" height="88" src="{{asset('statics/images/wyzx_pic.png')}}"></div>--}}
{{--                        <div class="zfb_div">--}}
{{--                            <p class="payment_p1">--}}
{{--                                <span>输入金额：</span>--}}
{{--                                <span class="zfb_inputbg"><input name="price" type="text" maxlength="10" value="" validate="/^[1-9][0-9]*(\.[0-9]{2})?$/"></span>--}}
{{--                                <span>元，</span>--}}
{{--                                <span>付款人：</span>--}}
{{--                                <span class="zfb_inputbg"><input name="name" type="text" maxlength="20" value="" validate="/^[\u4e00-\u9fa5]{2,15}$/"> </span>--}}
{{--                                <span class="zfb_button"><img width="122" height="35" style="cursor: pointer;" src="{{asset('statics/images/zfb_button.jpg')}}"></span>--}}
{{--                            </p>--}}
{{--                            <p class="payment_p2">提示：网银在线（京东钱包）在线交易绝对安全，无任何后顾之忧！</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--                <script type="text/javascript">--}}
{{--                    $(function() {--}}
{{--                        $('#wyzf img').on('click', function() {--}}
{{--                            var s = $('.wypay').validate();--}}
{{--                            if(!s)--}}
{{--                                return false;--}}
{{--                            $('.wypay').submit();--}}
{{--                        });--}}
{{--                    });--}}
{{--                </script>--}}

{{--            </div>--}}
{{--            <div style="clear: both;"></div>--}}
{{--        </div>--}}

{{--    </div>--}}
{{--</div>--}}
<!--付款方式-->
@endsection
