@extends('layouts.app')
@section('title', '发表流程')
@section('content')
<!--发表流程-->
<div class="w1200">

    <div class="block1200 ">
        <div class="Publishing">
            <div class="title">
                <p>论文发表流程</p>
                <i></i>
            </div>
        </div>
        <div class="Publishing-li">
            <div class="left">
                <div class="Publishing_btn">发稿前</div>
                <ul>
                    <li>
                        <span>第一步：提出发表要求</span>
                        <span>客户发表的意向性要求，如:期刊类型、期刊级别、时间要求、<br>文章字数、发表用途、发表数量等。</span>
                    </li>
                    <li>
                        <span>第二步：提出发表要求</span>
                        <span>    编辑根据客户的需求，综合各方面的因素，为客户量身订做需<br>要发表的期刊和时间安排，并与客户取得沟通达成一致意见。</span>
                    </li>
                    <li>
                        <span>第三步：报价推荐刊物</span>
                        <span class="nodah">达成协议后，客户支付推荐发表定金。支付方式有四种，<br>支持网银在线、支付宝在线、银行转帐和ATM取款机转帐。</span>
                    </li>
                </ul>
            </div>
            <div class="right">
                <div class="Publishing_btn rightt">发稿后</div>
                <ul>
                    <li>
                        <span>第一步：运作审稿发表，查稿后<i style="color: #d32e31;">付余款</i></span>
                        <span>编辑按照相关协议要求，通过抄袭检测系统审核，联系相关期<br>刊单位运作发表，直到期刊单位发送"录稿通知单"，通知客户。</span>
                    </li>
                    <li>
                        <span>第二步：编辑部寄样刊</span>
                        <span>期刊单位赠送作者一本最新收录的期刊。期刊部经理确认已<br>经发表成功且客户完全满意，该笔交易结束。否则，若论文<br>发表失败，全额退款。</span>
                    </li>
                    <li>
                        <span>第三步：后续售后服务</span>
                        <span class="nodah">   我们将对期刊作者，文章信息进行版权保护。百分百保证客<br>户隐私，版权属于客户，本站保证未经您的许可作品不会在其<br>它任何地方。</span>
                    </li>
                </ul>
            </div>

        </div>
    </div>
    <!--审稿时间安排 -->
    <div class="Publicationpage2">
        <div class="block1200 ">
            <div class="Publishing">
                <div class="title">
                    <p>审稿时间安排</p>
                    <i></i>
                </div>
            </div>
            <ul class="Review">
                <li class="item1">
                    <span></span>
                    <p>普刊发表 </p>
                    <p>审稿1-3天</p>
                    <p>发表时间1-3个月内</p>
                    <a href="javascript:;">立即投稿</a>
                </li>
                <li class="item2">
                    <span></span>
                    <p>大学学报 </p>
                    <p>审稿7 -15天</p>
                    <p>发表时间2-6个月</p>
                    <a href="javascript:;">立即投稿</a>
                </li>
                <li class="item3">
                    <span></span>
                    <p>核心期刊 </p>
                    <p>审稿2天-1个月</p>
                    <p>发表时间1-6个月</p>
                    <a href="javascript:;">立即投稿</a>
                </li>
            </ul>
        </div>
    </div>
    <!--审稿时间安排 -->
</div>

<!--发表流程-->
@endsection
