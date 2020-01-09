@extends('layouts.zhuzuo')
@section('title', '著作、教材')
@section('content')
<div class="fuwu">
    <div class="wrapper">
        <h2>我们的服务</h2>
        <p>公司业务涵盖企业出书、个人出书、自费出书、合作出书、常规出书、营销发行、委托创作、版权运营开发等。</p>
        <p>公司专注出版行业8年，一直以来竭诚为广大作者与企事业单位提供整套专业全面的图书出版服务，是出版行业内的标杆性企业。</p>
        <div class="fuwu-list">
            <ul id="fuwu-list" style="width: 2000px">

                <li> <span class="icon icon-gw"></span>
                    <h3>著作出版</h3>
                    <p>2019年各类专著、教材出版挂名进行中，英语、体育、艺术、教育学、医学、建筑、工程、等</p>
                    <div class="fuwu-btns fuwu-sd-btns">

                        <a href="http://p.qiao.baidu.com/cps/chat?siteId=13205158&amp;userId=27355598"  onclick="" rel="nofollow" target="_self">立即咨询</a>
                    </div>
                </li>
                <li> <span class="icon icon-zx"></span>
                    <h3>教材出版</h3>
                    <p>2019年十三五规划教材挂名进行中，英语、体育、艺术、教育学、医学、建筑、工程、等</p>
                    <div class="fuwu-btns fuwu-sd-btns">

                        <a href="http://p.qiao.baidu.com/cps/chat?siteId=13205158&amp;userId=27355598" onclick="" rel="nofollow" target="_self">立即咨询</a>
                    </div>
                </li>
                <li> <span class="icon icon-sb"></span>
                    <h3>出书挂名</h3>
                    <p>一分钱一分货，本店所报价格是经过专业成本核算，价格公道！预付定金，查到书号再付尾款！</p>
                    <div class="fuwu-btns fuwu-sb-btns">

                        <a href="{{url('index/csgm')}}?c_id=16" onclick="" rel="nofollow" target="_self">查看详情</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!--   -->
<div class="w1200 list_cont clearfix">
    <div class="fl list_cont_l">
        <div class="lstext clearfix">
            <span class="spbox fl"><h3>教材出版</h3><i></i></span>
            <p class="ptext">内容简介</p>
            <p class="ppbox"> 众佳出版网在密切关注<strong>教材出版、主编副主编参编、自费出书</strong>等市场动态和高校各专业课程设置的前提下，时时提醒自己要走精品化道路，要有自己的特色。工作室出版的教材紧跟高校教学大纲，提供教材出书主编副主编参编署名服务。同时工作室与多家知名中央级出版社有深入合作，您的作品将在您选定的出版社出版。有著作、教材出书，增加您的评职筹码，为您顺利评职保驾护航。</p>
        </div>
        <div class="list_picimg">
            <a href="javascript:openkf();" rel="nofollow" title="点击在线咨询"><img src="{{asset('statics/images/list_bg.gif')}}" alt="点击在线咨询" data-bd-imgshare-binded="1"></a>
        </div>

    </div>
    <!-- list_cont_l end -->
    <div class="fr list_cont_r">
        <img src="{{asset('statics/images/picimg3.jpg')}}" data-bd-imgshare-binded="1">
        <div class="lstrit">
            <span class="fl"><h4>服务优势</h4><i></i></span>
            <p class="fe16">服务专业</p>
            <p class="h70">众佳出版网教材出版团队提供一对一服务，合作众多一线出版社资源。安全可靠。</p>
        </div>
        <div class="lstrit">
            <span class="fl"><h4>安全可靠</h4><i></i></span>
            <h4>安全可靠</h4>
            <p class="h70">合作众多一流出版社，教材出版后，主编、ISBN书号、CIP核字号在新闻出版广电总局网站均可查询！</p>
        </div>
        <div class="lstrit w294">
            <span class="fl"><h4>操作便利</h4><i></i></span>
            <p class="fe16">操作便利</p>
            <p class="h70">根据作者需要，可开具编委证明及出版社字数证明，每位作者提供2本免费教材，如需更多，费用需自行承担。</p>
        </div>
        <div class="lstrit">
            <span class="fl"><h4>加分更高</h4><i></i></span>
            <p class="fe16">加分更高</p>
            <p class="h70">评职要求里教材加分项更高，一本教材可以代替几篇文章，本站提供主编副主编参编出版服务。</p>
        </div>
    </div>
    <!-- list_cont_r end -->
