@extends('layouts.zhuzuo')
@section('title', '著作出版')
@section('content')
<!--教材出版 -->
<div class="w1200 list_cont clearfix">
    <div class="fl list_cont_l">
        <div class="lstext clearfix">
            <span class="spbox fl"><h3>著作出版</h3><i></i></span>
            <p class="ptext">内容简介</p>
            <p class="ppbox"> 咨询专著挂名之前，希望尽量了解当地及单位的需要，是否有出版社级别要求（国家级、省级）、署名位置要求（第一作者、第二作者、第三作者、参著等）、字数要求。然后结合自身的情况（评正高、副高、中级）、专业方向等选择合适的专著。</p>
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
            <p class="h70">众悦出版网教材出版团队提供一对一服务，合作众多一线出版社资源。安全可靠。</p>
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
<!-- 教材出版-->
<div class="zhuzuo-anli">
    <table width="1200" height="24" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-bottom:10px; margin-top:5px; border-bottom:4px #0082a2 solid;">
        <tbody>
        <tr>
            <td width="79" valign="bottom">
                <a href=""><img src="{{asset('statics/img/zxcb3.jpg')}}" width="79" height="24" border="0"></a>
            </td>

        </tr>
        </tbody>
    </table>
    <table width="100%" border="0" cellspacing="1" cellpadding="0" style="margin-bottom:10px;">

        <tbody>
        <tr>
@foreach($data as $d)
            <td align="center">
                <a href="{{url('index/zhuxq')}}/{{$d->a_id}}/{{$d->c_id}}">
                    <table width="196" border="0" cellspacing="0" cellpadding="0">
                        <tbody>
                        <tr>
                            <td width="196" height="227" align="center" valign="top">
                                <table width="166" height="229" border="0" cellpadding="0" cellspacing="0" style="border:1px #CCCCCC solid;">
                                    <tbody>
                                    <tr>
                                        <td width="164" align="center" valign="middle"><img src="{{asset('uploads/'.$d->a_photos)}}" width="155" height="218" border="0"></td>
                                    </tr>
                                    </tbody>
                                </table>

                            </td>
                        </tr>

                        </tbody>
                    </table>
                </a>
            </td>
@endforeach
{{--            <td align="center">--}}
{{--                <a href="zhuzuo-xq.html">--}}
{{--                    <table width="196" border="0" cellspacing="0" cellpadding="0">--}}
{{--                        <tbody>--}}
{{--                        <tr>--}}
{{--                            <td width="196" height="227" align="center" valign="top">--}}
{{--                                <table width="166" height="229" border="0" cellpadding="0" cellspacing="0" style="border:1px #CCCCCC solid;">--}}
{{--                                    <tbody>--}}
{{--                                    <tr>--}}
{{--                                        <td width="164" align="center" valign="middle"><img src="{{asset('statics/img/02.jpg')}}" width="155" height="218" border="0"></td>--}}
{{--                                    </tr>--}}
{{--                                    </tbody>--}}
{{--                                </table>--}}

{{--                            </td>--}}
{{--                        </tr>--}}

{{--                        </tbody>--}}
{{--                    </table>--}}
{{--                </a>--}}
{{--            </td>--}}

{{--            <td align="center">--}}
{{--                <a href="zhuzuo-xq.html">--}}
{{--                    <table width="196" border="0" cellspacing="0" cellpadding="0">--}}
{{--                        <tbody>--}}
{{--                        <tr>--}}
{{--                            <td width="196" height="227" align="center" valign="top">--}}
{{--                                <table width="166" height="229" border="0" cellpadding="0" cellspacing="0" style="border:1px #CCCCCC solid;">--}}
{{--                                    <tbody>--}}
{{--                                    <tr>--}}
{{--                                        <td width="164" align="center" valign="middle"><img src="{{asset('statics/img/03.jpg')}}" width="155" height="218" border="0"></td>--}}
{{--                                    </tr>--}}
{{--                                    </tbody>--}}
{{--                                </table>--}}

{{--                            </td>--}}
{{--                        </tr>--}}

{{--                        </tbody>--}}
{{--                    </table>--}}
{{--                </a>--}}
{{--            </td>--}}
{{--            <td align="center">--}}
{{--                <a href="zhuzuo-xq.html">--}}
{{--                    <table width="196" border="0" cellspacing="0" cellpadding="0">--}}
{{--                        <tbody>--}}
{{--                        <tr>--}}
{{--                            <td width="196" height="227" align="center" valign="top">--}}
{{--                                <table width="166" height="229" border="0" cellpadding="0" cellspacing="0" style="border:1px #CCCCCC solid;">--}}
{{--                                    <tbody>--}}
{{--                                    <tr>--}}
{{--                                        <td width="164" align="center" valign="middle"><img src="{{asset('statics/img/04.jpg')}}" width="155" height="218" border="0"></td>--}}
{{--                                    </tr>--}}
{{--                                    </tbody>--}}
{{--                                </table>--}}

