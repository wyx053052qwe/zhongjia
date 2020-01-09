@extends('layouts.app')
@section('title', '论文中心')
@section('content')<!--论文中心-->

<div class="w1200">
    <div class="sort-box lunwen-t">
        <dl class="box-item after-clear">
            <dd class="desc active">论文中心<i></i></dd>
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
        <div class="article-info">发布时间： <span class="info-date">{{$data->created_at}}</span> 当前文章地址：论文中心</div>
        <div class="article-content">
            <p style="text-indent: 2em;">{!! $data->a_contetn !!}</p>
{{--            <p style="text-indent: 2em;">有些人觉得上图没有实质性可操作的内容，其实不然。很多本科小朋友有发论文的动机和能力，但是对其中的流程并不了解，所以常常做一些非常低效的行为。比如找了个冷门方向的导师，读了一堆七八年前的经典论文或者找个论文集来乱读一气，天天等着导师给自己布置任务而不知道自己寻找问题等等。最后的结果就是在实验室干了一两年杂活没有任何东西发表，或者跟着师兄师姐蹭了几篇N作水文，这些对申请是没有意义的。这个流程并不是告诉你可以做什么，而是介绍做这些事情的一个顺序。事实证明这种顺序是本科阶段发表论文的一个高效方法。并且只要你肯投入时间，成功率会很高。<br></p>--}}
{{--            <p style="text-indent: 2em;">最后总结几个要点：<br></p>--}}
{{--            <p style="text-indent: 2em;">1. 找到好导师就是成功了一半。<br></p>--}}
{{--            <p style="text-indent: 2em;">2. 读相关文献要注意“精”和“新”，即只读最好的期刊/会议上的最新成果。由于本科生写论文一般是在别人的基础上做增量式工作，所以这个基础的高度和热度决定了你的工作将发表在什么级别的刊物上。<br></p>--}}
{{--            <p style="text-indent: 2em;">本科阶段如何发表论文呢<br></p>--}}
{{--            <p style="text-indent: 2em;">3. 确保原始解法和初稿都出于自己之手，这样才能占据第一作者的位置（非一作的论文没有意义）。<br></p>--}}
{{--            <p style="text-indent: 2em;">4. 不要轻易放弃一个暂时无解的问题。每次想放弃的时候，问问自己还有没有其他的可能性？或许再多思考几天就会柳暗花明。<br></p>--}}
{{--            <p style="text-indent: 2em;">5. 即使走到论文投稿的最后一步，也不要忘了你随时可以退回原点重新选择。<br></p>--}}
{{--            <p style="text-indent: 2em;">6. 最重要的一点：论文的发表与否最终取决于工作的质量。如果你确认自己做了高质量的工作，就不要因为一两次的拒稿而放弃。坚持修改反复投稿，就一定会等到惊喜。</p>--}}
        </div>
        <div class="box-page">
					<span>上一条：
                <a href="{{url('index/lunwen-zxnext')}}/{{$down['a_id']}}/{{$up['c_id']}}" title="期刊论文发表字数要求">{{$down['a_title']}}</a>

                    </span>
            <span>下一条：
                <a href="{{url('index/lunwen-zxnext')}}/{{$up['a_id']}}/{{$up['c_id']}}" title="教师课题研究的重要性">{{$up['a_title']}}</a></span>
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
    <div class="w1200">
        <div class="h20"></div>
        <div class="bar-box">
            <span class="title"><a href="zazhi/zdhjs/" target="_blank">热门期刊</a><span class="hot"></span></span>

            <div class="clear"></div>
        </div>
        <div class="articles-box">

            <ul>
                @foreach($rm as $r)
                <li class="box-item">
                    <div class="img-con item-image">
                        <a href="{{url('index/shop1')}}?j_id={{$r->j_id}}" title="计算机测量与控制杂志" target="_blank"><img src="{{asset('uploads/'.$r->j_thumbnail)}}" width="130" height="180" alt="{{$r->j_title}}"></a>
                    </div>
                    <div class="item-title">
                        <h4>
                            <a title="计算机测量与控制杂志" href="{{url('index/shop1')}}?j_id={{$r->j_id}}/" target="_blank">{{$r->j_title}}</a>
                        </h4>
                    </div>
                    <div class="item-info tc">
                        <a target="_blank" href="zazhi/tongjiyun/" title="统计源期刊论文发表">统计源期刊</a>
                        <a target="_blank" href="zazhi/sg2/" title="审稿时间1-3个月">1-3个月审稿</a>
                    </div>
                    <div class="item-info tc">
                        人气：<span class="red mr10">{{$r->sort}}</span>评论：<span class="red">18</span>
                    </div>
                </li>
                @endforeach
{{--                <li class="box-item">--}}
{{--                    <div class="img-con item-image">--}}
{{--                        <a href="zdhyy/" title="自动化应用杂志" target="_blank"><img src="{{asset('statics/img/02.jpg')}}" width="130" height="180" alt="自动化应用杂志"></a>--}}
{{--                    </div>--}}
{{--                    <div class="item-title">--}}
{{--                        <h4>--}}
{{--                            <a title="自动化应用杂志" href="zdhyy/" target="_blank">自动化应用</a>--}}
{{--                        </h4>--}}
{{--                    </div>--}}
{{--                    <div class="item-info tc">--}}
{{--                        <a target="_blank" href="zazhi/shengjie/" title="省级期刊论文发表">省级期刊</a>--}}
{{--                        <a target="_blank" href="zazhi/sg1/" title="审稿时间1个月内">1个月内审稿</a>--}}
{{--                    </div>--}}
{{--                    <div class="item-info tc">--}}
{{--                        人气：<span class="red mr10">4678</span>评论：<span class="red">22</span>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li class="box-item">--}}
{{--                    <div class="img-con item-image">--}}
{{--                        <a href="zgglxxh/" title="中国管理信息化杂志" target="_blank"><img src="{{asset('statics/img/03.jpg')}}" width="130" height="180" alt="中国管理信息化杂志"></a>--}}
{{--                    </div>--}}
{{--                    <div class="item-title">--}}
{{--                        <h4>--}}
{{--                            <a title="中国管理信息化杂志" href="zgglxxh/" target="_blank">中国管理信息化</a>--}}
{{--                        </h4>--}}
{{--                    </div>--}}
{{--                    <div class="item-info tc">--}}
{{--                        <a target="_blank" href="zazhi/shengjie/" title="省级期刊论文发表">省级期刊</a>--}}
{{--                        <a target="_blank" href="zazhi/sg1/" title="审稿时间1个月内">1个月内审稿</a>--}}
{{--                    </div>--}}
{{--                    <div class="item-info tc">--}}
{{--                        人气：<span class="red mr10">4465</span>评论：<span class="red">22</span>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li class="box-item">--}}
{{--                    <div class="img-con item-image">--}}
{{--                        <a href="zdhjsyyy/" title="自动化技术与应用杂志" target="_blank"><img src="{{asset('statics/img/04.jpg')}}" width="130" height="180" alt="自动化技术与应用杂志"></a>--}}
{{--                    </div>--}}
{{--                    <div class="item-title">--}}
{{--                        <h4>--}}
{{--                            <a title="自动化技术与应用杂志" href="zdhjsyyy/" target="_blank">自动化技术与应用</a>--}}
{{--                        </h4>--}}
{{--                    </div>--}}
{{--                    <div class="item-info tc">--}}
{{--                        <a target="_blank" href="zazhi/shengjie/" title="省级期刊论文发表">省级期刊</a>--}}
{{--                        <a target="_blank" href="zazhi/sg1/" title="审稿时间1个月内">1个月内审稿</a>--}}
{{--                    </div>--}}
{{--                    <div class="item-info tc">--}}
{{--                        人气：<span class="red mr10">2885</span>评论：<span class="red">18</span>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li class="box-item">--}}
{{--                    <div class="item-icon hx"></div>--}}
{{--                    <div class="img-con item-image">--}}
{{--                        <a href="cgqywxt/" title="传感器与微系统杂志" target="_blank"><img src="{{asset('statics/img/05.jpg')}}" width="130" height="180" alt="传感器与微系统杂志"></a>--}}
{{--                    </div>--}}
{{--                    <div class="item-title">--}}
{{--                        <h4>--}}
{{--                            <a title="传感器与微系统杂志" href="cgqywxt/" target="_blank">传感器与微系统</a>--}}
{{--                        </h4>--}}
{{--                    </div>--}}
{{--                    <div class="item-info tc">--}}
{{--                        <a target="_blank" href="zazhi/cscdheixin/" title="CSCD核心期刊论文发表">CSCD核心期刊</a>--}}
{{--                        <a target="_blank" href="zazhi/sg2/" title="审稿时间1-3个月">1-3个月审稿</a>--}}
{{--                    </div>--}}
{{--                    <div class="item-info tc">--}}
{{--                        人气：<span class="red mr10">2386</span>评论：<span class="red">14</span>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li class="box-item">--}}
{{--                    <div class="img-con item-image">--}}
{{--                        <a href="dzjsyrjgc/" title="电子技术与软件工程杂志" target="_blank"><img src="{{asset('statics/img/06.jpg')}}" width="130" height="180" alt="电子技术与软件工程杂志"></a>--}}
{{--                    </div>--}}
{{--                    <div class="item-title">--}}
{{--                        <h4>--}}
{{--                            <a title="电子技术与软件工程杂志" href="dzjsyrjgc/" target="_blank">电子技术与软件工程</a>--}}
{{--                        </h4>--}}
{{--                    </div>--}}
{{--                    <div class="item-info tc">--}}
{{--                        <a target="_blank" href="zazhi/guojiajie/" title="国家级期刊论文发表">国家级期刊</a>--}}
{{--                        <a target="_blank" href="zazhi/sg1/" title="审稿时间1个月内">1个月内审稿</a>--}}
{{--                    </div>--}}
{{--                    <div class="item-info tc">--}}
{{--                        人气：<span class="red mr10">2066</span>评论：<span class="red">6</span>--}}
{{--                    </div>--}}
{{--                </li>--}}
            </ul>

        </div>
    </div>
</div>
<!--分页 -->

<!--论文中心-->
@endsection