</div>
<!--成功案例  -->
<div style="height: 20px;"></div>
<div class="zhuzuo-title">最新出版</div>
<div class="zhuzuo-anli">

    <tbody>
    <tr>
        <td width="1200" align="center" valign="top">
            <table width="1200" height="24" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-bottom:10px; margin-top:5px; border-bottom:4px #0082a2 solid;">
                <tbody>

                <tr>
                    <td width="79" valign="bottom">
                        <a href="{{url('index/jc')}}?c_id=14"><img src="{{asset('statics/img/zxcb.jpg')}}" width="79" height="24" border="0"></a>
                    </td>
                    <td width="879" align="right" style="font-size:14px; font-family:Verdana, Geneva, sans-serif;">
                        <a href="{{url('index/jc')}}?c_id=14">more&gt;&gt;</a>
                    </td>
                </tr>

                </tbody>
            </table>

            <table width="100%" border="0" cellspacing="1" cellpadding="0" style="margin-bottom:10px;">

                <tbody>

                <tr>
                    @foreach($zu as $z)
                    <td align="center">
                        <table width="196" border="0" cellspacing="0" cellpadding="0">
                            <tbody>
                            <tr>
                                <td width="196" height="227" align="center" valign="top">
                                    <table width="166" height="229" border="0" cellpadding="0" cellspacing="0" style="border:1px #CCCCCC solid;">
                                        <tbody>
                                        <tr>
                                            <td width="164" align="center" valign="middle"><img src="{{asset('uploads/'.$z->a_photos)}}" width="155" height="218" border="0"></td>
                                        </tr>
                                        </tbody>
                                    </table>

                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </td>
                @endforeach
{{--                    <td align="center">--}}
{{--                        <table width="196" border="0" cellspacing="0" cellpadding="0">--}}
{{--                            <tbody>--}}
{{--                            <tr>--}}
{{--                                <td width="196" height="227" align="center" valign="top">--}}
{{--                                    <table width="166" height="229" border="0" cellpadding="0" cellspacing="0" style="border:1px #CCCCCC solid;">--}}
{{--                                        <tbody>--}}
{{--                                        <tr>--}}
{{--                                            <td width="164" align="center" valign="middle"><img src="{{asset('statics/img/02.jpg')}}" width="155" height="218" border="0"></td>--}}
{{--                                        </tr>--}}
{{--                                        </tbody>--}}
{{--                                    </table>--}}

{{--                                </td>--}}
{{--                            </tr>--}}

{{--                            </tbody>--}}
{{--                        </table>--}}
{{--                    </td>--}}

{{--                    <td align="center">--}}
{{--                        <table width="196" border="0" cellspacing="0" cellpadding="0">--}}
{{--                            <tbody>--}}
{{--                            <tr>--}}
{{--                                <td width="196" height="227" align="center" valign="top">--}}
{{--                                    <table width="166" height="229" border="0" cellpadding="0" cellspacing="0" style="border:1px #CCCCCC solid;">--}}
{{--                                        <tbody>--}}
{{--                                        <tr>--}}
{{--                                            <td width="164" align="center" valign="middle"><img src="{{asset('statics/img/03.jpg')}}" width="155" height="218" border="0"></td>--}}
{{--                                        </tr>--}}
{{--                                        </tbody>--}}
{{--                                    </table>--}}

{{--                                </td>--}}
{{--                            </tr>--}}

{{--                            </tbody>--}}
{{--                        </table>--}}
{{--                    </td>--}}