{{--                            </td>--}}
{{--                        </tr>--}}

{{--                        </tbody>--}}
{{--                    </table>--}}
{{--                </a>--}}
{{--            </td>--}}
{{--            <td align="center">--}}
{{--                <a href="zhuzuo-xq.html">--}}
{{--                    <table width="196" border="0" cellspacing="0" cellpadding="0">--}}
{{--                        <tbody>--}}
{{--                        <tr>--}}
{{--                            <td width="196" height="227" align="center" valign="top">--}}
{{--                                <table width="166" height="229" border="0" cellpadding="0" cellspacing="0" style="border:1px #CCCCCC solid;">--}}
{{--                                    <tbody>--}}
{{--                                    <tr>--}}
{{--                                        <td width="164" align="center" valign="middle"><img src="{{asset('statics/img/05.jpg')}}" width="155" height="218" border="0"></td>--}}
{{--                                    </tr>--}}
{{--                                    </tbody>--}}
{{--                                </table>--}}

{{--                            </td>--}}
{{--                        </tr>--}}

{{--                        </tbody>--}}
{{--                    </table>--}}
{{--                </a>--}}
{{--            </td>--}}
{{--            <td align="center">--}}
{{--                <a href="zhuzuo-xq.html">--}}
{{--                    <table width="196" border="0" cellspacing="0" cellpadding="0">--}}
{{--                        <tbody>--}}
{{--                        <tr>--}}
{{--                            <td width="196" height="227" align="center" valign="top">--}}
{{--                                <table width="166" height="229" border="0" cellpadding="0" cellspacing="0" style="border:1px #CCCCCC solid;">--}}
{{--                                    <tbody>--}}
{{--                                    <tr>--}}
{{--                                        <td width="164" align="center" valign="middle"><img src="{{asset('statics/img/06.jpg')}}" width="155" height="218" border="0"></td>--}}
{{--                                    </tr>--}}
{{--                                    </tbody>--}}
{{--                                </table>--}}

{{--                            </td>--}}
{{--                        </tr>--}}

{{--                        </tbody>--}}
{{--                    </table>--}}
{{--                </a>--}}
{{--            </td>--}}
{{--        </tr>--}}
{{--        <tr>--}}

{{--        </tr>--}}
{{--        </tbody>--}}
{{--    </table>--}}
{{--    <!--2  -->--}}
{{--    <table width="100%" border="0" cellspacing="1" cellpadding="0" style="margin-bottom:10px;">--}}

{{--        <tbody>--}}
{{--        <tr>--}}

{{--            <td align="center">--}}
{{--                <a href="zhuzuo-xq.html">--}}
{{--                    <table width="196" border="0" cellspacing="0" cellpadding="0">--}}
{{--                        <tbody>--}}
{{--                        <tr>--}}
{{--                            <td width="196" height="227" align="center" valign="top">--}}
{{--                                <table width="166" height="229" border="0" cellpadding="0" cellspacing="0" style="border:1px #CCCCCC solid;">--}}
{{--                                    <tbody>--}}
{{--                                    <tr>--}}
{{--                                        <td width="164" align="center" valign="middle"><img src="{{asset('statics/img/01.jpg')}}" width="155" height="218" border="0"></td>--}}
{{--                                    </tr>--}}
{{--                                    </tbody>--}}
{{--                                </table>--}}

{{--                            </td>--}}
{{--                        </tr>--}}

{{--                        </tbody>--}}
{{--                    </table>--}}
{{--                </a>--}}
{{--            </td>--}}

{{--            <td align="center">--}}
{{--                <a href="zhuzuo-xq.html">--}}
{{--                    <table width="196" border="0" cellspacing="0" cellpadding="0">--}}
{{--                        <tbody>--}}
{{--                        <tr>--}}
{{--                            <td width="196" height="227" align="center" valign="top">--}}
{{--                                <table width="166" height="229" border="0" cellpadding="0" cellspacing="0" style="border:1px #CCCCCC solid;">--}}
{{--                                    <tbody>--}}
{{--                                    <tr>--}}
{{--                                        <td width="164" align="center" valign="middle"><img src="{{asset('statics/img/02.jpg')}}" width="155" height="218" border="0"></td>--}}
{{--                                    </tr>--}}
{{--                                    </tbody>--}}
{{--                                </table>--}}

{{--                            </td>--}}
{{--                        </tr>--}}

