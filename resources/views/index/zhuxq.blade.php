@extends('layouts.zhuzuo')
@section('title', '教材出版')
@section('content')
<!--著作 教材-->
<div class="zhuzuo-anli">
    <!--新闻  -->
    <div class="article">
        <h3 class="article-title">{{$data->a_title}}</h3>
        <div class="article-info">发布时间： <span class="info-date">2018-11-16</span> 当前文章地址：news_47.html</div>
        <div class="article-content">
            <p style="text-indent: 2em;">{{$data->a_content}}</p>

        </div>
        <div class="box-page">
					<span>上一条：
                <a href="{{url('index/zhuxq')}}/{{$down['a_id']}}/{{$up['c_id']}}" title="期刊论文发表字数要求">{{$down['a_title']}}</a>

                    </span>
            <span>下一条：
                <a href="{{url('index/zhuxq')}}/{{$up['a_id']}}/{{$up['c_id']}}" title="教师课题研究的重要性">{{$up['a_title']}}</a></span>
        </div>

    </div>
    <table width="1200" height="24" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-bottom:10px; margin-top:5px; border-bottom:4px #0082a2 solid;">
        <tbody>
        <tr>
            <td width="79" valign="bottom">
                <a href=""><img src="{{asset('statics/img/zxcb.jpg')}}" width="79" height="24" border="0"></a>
            </td>

        </tr>
        </tbody>
    </table>
    <table width="100%" border="0" cellspacing="1" cellpadding="0" style="margin-bottom:10px;">

        <tbody>
        <tr>
        @foreach($zz as $z)
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
{{--            <td align="center">--}}
{{--                <table width="196" border="0" cellspacing="0" cellpadding="0">--}}
{{--                    <tbody>--}}
{{--                    <tr>--}}
{{--                        <td width="196" height="227" align="center" valign="top">--}}
{{--                            <table width="166" height="229" border="0" cellpadding="0" cellspacing="0" style="border:1px #CCCCCC solid;">--}}
{{--                                <tbody>--}}
{{--                                <tr>--}}
{{--                                    <td width="164" align="center" valign="middle"><img src="statics/img/02.jpg" width="155" height="218" border="0"></td>--}}
{{--                                </tr>--}}
{{--                                </tbody>--}}
{{--                            </table>--}}

{{--                        </td>--}}
{{--                    </tr>--}}

{{--                    </tbody>--}}
{{--                </table>--}}
{{--            </td>--}}

{{--            <td align="center">--}}
{{--                <table width="196" border="0" cellspacing="0" cellpadding="0">--}}
{{--                    <tbody>--}}
{{--                    <tr>--}}
{{--                        <td width="196" height="227" align="center" valign="top">--}}
{{--                            <table width="166" height="229" border="0" cellpadding="0" cellspacing="0" style="border:1px #CCCCCC solid;">--}}
{{--                                <tbody>--}}
{{--                                <tr>--}}
{{--                                    <td width="164" align="center" valign="middle"><img src="statics/img/04.jpg" width="155" height="218" border="0"></td>--}}
{{--                                </tr>--}}
{{--                                </tbody>--}}
{{--                            </table>--}}

{{--                        </td>--}}
{{--                    </tr>--}}

{{--                    </tbody>--}}
{{--                </table>--}}
{{--            </td>--}}
{{--            <td align="center">--}}
{{--                <table width="196" border="0" cellspacing="0" cellpadding="0">--}}
{{--                    <tbody>--}}
{{--                    <tr>--}}
{{--                        <td width="196" height="227" align="center" valign="top">--}}
{{--                            <table width="166" height="229" border="0" cellpadding="0" cellspacing="0" style="border:1px #CCCCCC solid;">--}}
{{--                                <tbody>--}}
{{--                                <tr>--}}
{{--                                    <td width="164" align="center" valign="middle"><img src="statics/img/05.jpg" width="155" height="218" border="0"></td>--}}
{{--                                </tr>--}}
{{--                                </tbody>--}}
{{--                            </table>--}}

{{--                        </td>--}}
{{--                    </tr>--}}

{{--                    </tbody>--}}
{{--                </table>--}}
{{--            </td>--}}
{{--            <td align="center">--}}
{{--                <table width="196" border="0" cellspacing="0" cellpadding="0">--}}
{{--                    <tbody>--}}
{{--                    <tr>--}}
{{--                        <td width="196" height="227" align="center" valign="top">--}}
{{--                            <table width="166" height="229" border="0" cellpadding="0" cellspacing="0" style="border:1px #CCCCCC solid;">--}}
{{--                                <tbody>--}}
{{--                                <tr>--}}
{{--                                    <td width="164" align="center" valign="middle"><img src="statics/img/05.jpg" width="155" height="218" border="0"></td>--}}
{{--                                </tr>--}}
{{--                                </tbody>--}}
{{--                            </table>--}}

{{--                        </td>--}}
{{--                    </tr>--}}

{{--                    </tbody>--}}
{{--                </table>--}}
{{--            </td>--}}
{{--            <td align="center">--}}
{{--                <table width="196" border="0" cellspacing="0" cellpadding="0">--}}
{{--                    <tbody>--}}
{{--                    <tr>--}}
{{--                        <td width="196" height="227" align="center" valign="top">--}}
{{--                            <table width="166" height="229" border="0" cellpadding="0" cellspacing="0" style="border:1px #CCCCCC solid;">--}}
{{--                                <tbody>--}}
{{--                                <tr>--}}
{{--                                    <td width="164" align="center" valign="middle"><img src="statics/img/05.jpg" width="155" height="218" border="0"></td>--}}
{{--                                </tr>--}}
{{--                                </tbody>--}}
{{--                            </table>--}}

{{--                        </td>--}}
{{--                    </tr>--}}

{{--                    </tbody>--}}
{{--                </table>--}}
{{--            </td>--}}
        </tr>
        <tr>

        </tr>
        </tbody>
    </table>

</div>
<!--著作 教材-->
@endsection