{{--                    <td align="center">--}}
{{--                        <table width="196" border="0" cellspacing="0" cellpadding="0">--}}
{{--                            <tbody>--}}
{{--                            <tr>--}}
{{--                                <td width="196" height="227" align="center" valign="top">--}}
{{--                                    <table width="166" height="229" border="0" cellpadding="0" cellspacing="0" style="border:1px #CCCCCC solid;">--}}
{{--                                        <tbody>--}}
{{--                                        <tr>--}}
{{--                                            <td width="164" align="center" valign="middle"><img src="{{asset('statics/img/04.jpg')}}" width="155" height="218" border="0"></td>--}}
{{--                                        </tr>--}}
{{--                                        </tbody>--}}
{{--                                    </table>--}}

{{--                                </td>--}}
{{--                            </tr>--}}

{{--                            </tbody>--}}
{{--                        </table>--}}
{{--                    </td>--}}

{{--                    <td align="center">--}}
{{--                        <table width="196" border="0" cellspacing="0" cellpadding="0">--}}
{{--                            <tbody>--}}
{{--                            <tr>--}}
{{--                                <td width="196" height="227" align="center" valign="top">--}}
{{--                                    <table width="166" height="229" border="0" cellpadding="0" cellspacing="0" style="border:1px #CCCCCC solid;">--}}
{{--                                        <tbody>--}}
{{--                                        <tr>--}}
{{--                                            <td width="164" align="center" valign="middle"><img src="{{asset('statics/img/05.jpg')}}" width="155" height="218" border="0"></td>--}}
{{--                                        </tr>--}}
{{--                                        </tbody>--}}
{{--                                    </table>--}}

{{--                                </td>--}}
{{--                            </tr>--}}

{{--                            </tbody>--}}
{{--                        </table>--}}
{{--                    </td>--}}

                </tr>
                <tr>

                </tr>
                </tbody>
            </table>
        </td>
    </tr>
    </tbody>
    <tbody>
    <tr>
        <td width="1200" align="center" valign="top">
            <table width="1200" height="24" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-bottom:10px; margin-top:5px; border-bottom:4px #0082a2 solid;">
                <tbody>
                <tr>
                    <td width="79" valign="bottom">
                        <a href="{{url('index/jc')}}?c_id=15"><img src="{{asset('statics/img/zxcb1.jpg')}}" width="79" height="24" border="0"></a>
                    </td>
                    <td width="879" align="right" style="font-size:14px; font-family:Verdana, Geneva, sans-serif;">
                        <a href="{{url('index/jc')}}?c_id=15">more&gt;&gt;</a>
                    </td>
                </tr>
                </tbody>
            </table>

            <table width="100%" border="0" cellspacing="1" cellpadding="0" style="margin-bottom:10px;">

                <tbody>

                <tr>
                    @foreach($jc as $j)
                    <td align="center">
                        <table width="196" border="0" cellspacing="0" cellpadding="0">
                            <tbody>
                            <tr>
                                <td width="196" height="227" align="center" valign="top">
                                    <table width="166" height="229" border="0" cellpadding="0" cellspacing="0" style="border:1px #CCCCCC solid;">
                                        <tbody>
                                        <tr>
                                            <td width="164" align="center" valign="middle"><img src="{{asset('uploads/'.$j->a_photos)}}" width="155" height="218" border="0"></td>
                                        </tr>
                                        </tbody>
                                    </table>

                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </td>
                @endforeach
{{--                    <td align="center">--}}
{{--                        <table width="196" border="0" cellspacing="0" cellpadding="0">--}}
{{--                            <tbody>--}}
{{--                            <tr>--}}
{{--                                <td width="196" height="227" align="center" valign="top">--}}
{{--                                    <table width="166" height="229" border="0" cellpadding="0" cellspacing="0" style="border:1px #CCCCCC solid;">--}}
{{--                                        <tbody>--}}
{{--                                        <tr>--}}
{{--                                            <td width="164" align="center" valign="middle"><img src="{{asset('statics/img/02.jpg')}}" width="155" height="218" border="0"></td>--}}
{{--                                        </tr>--}}
{{--                                        </tbody>--}}
{{--                                    </table>--}}

{{--                                </td>--}}
{{--                            </tr>--}}

{{--                            </tbody>--}}
{{--                        </table>--}}
{{--                    </td>--}}

