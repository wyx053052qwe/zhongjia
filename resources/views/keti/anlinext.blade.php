@extends('layouts.keti')
@section('title', '成功案例')
@section('content')
<!--成功案例 -->
<div class="w1200">
    <div class="sort-box lunwen-t">
        <dl class="box-item after-clear">
            <dd class="desc active">成功案例<i></i></dd>
        </dl>
        <ul class="box-but after-clear">
            <li>
                <a href="javascript:;" onclick="openChat();" title="免费咨询" rel="nofollow">免费咨询</a>
            </li>
        </ul>
        <div class="clear"></div>
    </div>
    <div class="h20"></div>
    <!--内容  -->
    <div class="article">
        <h3 class="article-title">{{$data->a_title}}</h3>
        <div class="article-info">发布时间：{{$data->created_at}} <span class="info-date">2018-11-16</span> 当前文章地址：news_47.html</div>
        <div class="article-content">
            <p style="text-indent: 2em;">{{trim($data->a_contetn,'<p></p>')}}</p>
{{--            <p style="text-indent: 2em;">高教授与众悦文化网编辑团队协商合作，由我们这里的专业团队帮助高教授做课题申报工作，高教授配合提供相关资料。由于众悦文化网做课题已经很多年，熟知哪些国家级课题适合高教授申请，高教授非常惊讶，原来还有这么多种课题属于国家级课题也是适合他学校的要求的课题。于是，高教授熟虑后决定在众悦文化网这里做他的课题。</p>--}}
{{--            <p>高教授与众悦文化网编辑团队协商合作，由我们这里的专业团队帮助高教授做课题申报工作，高教授配合提供相关资料。由于众悦文化网做课题已经很多年，熟知哪些国家级课题适合高教授申请，高教授非常惊讶，原来还有这么多种课题属于国家级课题也是适合他学校的要求的课题。于是，高教授熟虑后决定在众悦文化网这里做他的课题。</p>--}}

        </div>
        <div class="box-page">
					<span>上一条：
                <a href="{{url('keti/anlinext')}}/{{$down['a_id']}}/{{$up['c_id']}}" title="期刊论文发表字数要求">{{$down['a_title']}}</a>

                    </span>
            <span>下一条：
                <a href="{{url('keti/anlinext')}}/{{$up['a_id']}}/{{$up['c_id']}}" title="教师课题研究的重要性">{{$up['a_title']}}</a></span>
        </div>

    </div>
    <style>
        .title .hot {
            background-position: 0 0;
            width: 67px;
            background-image: url(statics/images/icon.png);
            background-repeat: no-repeat;
            margin-left: 7px;
            vertical-align: middle;
            display: inline-block;
            height: 25px;
        }
    </style>
    <!--热门期刊  -->

</div>
<!--成功案例 -->
@endsection
