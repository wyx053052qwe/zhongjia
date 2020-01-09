@extends('layouts.zhuanli')
@section('title', '专利')
@section('content')
<!--专利-->
<div class="w1200">
    <div class="sort-box lunwen-t">
        <dl class="box-item after-clear">
            <dd class="desc active">实用新型专利<i></i></dd>
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

{{--            <p style="text-indent: 2em;">专利局收到专利申请后进行审查，如果符合受理条件，专利局将确定申请日，给予申请号，并且核实过文件清单后，发出受理通知书，通知申请人。如果申请文件未打字、印刷或字迹不清、有涂改的；或者附图及图片未用绘图工具和黑色墨水绘制、照片模糊不清有涂改的；或者申请文件不齐备的；或者请求书中缺申请人姓名或名称及地址不详的；或专利申请类别不明确或无法确定的，以及外国单位和个人未经涉外专利代理机构直接寄来的专利申请不予受理。<br></p>--}}
{{--            <p style="text-indent: 2em;">（2）初步审查阶段　<br></p>--}}
{{--            <p style="text-indent: 2em;">经受理后的专利申请按照规定缴纳申请费的，自动进入初审阶段。初审前发明专利申请首先要进行保密审查，需要保密的，按保密程序处理。<br></p>--}}
{{--            <p style="text-indent: 2em;">2. 读相关文献要注意“精”和“新”，即只读最好的期刊/会议上的最新成果。由于本科生写论文一般是在别人的基础上做增量式工作，所以这个基础的高度和热度决定了你的工作将发表在什么级别的刊物上。<br></p>--}}
{{--            <p style="text-indent: 2em;">在初审是要对申请是否存在明显缺陷进行审查，主要包括审查内容是否属于《专利法》中不授予专利权的范围，是否明显缺乏技术内容不能构成技术方案，是否缺乏单一性，申请文件是否齐备及格式是否符合要求。若是外国申请人还要进行资格审查及申请手续审查。不合格的，专利局将通知申请人在规定的期限内补正或陈述意见，逾期不答复的，申请将被视为撤回。经答复仍未消除缺陷的，予以驳回。发明专利申请初审合格的，将发给初审合格通知书。对实用新型和外观设计专利申请，除进行上述审查外，还要审查是否明显与已有专利相同，不是一个新的技术方案或者新的设计，经初审未发现驳回理由的。将直接进入授权秩序。<br></p>--}}

        </div>
        <div class="box-page">
					<span>上一条：
                <a href="{{url('zhuanli/next')}}/{{$down['a_id']}}/{{$up['c_id']}}" title="期刊论文发表字数要求">{{$down['a_title']}}</a>

                    </span>
            <span>下一条：
                <a href="{{url('zhuanli/next')}}/{{$up['a_id']}}/{{$up['c_id']}}" title="教师课题研究的重要性">{{$down['a_title']}}</a></span>
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
@endsection