{{--                    <td align="center">--}}
{{--                        <table width="196" border="0" cellspacing="0" cellpadding="0">--}}
{{--                            <tbody>--}}
{{--                            <tr>--}}
{{--                                <td width="196" height="227" align="center" valign="top">--}}
{{--                                    <table width="166" height="229" border="0" cellpadding="0" cellspacing="0" style="border:1px #CCCCCC solid;">--}}
{{--                                        <tbody>--}}
{{--                                        <tr>--}}
{{--                                            <td width="164" align="center" valign="middle"><img src="{{asset('statics/img/03.jpg')}}" width="155" height="218" border="0"></td>--}}
{{--                                        </tr>--}}
{{--                                        </tbody>--}}
{{--                                    </table>--}}

{{--                                </td>--}}
{{--                            </tr>--}}

{{--                            </tbody>--}}
{{--                        </table>--}}
{{--                    </td>--}}

{{--                    <td align="center">--}}
{{--                        <table width="196" border="0" cellspacing="0" cellpadding="0">--}}
{{--                            <tbody>--}}
{{--                            <tr>--}}
{{--                                <td width="196" height="227" align="center" valign="top">--}}
{{--                                    <table width="166" height="229" border="0" cellpadding="0" cellspacing="0" style="border:1px #CCCCCC solid;">--}}
{{--                                        <tbody>--}}
{{--                                        <tr>--}}
{{--                                            <td width="164" align="center" valign="middle"><img src="{{asset('statics/img/04.jpg')}}" width="155" height="218" border="0"></td>--}}
{{--                                        </tr>--}}
{{--                                        </tbody>--}}
{{--                                    </table>--}}

{{--                                </td>--}}
{{--                            </tr>--}}

{{--                            </tbody>--}}
{{--                        </table>--}}
{{--                    </td>--}}

{{--                    <td align="center">--}}
{{--                        <table width="196" border="0" cellspacing="0" cellpadding="0">--}}
{{--                            <tbody>--}}
{{--                            <tr>--}}
{{--                                <td width="196" height="227" align="center" valign="top">--}}
{{--                                    <table width="166" height="229" border="0" cellpadding="0" cellspacing="0" style="border:1px #CCCCCC solid;">--}}
{{--                                        <tbody>--}}
{{--                                        <tr>--}}
{{--                                            <td width="164" align="center" valign="middle"><img src="{{asset('statics/img/05.jpg')}}" width="155" height="218" border="0"></td>--}}
{{--                                        </tr>--}}
{{--                                        </tbody>--}}
{{--                                    </table>--}}

{{--                                </td>--}}
{{--                            </tr>--}}

{{--                            </tbody>--}}
{{--                        </table>--}}
{{--                    </td>--}}

                </tr>
                <tr>

                </tr>
                </tbody>
            </table>
        </td>
    </tr>
    </tbody>
    <tbody>
    <tr>
        <td width="1200" align="center" valign="top">
            <table width="1200" height="24" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-bottom:10px; margin-top:5px; border-bottom:4px #0082a2 solid;">
                <tbody>
                <tr>
                    <td width="79" valign="bottom">
                        <a href="{{url('index/csgm')}}?c_id=16"><img src="{{asset('statics/img/zxcb2.jpg')}}" width="79" height="24" border="0"></a>
                    </td>
                    <td width="879" align="right" style="font-size:14px; font-family:Verdana, Geneva, sans-serif;">
                        <a href="{{url('index/csgm')}}?c_id=16">more&gt;&gt;</a>
                    </td>
                </tr>
                </tbody>
            </table>

            <table width="100%" border="0" cellspacing="1" cellpadding="0" style="margin-bottom:10px;">

                <tbody>
                <tr>
@foreach($cs as $c)
                    <td align="center">
                        <table width="196" border="0" cellspacing="0" cellpadding="0">
                            <tbody>
                            <tr>
                                <td width="196" height="227" align="center" valign="top">
                                    <table width="166" height="229" border="0" cellpadding="0" cellspacing="0" style="border:1px #CCCCCC solid;">
                                        <tbody>
                                        <tr>
                                            <td width="164" align="center" valign="middle"><img src="{{asset('uploads/'.$c->a_photos)}}" width="155" height="218" border="0"></td>
                                        </tr>
                                        </tbody>
                                    </table>

                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </td>