{{--                        </tbody>--}}
{{--                    </table>--}}
{{--                </a>--}}
{{--            </td>--}}

{{--            <td align="center">--}}
{{--                <a href="zhuzuo-xq.html">--}}
{{--                    <table width="196" border="0" cellspacing="0" cellpadding="0">--}}
{{--                        <tbody>--}}
{{--                        <tr>--}}
{{--                            <td width="196" height="227" align="center" valign="top">--}}
{{--                                <table width="166" height="229" border="0" cellpadding="0" cellspacing="0" style="border:1px #CCCCCC solid;">--}}
{{--                                    <tbody>--}}
{{--                                    <tr>--}}
{{--                                        <td width="164" align="center" valign="middle"><img src="{{asset('statics/img/03.jpg')}}" width="155" height="218" border="0"></td>--}}
{{--                                    </tr>--}}
{{--                                    </tbody>--}}
{{--                                </table>--}}

{{--                            </td>--}}
{{--                        </tr>--}}

{{--                        </tbody>--}}
{{--                    </table>--}}
{{--                </a>--}}
{{--            </td>--}}
{{--            <td align="center">--}}
{{--                <a href="zhuzuo-xq.html">--}}
{{--                    <table width="196" border="0" cellspacing="0" cellpadding="0">--}}
{{--                        <tbody>--}}
{{--                        <tr>--}}
{{--                            <td width="196" height="227" align="center" valign="top">--}}
{{--                                <table width="166" height="229" border="0" cellpadding="0" cellspacing="0" style="border:1px #CCCCCC solid;">--}}
{{--                                    <tbody>--}}
{{--                                    <tr>--}}
{{--                                        <td width="164" align="center" valign="middle"><img src="{{asset('statics/img/04.jpg')}}" width="155" height="218" border="0"></td>--}}
{{--                                    </tr>--}}
{{--                                    </tbody>--}}
{{--                                </table>--}}

{{--                            </td>--}}
{{--                        </tr>--}}

{{--                        </tbody>--}}
{{--                    </table>--}}
{{--                </a>--}}
{{--            </td>--}}
{{--            <td align="center">--}}
{{--                <a href="zhuzuo-xq.html">--}}
{{--                    <table width="196" border="0" cellspacing="0" cellpadding="0">--}}
{{--                        <tbody>--}}
{{--                        <tr>--}}
{{--                            <td width="196" height="227" align="center" valign="top">--}}
{{--                                <table width="166" height="229" border="0" cellpadding="0" cellspacing="0" style="border:1px #CCCCCC solid;">--}}
{{--                                    <tbody>--}}
{{--                                    <tr>--}}
{{--                                        <td width="164" align="center" valign="middle"><img src="{{asset('statics/img/05.jpg')}}" width="155" height="218" border="0"></td>--}}
{{--                                    </tr>--}}
{{--                                    </tbody>--}}
{{--                                </table>--}}

{{--                            </td>--}}
{{--                        </tr>--}}

{{--                        </tbody>--}}
{{--                    </table>--}}
{{--                </a>--}}
{{--            </td>--}}
{{--            <td align="center">--}}
{{--                <a href="zhuzuo-xq.html">--}}
{{--                    <table width="196" border="0" cellspacing="0" cellpadding="0">--}}
{{--                        <tbody>--}}
{{--                        <tr>--}}
{{--                            <td width="196" height="227" align="center" valign="top">--}}
{{--                                <table width="166" height="229" border="0" cellpadding="0" cellspacing="0" style="border:1px #CCCCCC solid;">--}}
{{--                                    <tbody>--}}
{{--                                    <tr>--}}
{{--                                        <td width="164" align="center" valign="middle"><img src="{{asset('statics/img/06.jpg')}}" width="155" height="218" border="0"></td>--}}
{{--                                    </tr>--}}
{{--                                    </tbody>--}}
{{--                                </table>--}}

{{--                            </td>--}}
{{--                        </tr>--}}

{{--                        </tbody>--}}
{{--                    </table>--}}
{{--                </a>--}}
{{--            </td>--}}
        </tr>
        <tr>

        </tr>
        </tbody>
    </table>
    <!--分页 -->
    <div class="page-box after-clear">
        <ul class="after-clear">
{{$data->links()}}
{{--            <li>--}}
{{--                <a title="首页" class="first" href="">首页</a>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <a title="上一页" class="prev" href="">上一页</a>--}}
{{--            </li>--}}
{{--            <li><span>1</span></li>--}}
{{--            <li>--}}
{{--                <a title="下一页" class="next" href="">下一页</a>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <a title="尾页" class="last" href="">尾页</a>--}}
{{--            </li>--}}
        </ul>
    </div>
</div>
<!--著作 教材-->
<!--关于-->
@endsection