@endforeach
{{--                    <td align="center">--}}
{{--                        <table width="196" border="0" cellspacing="0" cellpadding="0">--}}
{{--                            <tbody>--}}
{{--                            <tr>--}}
{{--                                <td width="196" height="227" align="center" valign="top">--}}
{{--                                    <table width="166" height="229" border="0" cellpadding="0" cellspacing="0" style="border:1px #CCCCCC solid;">--}}
{{--                                        <tbody>--}}
{{--                                        <tr>--}}
{{--                                            <td width="164" align="center" valign="middle"><img src="{{asset('statics/img/02.jpg')}}" width="155" height="218" border="0"></td>--}}
{{--                                        </tr>--}}
{{--                                        </tbody>--}}
{{--                                    </table>--}}

{{--                                </td>--}}
{{--                            </tr>--}}

{{--                            </tbody>--}}
{{--                        </table>--}}
{{--                    </td>--}}

{{--                    <td align="center">--}}
{{--                        <table width="196" border="0" cellspacing="0" cellpadding="0">--}}
{{--                            <tbody>--}}
{{--                            <tr>--}}
{{--                                <td width="196" height="227" align="center" valign="top">--}}
{{--                                    <table width="166" height="229" border="0" cellpadding="0" cellspacing="0" style="border:1px #CCCCCC solid;">--}}
{{--                                        <tbody>--}}
{{--                                        <tr>--}}
{{--                                            <td width="164" align="center" valign="middle"><img src="{{asset('statics/img/03.jpg')}}" width="155" height="218" border="0"></td>--}}
{{--                                        </tr>--}}
{{--                                        </tbody>--}}
{{--                                    </table>--}}

{{--                                </td>--}}
{{--                            </tr>--}}

{{--                            </tbody>--}}
{{--                        </table>--}}
{{--                    </td>--}}

{{--                    <td align="center">--}}
{{--                        <table width="196" border="0" cellspacing="0" cellpadding="0">--}}
{{--                            <tbody>--}}
{{--                            <tr>--}}
{{--                                <td width="196" height="227" align="center" valign="top">--}}
{{--                                    <table width="166" height="229" border="0" cellpadding="0" cellspacing="0" style="border:1px #CCCCCC solid;">--}}
{{--                                        <tbody>--}}
{{--                                        <tr>--}}
{{--                                            <td width="164" align="center" valign="middle"><img src="{{asset('statics/img/04.jpg')}}" width="155" height="218" border="0"></td>--}}
{{--                                        </tr>--}}
{{--                                        </tbody>--}}
{{--                                    </table>--}}

{{--                                </td>--}}
{{--                            </tr>--}}

{{--                            </tbody>--}}
{{--                        </table>--}}
{{--                    </td>--}}

{{--                    <td align="center">--}}
{{--                        <table width="196" border="0" cellspacing="0" cellpadding="0">--}}
{{--                            <tbody>--}}
{{--                            <tr>--}}
{{--                                <td width="196" height="227" align="center" valign="top">--}}
{{--                                    <table width="166" height="229" border="0" cellpadding="0" cellspacing="0" style="border:1px #CCCCCC solid;">--}}
{{--                                        <tbody>--}}
{{--                                        <tr>--}}
{{--                                            <td width="164" align="center" valign="middle"><img src="{{asset('statics/img/05.jpg')}}" width="155" height="218" border="0"></td>--}}
{{--                                        </tr>--}}
{{--                                        </tbody>--}}
{{--                                    </table>--}}

{{--                                </td>--}}
{{--                            </tr>--}}

{{--                            </tbody>--}}
{{--                        </table>--}}
{{--                    </td>--}}

                </tr>
                <tr>

                </tr>
                </tbody>
            </table>
        </td>
    </tr>
    </tbody>
{{--</div>--}}
<!--出版 -->
<div class="zhuzuo-title">服务优势</div>
<div class="fuwu-content">
    <div class="fuwu-title">教材出版、策划</div>
    <p>众佳期刊在密切关注市场动态和高校各专业课程设置的前提下，时时提醒自己要走精品化道路，要有自己的特色。工作室出版的教材紧跟高校教学大纲，如果老师没有时间稿，没关系，我们有专门的高校教师团队，您只管提要求，最后为您署名主编即可。同时，工作室与多家知名中央级出版社有深入合作，您的作品将在您选定的出版社出版。</p>
    <div class="fuwu-title">二、个人（或机构）自费出书</div>
    <p>自费出版的图书一般是没有市场前景的图书。如学术类的、专业类的、书画类的、小印量的，或者出版社不愿冒市场风险和不愿公费出版，而作者希望正式出版从而展示自己文学、艺术或学术成果的图书。或者是自己有发行渠道的，不想让出版社赚取发行利润的图书。</p>
    <p> 欢迎学者、教师、企业家、艺术家、美术爱好者等及各类公司、培训机构等与我们联系，我们将向您提供专业化、整体化、规范化的出版咨询服务...</p>
</div>

<!--新闻 -->
<div class="zhuzuo-title">新闻资讯</div>
<div class="w1200">
    <div class="body-con-4-1">
        <!--1-->
        @foreach($xw as $x)
        <dl class="body-con-4-list">
            <dt class="list-title"> <a href="" target="_blank">{{$x->a_title}}？</a></dt>
            <dd class="list-content">
                <p>{{trim(mb_substr($x->a_contetn, 0, 158, 'utf-8'),'<p></p>')}}...
                    <a href="{{url('index/zhuxq')}}/{{$x->a_id}}/{{$x->c_id}}" class="more">[详细]</a>
                </p>
            </dd>
            <dd class="list-info">
                <div class="list-date">2018-11-16</div>
                <div class="list-author"></div>
                <div class="clear"></div>
            </dd>
        </dl>
        @endforeach
        <!--1-->
{{--        <dl class="body-con-4-list">--}}
{{--            <dt class="list-title"> <a href="" target="_blank">自费出书怎么出？</a></dt>--}}
{{--            <dd class="list-content">--}}
{{--                <p>根据多年来的行业经验，发现很多作者在过程中，总是存在着字数过多或者过少的情况发生，这样就导致了在选择期刊论文发表的过程中出现如下问题。发表论文字数过多会加重作者的经济负担，因为杂志社都是按照版面来收费的，字数过多会导致版面的增加，字数过少的话，论文质量太低，审稿过程中达不到杂志社的要求。鉴于此种情况...--}}
{{--                    <a href="zhuzuo-xw.html" class="more">[详细]</a>--}}
{{--                </p>--}}
{{--            </dd>--}}
{{--            <dd class="list-info">--}}
{{--                <div class="list-date">2018-11-16</div>--}}
{{--                <div class="list-author"></div>--}}
{{--                <div class="clear"></div>--}}
{{--            </dd>--}}
{{--        </dl>--}}
{{--        <!--1-->--}}
{{--        <dl class="body-con-4-list">--}}
{{--            <dt class="list-title"> <a href="" target="_blank">如何快速出版教材</a></dt>--}}
{{--            <dd class="list-content">--}}
{{--                <p>一篇优秀的护理论文可以使作者具有突破性的护理观点、学术成果得以发表和传播，供他人分享借鉴、相互学习，有助于扩大作者在业界和学术界的知名度和影响力。每位想要晋升的护士，都需要先发表护理论文，将护理论文发表成功之后，才能够进行职称评审。那么我们该怎么快速发表护理论文呢？　　　　护理论文快速发表的步骤　　...--}}
{{--                    <a href="zhuzuo-xw.html" class="more">[详细]</a>--}}
{{--                </p>--}}
{{--            </dd>--}}
{{--            <dd class="list-info">--}}
{{--                <div class="list-date">2018-11-16</div>--}}
{{--                <div class="list-author"></div>--}}
{{--                <div class="clear"></div>--}}
{{--            </dd>--}}
{{--        </dl>--}}
    </div>
</div>
<!--著作 教材-->
@endsection
