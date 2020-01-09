@extends('layouts.app')
@section('title', '众佳期刊')
@section('content')
{{--    <link rel="stylesheet" href="{{asset('css/app.css')}}">--}}
    <style>
        .pagination{
            margin-left: 45%;
        }
        .pagination li{
            list-style-type: none;
            display: inline;
            padding: 10px;
            color: red;
        }

    </style>
		<!--搜索框 -->
		<div class="search radius6">
			<form name="searchform" method="post" action="{{url('/index/sousuo')}}">
                @csrf
				<input name='ecmsfrom' class="c_id" type='hidden' value='9'>
				<input type="hidden" name="show" value="title,newstext">
				<select name="classid" id="choose" class="c_id">
					<option value="">搜索全部</option>
                    @foreach($catedata as $c)
					<option class="c_id" value="{{$c->c_id}}">{{$c->c_name}}</option>
                    @endforeach
{{--					<option value="2">体育期刊</option>--}}
{{--					<option value="3">文艺期刊</option>--}}
{{--					<option value="4">医药期刊</option>--}}
{{--					<option value="5">建筑期刊</option>--}}
{{--					<option value="6">电脑期刊</option>--}}
{{--					<option value="7">科技期刊</option>--}}
{{--					<option value="8">经济期刊</option>--}}
{{--					<option value="9">社科期刊</option>--}}
{{--					<option value="10">著作、教材</option>--}}
{{--					<option value="11">课题、专利</option>--}}
				</select>
				<input class="inp_srh" name="keyboard" placeholder="请输入您要搜索的内容">
				<input class="btn_srh" type="submit" name="submit" value="搜索">
			</form>
		</div>

		<!--搜索框 -->
		<!--新闻 -->
		<div class="w1200">
			<div class="l zxsj-box">
				<div class="box-bar"><span class="title">最新上架</span></div>
				<div class="left">
					<div class="slides-box slider-2 img-con" style="overflow: hidden;">

						<div class="slidesjs-container" style="overflow: hidden; position: relative; width: 182px; height: 242px;">
							<div id="owl-demo" class="owl-carousel">
                                @foreach($art as $a)
								<a class="item" href="{{url('index/shop1')}}?j_id={{$a->j_id}}" target="_blank"><img src="{{asset('uploads/'.$a->j_thumbnail)}}" alt=""><b></b><span>{{$a->j_title}}</span></a>
                                @endforeach
{{--								<a class="item" href="" target="_blank"><img src="statics/img/02.jpg" alt=""><b></b><span>2222</span></a>--}}
{{--								<a class="item" href="" target="_blank"><img src="statics/img/03.jpg" alt=""><b></b><span>33333</span></a>--}}
{{--								<a class="item" href="" target="_blank"><img src="statics/img/04.jpg" alt=""><b></b><span>44444</span></a>--}}
{{--								<a class="item" href="" target="_blank"><img src="statics/img/05.jpg" alt=""><b></b><span>555555</span></a>--}}
{{--								<a class="item" href="" target="_blank"><img src="statics/img/06.jpg" alt=""><b></b><span>666666</span></a>--}}
{{--								<a class="item" href="" target="_blank"><img src="statics/img/07.jpg" alt=""><b></b><span>7777777</span></a>--}}
							</div>

						</div>

					</div>
					<div class="box-issue">
						<div class="title">新到期刊</div>
						<ul class="after-clear">
                            @foreach($xin as $x)
							<li>
								<a title="{{$x->c_name}}" href="#" target="_blank">{{$x->c_alias}}</a>
							</li>
                            @endforeach
{{--							<li>--}}
{{--								<a title="医学论文发表" href="#" target="_blank">医学</a>--}}
{{--							</li>--}}
{{--							<li>--}}
{{--								<a title="经济论文发表" href="#" target="_blank">经济</a>--}}
{{--							</li>--}}
{{--							<li>--}}
{{--								<a title="金融论文发表" href="zazhi/jinrong/" target="_blank">金融</a>--}}
{{--							</li>--}}
{{--							<li>--}}
{{--								<a title="管理论文发表" href="zazhi/guanli/" target="_blank">管理</a>--}}
{{--							</li>--}}
{{--							<li>--}}
{{--								<a title="科技论文发表" href="zazhi/keji/" target="_blank">科技</a>--}}
{{--							</li>--}}
{{--							<li>--}}
{{--								<a title="工业论文发表" href="zazhi/gongye/" target="_blank">工业</a>--}}
{{--							</li>--}}
{{--							<li>--}}
{{--								<a title="机械论文发表" href="zazhi/jixie/" target="_blank">机械</a>--}}
{{--							</li>--}}
{{--							<li>--}}
{{--								<a title="农业论文发表" href="zazhi/nongye/" target="_blank">农业</a>--}}
{{--							</li>--}}
{{--							<li>--}}
{{--								<a title="电力论文发表" href="zazhi/dianli/" target="_blank">电力</a>--}}
{{--							</li>--}}
{{--							<li>--}}
{{--								<a title="水利论文发表" href="zazhi/shuili/" target="_blank">水利</a>--}}
{{--							</li>--}}
{{--							<li>--}}
{{--								<a title="文学论文发表" href="zazhi/wenxue/" target="_blank">文学</a>--}}
{{--							</li>--}}
{{--							<li>--}}
{{--								<a title="艺术论文发表" href="zazhi/yishu/" target="_blank">艺术</a>--}}
{{--							</li>--}}
{{--							<li>--}}
{{--								<a title="文化论文发表" href="zazhi/wenhua/" target="_blank">文化</a>--}}
{{--							</li>--}}
{{--							<li>--}}
{{--								<a title="建筑论文发表" href="zazhi/jianzhu/" target="_blank">建筑</a>--}}
{{--							</li>--}}
{{--							<li>--}}
{{--								<a title="图书论文发表" href="zazhi/tushu/" target="_blank">图书</a>--}}
{{--							</li>--}}
{{--							<li>--}}
{{--								<a title="档案论文发表" href="zazhi/dangan/" target="_blank">档案</a>--}}
{{--							</li>--}}
{{--							<li>--}}
{{--								<a title="交通论文发表" href="zazhi/jiaotong/" target="_blank">交通</a>--}}
{{--							</li>--}}
						</ul>
					</div>
				</div>
				<div class="right box-article">
					<ul class ='ul'>
                            @foreach($lw as $l)
						<li>
							<!--点进去是新闻详情，格式和论文中心详情页布局相同-->
							<h4 class="title"><a href="{{url('index/lunwen-zxnext')}}/{{$l->a_id}}/{{$l->c_id}}" title="{{$l->a_title}}" target="_blank">{{$l->a_title}}</a></h4>
							<p class="authors">关键词：{{$l->a_keywords}}</p>

							<p class="description">{{trim($l->a_contetn,'<p></p>')}}</p>
						</li>
                        @endforeach
{{--						<li>--}}

{{--							<p class="title">--}}
{{--								<a href="lunwen-zxnext.html" title="核心期刊辨别与发表知识" target="_blank">核心期刊辨别与发表知识</a>--}}
{{--								<span class="authors">关键词：核心期刊 辨别 发表</span>--}}
{{--							</p>--}}

{{--							<p class="description">核心期刊，主要是指期刊中学术水平较高的刊物，是进行刊物评价而非具体学术评价的工具。相当一批教学科研单位申请高级职称、取得博士论文答辩资格、申报科研项目、科研机构或高等院校学术水平评估等，都需要在核心...</p>--}}
{{--						</li>--}}
{{--						<li>--}}

{{--							<p class="title">--}}
{{--								<a href="zhishi/14069/" title="正规合法期刊特征识别" target="_blank">正规合法期刊特征识别</a>--}}
{{--								<span class="authors">关键词：正规合法 期刊 特征</span>--}}
{{--							</p>--}}

{{--							<p class="description">国内公开发的期刊允许在国内外发行，有国内统一刊号，其刊号结构式为：CN报刊登记号/分类号，只有ISSN国际刊号而无国内统一刊号不允许在国内公开发行，有的虽印有CN（HK）或CNXXX（HK）/R这不是合法的国内统一刊号...</p>--}}
{{--						</li>--}}
{{--						<li>--}}

{{--							<p class="title">--}}
{{--								<a href="zhishi/14985/" title="期刊的分类与选择" target="_blank">期刊的分类与选择</a>--}}
{{--								<span class="authors">关键词：期刊 分类 选择</span>--}}
{{--							</p>--}}

{{--							<p class="description">以《中国图书馆图书分类法.期刊分类表》为代表，将期刊分为五个基本部类：（1）马列主义、毛泽东思想（2）哲学（3）社会科学（4）自然科学（5）综合性刊物。在基本部类中，又分为若干大类，如社会科学分为社会科学...</p>--}}
{{--						</li>--}}
					</ul>
				</div>
				<div class="clean"></div>
			</div>
			<div class="r szph-box">
				<div class="box-bar"><span class="title">本周试读排行</span></div>
				<div class="box-con">
					<ul>
@foreach($sort as $s)
						<li class="">
							<span class="num">1</span>

							<a title="{{$s->j_title}}" href="{{url('index/shop1')}}?j_id={{$s->j_id}}" class="img-con photo">
								<img width="75" height="100" alt="{{$s->a_title}}" src="{{asset('uploads/'.$s->j_thumbnail)}}">
							</a>
							<p class="title">
								<a title="{{$s->j_title}}" href="{{url('index/shop1')}}?j_id={{$s->j_id}}">{{$s->j_title}}</a>
							</p>
							<p class="authors">{{$s->j_title}}</p>
						</li>
                        @endforeach
{{--						<li class="">--}}
{{--							<span class="num">2</span>--}}

{{--							<a title="含能材料" href="hncl/" class="img-con photo">--}}
{{--								<img width="75" height="100" alt="含能材料" src="statics/img/04.jpg">--}}
{{--							</a>--}}
{{--							<p class="title">--}}
{{--								<a title="高能晶体撞击感度理论研究——第一性原理带隙（ΔE_g）判据" href="hncl/201004/12139723.html">高能晶体撞击感度理论研究——第一性原理带隙（ΔE_g）判据</a>--}}
{{--							</p>--}}
{{--							<p class="authors">朱卫华 张效文 肖鹤鸣</p>--}}
{{--						</li>--}}
{{--						<li class="">--}}
{{--							<span class="num">3</span>--}}

{{--							<a title="新课程" href="xkc/" class="img-con photo">--}}
{{--								<img width="75" height="100" alt="新课程" src="statics/img/05.jpg">--}}
{{--							</a>--}}
{{--							<p class="title">--}}
{{--								<a title="基于课程标准的初中道德与法治教学" href="xkc/201717/29720085.html">基于课程标准的初中道德与法治教学</a>--}}
{{--							</p>--}}
{{--							<p class="authors">王郁</p>--}}
{{--						</li>--}}
{{--						<li class="">--}}
{{--							<span class="num">4</span>--}}

{{--							<a title="通讯世界" href="txsj/" class="img-con photo">--}}
{{--								<img width="75" height="100" alt="通讯世界" src="statics/img/03.jpg">--}}
{{--							</a>--}}
{{--							<p class="title">--}}
{{--								<a title="集成电路测试系统微小微电子参量校准技术研究" href="txsj/201608/21154514.html">集成电路测试系统微小微电子参量校准技术研究</a>--}}
{{--							</p>--}}
{{--							<p class="authors">尹梦宾</p>--}}
{{--						</li>--}}
{{--						<li class="">--}}
{{--							<span class="num">5</span>--}}

{{--							<a title="景德镇陶瓷" href="jdztc/" class="img-con photo">--}}
{{--								<img width="75" height="100" alt="景德镇陶瓷" src="statics/img/02.jpg">--}}
{{--							</a>--}}
{{--							<p class="title">--}}
{{--								<a title="陶寅艺术简介" href="jdztc/201002/15292973.html">陶寅艺术简介</a>--}}
{{--							</p>--}}
{{--							<p class="authors"></p>--}}
{{--						</li>--}}
{{--						<li class="">--}}
{{--							<span class="num">6</span>--}}

{{--							<p class="title">--}}
{{--								<a title="中华全国总工会关于认真学习贯彻党的十七大精神的通知" href="/200711/23616219.html">中华全国总工会关于认真学习贯彻党的十七大精神的通知</a>--}}
{{--							</p>--}}
{{--							<p class="authors"></p>--}}
{{--						</li>--}}
{{--						<li class="active">--}}
{{--							<span class="num">7</span>--}}

{{--							<a title="中国市场" href="zhongguoshichang/" class="img-con photo">--}}
{{--								<img width="75" height="100" alt="中国市场" src="statics/img/01.jpg">--}}
{{--							</a>--}}
{{--							<p class="title">--}}
{{--								<a title="关于企业党建工作与生产经营深度融合的几点思考" href="zhongguoshichang/201718/29449949.html">关于企业党建工作与生产经营深度融合的几点思考</a>--}}
{{--							</p>--}}
{{--							<p class="authors">汝欣欣</p>--}}
{{--						</li>--}}
					</ul>
				</div>
			</div>
			<div class="clear"></div>
		</div>

		<!--新闻 -->
		<!--列表 -->

		<div class="w1200">
			<div class="h20"></div>
			<div class="bar-box" c_id="{{$cate->c_id}}"> <span class="title"><a href="qikankj_1.html" title="{{$cate->c_name}}" target="_blank">{{$cate->c_name}}</a><span class="hot"></span></span>
				<div class="clear"></div>
			</div>
			<div class="articles-box">
				<ul class="li">
                    @foreach($artdata as $art)
					<li class="box-item">
						<div class="item-icon"></div>
						<div class="img-con item-image">
							<a href="{{url('index/shop1')}}?j_id={{$art->j_id}}" title="{{$art->j_title}}" target="_blank"><img src="{{asset('uploads/'.$art->j_thumbnail)}}" width="130" height="180" alt="{{$art->j_title}}"></a>
						</div>
						<div class="item-title">
							<h4> <a href="{{url('index/shop1')}}?j_id={{$art->j_id}}" title="{{$art->j_title}}" target="_blank">{{$art->j_title}}</a> </h4>
						</div>
					</li>
                    @endforeach

{{--					<li class="box-item">--}}
{{--						<div class="item-icon"></div>--}}
{{--						<div class="img-con item-image">--}}
{{--							<a href="shop.html" title="中国地质教育" target="_blank"><img src="statics/img/08.jpg" width="130" height="180" alt="中国地质教育"></a>--}}
{{--						</div>--}}
{{--						<div class="item-title">--}}
{{--							<h4> <a href="shop.html" title="中国地质教育" target="_blank">中国地质教育</a> </h4>--}}
{{--						</div>--}}
{{--						<div class="item-info tc">国家级期刊</div>--}}
{{--						<div class="item-info tc"><span class="red">( 季刊 )</span><span class="red">1-3个月</span>审稿</div>--}}
{{--					</li>--}}

				</ul>

			</div>
            {{ $artdata->links() }}
{{--            <ul class="pagination">--}}
{{--                <li c_id="{{$cate->c_id}}"><a href="#">«</a></li>--}}
{{--                <li><a href="#">1</a></li>--}}
{{--                <li><a class="active" href="#">2</a></li>--}}
{{--                <li><a href="#">3</a></li>--}}
{{--                <li><a href="#">4</a></li>--}}
{{--                <li><a href="#">5</a></li>--}}
{{--                <li><a href="#">6</a></li>--}}
{{--                <li><a href="#">7</a></li>--}}
{{--                <li><a href="#">»</a></li>--}}
{{--            </ul>--}}

		</div>
{{--        @endforeach--}}

    <div class="w1200">
        <div class="h20"></div>
        <div class="bar-box" c_id="{{$cate1->c_id}}"> <span class="title"><a href="qikankj_1.html" title="{{$cate1->c_name}}" target="_blank">{{$cate1->c_name}}</a><span class="hot"></span></span>
            <div class="clear"></div>
        </div>
        <div class="articles-box">
            <ul class="li">
                @foreach($artdata1 as $art)
{{--                    @if($cate->c_id==$art->c_id)--}}
                        <li class="box-item">
                            <div class="item-icon"></div>
                            <div class="img-con item-image">
                                <a href="{{url('index/shop1')}}?j_id={{$art->j_id}}" title="{{$art->j_title}}" target="_blank"><img src="{{asset('uploads/'.$art->j_thumbnail)}}" width="130" height="180" alt="{{$art->j_title}}"></a>
                            </div>
                            <div class="item-title">
                                <h4> <a href="{{url('index/shop1')}}?j_id={{$art->j_id}}" title="{{$art->j_title}}" target="_blank">{{$art->j_title}}</a> </h4>
                            </div>
                        </li>
{{--                    @endif--}}
                @endforeach

            </ul>

        </div>
        {{ $artdata1->links() }}

    </div>

    <div class="w1200">
        <div class="h20"></div>
        <div class="bar-box" c_id="{{$cate2->c_id}}"> <span class="title"><a href="qikankj_1.html" title="{{$cate2->c_name}}" target="_blank">{{$cate2->c_name}}</a><span class="hot"></span></span>
            <div class="clear"></div>
        </div>
        <div class="articles-box">
            <ul class="li">
                @foreach($artdata2 as $art)
                    {{--                    @if($cate->c_id==$art->c_id)--}}
                    <li class="box-item">
                        <div class="item-icon"></div>
                        <div class="img-con item-image">
                            <a href="{{url('index/shop1')}}?j_id={{$art->j_id}}" title="{{$art->j_title}}" target="_blank"><img src="{{asset('uploads/'.$art->j_thumbnail)}}" width="130" height="180" alt="{{$art->j_title}}"></a>
                        </div>
                        <div class="item-title">
                            <h4> <a href="{{url('index/shop1')}}?j_id={{$art->j_id}}" title="{{$art->j_title}}" target="_blank">{{$art->j_title}}</a> </h4>
                        </div>
                    </li>
                    {{--                    @endif--}}
                @endforeach

            </ul>

        </div>
        {{ $artdata2->links() }}

    </div>


    <div class="w1200">
        <div class="h20"></div>
        <div class="bar-box" c_id="{{$cate3->c_id}}"> <span class="title"><a href="qikankj_1.html" title="{{$cate3->c_name}}" target="_blank">{{$cate3->c_name}}</a><span class="hot"></span></span>
            <div class="clear"></div>
        </div>
        <div class="articles-box">
            <ul class="li">
                @foreach($artdata3 as $art)
                    {{--                    @if($cate->c_id==$art->c_id)--}}
                    <li class="box-item">
                        <div class="item-icon"></div>
                        <div class="img-con item-image">
                            <a href="{{url('index/shop1')}}?j_id={{$art->j_id}}" title="{{$art->j_title}}" target="_blank"><img src="{{asset('uploads/'.$art->j_thumbnail)}}" width="130" height="180" alt="{{$art->j_title}}"></a>
                        </div>
                        <div class="item-title">
                            <h4> <a href="{{url('index/shop1')}}?j_id={{$art->j_id}}" title="{{$art->j_title}}" target="_blank">{{$art->j_title}}</a> </h4>
                        </div>
                    </li>
                    {{--                    @endif--}}
                @endforeach

            </ul>

        </div>
        {{ $artdata3->links() }}

    </div>

    <div class="w1200">
        <div class="h20"></div>
        <div class="bar-box" c_id="{{$cate4->c_id}}"> <span class="title"><a href="qikankj_1.html" title="{{$cate4->c_name}}" target="_blank">{{$cate4->c_name}}</a><span class="hot"></span></span>
            <div class="clear"></div>
        </div>
        <div class="articles-box">
            <ul class="li">
                @foreach($artdata4 as $art)
                    {{--                    @if($cate->c_id==$art->c_id)--}}
                    <li class="box-item">
                        <div class="item-icon"></div>
                        <div class="img-con item-image">
                            <a href="{{url('index/shop1')}}?j_id={{$art->j_id}}" title="{{$art->j_title}}" target="_blank"><img src="{{asset('uploads/'.$art->j_thumbnail)}}" width="130" height="180" alt="{{$art->j_title}}"></a>
                        </div>
                        <div class="item-title">
                            <h4> <a href="{{url('index/shop1')}}?j_id={{$art->j_id}}" title="{{$art->j_title}}" target="_blank">{{$art->j_title}}</a> </h4>
                        </div>
                    </li>
                    {{--                    @endif--}}
                @endforeach

            </ul>

        </div>
        {{ $artdata4->links() }}

    </div>

    <div class="w1200">
        <div class="h20"></div>
        <div class="bar-box" c_id="{{$cate5->c_id}}"> <span class="title"><a href="qikankj_1.html" title="{{$cate5->c_name}}" target="_blank">{{$cate5->c_name}}</a><span class="hot"></span></span>
            <div class="clear"></div>
        </div>
        <div class="articles-box">
            <ul class="li">
                @foreach($artdata5 as $art)
                    {{--                    @if($cate->c_id==$art->c_id)--}}
                    <li class="box-item">
                        <div class="item-icon"></div>
                        <div class="img-con item-image">
                            <a href="{{url('index/shop1')}}?j_id={{$art->j_id}}" title="{{$art->j_title}}" target="_blank"><img src="{{asset('uploads/'.$art->j_thumbnail)}}" width="130" height="180" alt="{{$art->j_title}}"></a>
                        </div>
                        <div class="item-title">
                            <h4> <a href="{{url('index/shop1')}}?j_id={{$art->j_id}}" title="{{$art->j_title}}" target="_blank">{{$art->j_title}}</a> </h4>
                        </div>
                    </li>
                    {{--                    @endif--}}
                @endforeach

            </ul>

        </div>
        {{ $artdata5->links() }}

    </div>

    <div class="w1200">
        <div class="h20"></div>
        <div class="bar-box" c_id="{{$cate6->c_id}}"> <span class="title"><a href="qikankj_1.html" title="{{$cate6->c_name}}" target="_blank">{{$cate6->c_name}}</a><span class="hot"></span></span>
            <div class="clear"></div>
        </div>
        <div class="articles-box">
            <ul class="li">
                @foreach($artdata6 as $art)
                    {{--                    @if($cate->c_id==$art->c_id)--}}
                    <li class="box-item">
                        <div class="item-icon"></div>
                        <div class="img-con item-image">
                            <a href="{{url('index/shop1')}}?j_id={{$art->j_id}}" title="{{$art->j_title}}" target="_blank"><img src="{{asset('uploads/'.$art->j_thumbnail)}}" width="130" height="180" alt="{{$art->j_title}}"></a>
                        </div>
                        <div class="item-title">
                            <h4> <a href="{{url('index/shop1')}}?j_id={{$art->j_id}}" title="{{$art->j_title}}" target="_blank">{{$art->j_title}}</a> </h4>
                        </div>
                    </li>
                    {{--                    @endif--}}
                @endforeach

            </ul>

        </div>
        {{ $artdata6->links() }}

    </div>

    <div class="w1200">
        <div class="h20"></div>
        <div class="bar-box" c_id="{{$cate7->c_id}}"> <span class="title"><a href="qikankj_1.html" title="{{$cate7->c_name}}" target="_blank">{{$cate7->c_name}}</a><span class="hot"></span></span>
            <div class="clear"></div>
        </div>
        <div class="articles-box">
            <ul class="li">
                @foreach($artdata7 as $art)
                    {{--                    @if($cate->c_id==$art->c_id)--}}
                    <li class="box-item">
                        <div class="item-icon"></div>
                        <div class="img-con item-image">
                            <a href="{{url('index/shop1')}}?j_id={{$art->j_id}}" title="{{$art->j_title}}" target="_blank"><img src="{{asset('uploads/'.$art->j_thumbnail)}}" width="130" height="180" alt="{{$art->j_title}}"></a>
                        </div>
                        <div class="item-title">
                            <h4> <a href="{{url('index/shop1')}}?j_id={{$art->j_id}}" title="{{$art->j_title}}" target="_blank">{{$art->j_title}}</a> </h4>
                        </div>
                    </li>
                    {{--                    @endif--}}
                @endforeach

            </ul>

        </div>
        {{ $artdata7->links() }}

    </div>

    <div class="w1200">
        <div class="h20"></div>
        <div class="bar-box" c_id="{{$cate8->c_id}}"> <span class="title"><a href="qikankj_1.html" title="{{$cate8->c_name}}" target="_blank">{{$cate8->c_name}}</a><span class="hot"></span></span>
            <div class="clear"></div>
        </div>
        <div class="articles-box">
            <ul class="li">
                @foreach($artdata8 as $art)
                    {{--                    @if($cate->c_id==$art->c_id)--}}
                    <li class="box-item">
                        <div class="item-icon"></div>
                        <div class="img-con item-image">
                            <a href="{{url('index/shop1')}}?j_id={{$art->j_id}}" title="{{$art->j_title}}" target="_blank"><img src="{{asset('uploads/'.$art->j_thumbnail)}}" width="130" height="180" alt="{{$art->j_title}}"></a>
                        </div>
                        <div class="item-title">
                            <h4> <a href="{{url('index/shop1')}}?j_id={{$art->j_id}}" title="{{$art->j_title}}" target="_blank">{{$art->j_title}}</a> </h4>
                        </div>
                    </li>
                    {{--                    @endif--}}
                @endforeach

            </ul>

        </div>
        {{ $artdata8->links() }}

    </div>

    <div class="w1200">
        <div class="h20"></div>
        <div class="bar-box" c_id="{{$cate9->c_id}}"> <span class="title"><a href="qikankj_1.html" title="{{$cate9->c_name}}" target="_blank">{{$cate9->c_name}}</a><span class="hot"></span></span>
            <div class="clear"></div>
        </div>
        <div class="articles-box">
            <ul class="li">
                @foreach($artdata9 as $art)
                    {{--                    @if($cate->c_id==$art->c_id)--}}
                    <li class="box-item">
                        <div class="item-icon"></div>
                        <div class="img-con item-image">
                            <a href="{{url('index/shop1')}}?j_id={{$art->j_id}}" title="{{$art->j_title}}" target="_blank"><img src="{{asset('uploads/'.$art->j_thumbnail)}}" width="130" height="180" alt="{{$art->j_title}}"></a>
                        </div>
                        <div class="item-title">
                            <h4> <a href="{{url('index/shop1')}}?j_id={{$art->j_id}}" title="{{$art->j_title}}" target="_blank">{{$art->j_title}}</a> </h4>
                        </div>
                    </li>
                    {{--                    @endif--}}
                @endforeach

            </ul>

        </div>
        {{ $artdata9->links() }}

    </div>

    <div class="w1200">
        <div class="h20"></div>
        <div class="bar-box" c_id="{{$cate10->c_id}}"> <span class="title"><a href="qikankj_1.html" title="{{$cate10->c_name}}" target="_blank">{{$cate10->c_name}}</a><span class="hot"></span></span>
            <div class="clear"></div>
        </div>
        <div class="articles-box">
            <ul class="li">
                @foreach($artdata10 as $art)
                    {{--                    @if($cate->c_id==$art->c_id)--}}
                    <li class="box-item">
                        <div class="item-icon"></div>
                        <div class="img-con item-image">
                            <a href="{{url('index/zhuxq')}}/{{$art->a_id}}/{{$art->c_id}}" title="{{$art->a_title}}" target="_blank"><img src="{{asset('uploads/'.$art->a_photos)}}" width="130" height="180" alt="{{$art->a_title}}"></a>
                        </div>
                        <div class="item-title">
                            <h4> <a href="{{url('index/zhuxq')}}/{{$art->a_id}}/{{$art->c_id}}" title="{{$art->a_title}}" target="_blank">{{$art->a_title}}</a> </h4>
                        </div>
                    </li>
                    {{--                    @endif--}}
                @endforeach

            </ul>

        </div>
        {{ $artdata10->links() }}

    </div>

    <div class="w1200">
        <div class="h20"></div>
        <div class="bar-box" c_id="{{$cate11->c_id}}"> <span class="title"><a href="qikankj_1.html" title="{{$cate11->c_name}}" target="_blank">{{$cate11->c_name}}</a><span class="hot"></span></span>
            <div class="clear"></div>
        </div>
        <div class="articles-box">
            <ul class="li">
                @foreach($artdata11 as $art)
                    {{--                    @if($cate->c_id==$art->c_id)--}}
                    <li class="box-item">
                        <div class="item-icon"></div>
                        <div class="img-con item-image">
                            <a href="{{url('keti/anlinext')}}/{{$art->a_id}}/{{$art->c_id}}" title="{{$art->a_title}}" target="_blank"><img src="{{asset('uploads/'.$art->a_photos)}}" width="130" height="180" alt="{{$art->a_title}}"></a>
                        </div>
                        <div class="item-title">
                            <h4> <a href="{{url('keti/anlinext')}}/{{$art->a_id}}/{{$art->c_id}}" title="{{$art->a_title}}" target="_blank">{{$art->a_title}}</a> </h4>
                        </div>
                    </li>
                    {{--                    @endif--}}
                @endforeach

            </ul>

        </div>
        {{ $artdata11->links() }}

    </div>

    <div class="w1200">
        <div class="h20"></div>
        <div class="bar-box" c_id="{{$cate12->c_id}}"> <span class="title"><a href="qikankj_1.html" title="{{$cate12->c_name}}" target="_blank">{{$cate12->c_name}}</a><span class="hot"></span></span>
            <div class="clear"></div>
        </div>
        <div class="articles-box">
            <ul class="li">
                @foreach($artdata12 as $art)
                    {{--                    @if($cate->c_id==$art->c_id)--}}
                    <li class="box-item">
                        <div class="item-icon"></div>
                        <div class="img-con item-image">
                            <a href="{{url('zhuanli/next')}}/{{$art->a_id}}/{{$art->c_id}}" title="{{$art->a_title}}" target="_blank"><img src="{{asset('uploads/'.$art->a_photos)}}" width="130" height="180" alt="{{$art->a_title}}"></a>
                        </div>
                        <div class="item-title">
                            <h4> <a href="{{url('zhuanli/next')}}/{{$art->a_id}}/{{$art->c_id}}" title="{{$art->a_title}}" target="_blank">{{$art->a_title}}</a> </h4>
                        </div>
                    </li>
                    {{--                    @endif--}}
                @endforeach

            </ul>

        </div>
        {{ $artdata12->links() }}

    </div>

		<div class="index-menu">
			<ul>

			</ul>
		</div>

		<!--列表 -->
		<!--服务与支付 -->
		<div class="w1200">
			<div class="h20"></div>
			<div class="bar-border-box">
				<div class="box-border">
					<span class="title">服务与支付</span>
				</div>
			</div>
			<div class="work-box">
				<ul class="after-clear">
					<li>
						<a href="{{url('index/fblc')}}" target="_blank">
							<div class="item-con">
								<h2>论文发表</h2>
								<p>论文发表，1-3天快速审稿，1-3月见刊发表！</p>
								<p class="more">查看更多&gt;</p>
							</div>
							<i class="img1"></i>
						</a>
					</li>
					<li>
						<a href="jiance.html" target="_blank">
							<div class="item-con">
								<h2>原创检测</h2>
								<p>文章原创检测，精确、权威、快速，仅需50元起。</p>
								<p class="more">查看更多&gt;</p>
							</div>
							<i class="img4"></i>
						</a>
					</li>
					<li>
						<a href="xiezuo.html" target="_blank">
							<div class="item-con">
								<h2>编辑指导</h2>
								<p>文章编辑老师亲自指导修改，客户满意为止！</p>
								<p class="more">查看更多&gt;</p>
							</div>
							<i class="img2"></i>
						</a>
					</li>
				</ul>

			</div>
			<!--联系方式-->
			<div class="lx-ours">
				联系电话：13520747482<span>联系邮箱：447942870@qq.com</span>
			</div>
		</div>
		<!--服务与支付 -->

{{--        <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>--}}
        <script>

            // $(document).on('click','.btn_srh',function(){
            //     // alert(1)
            //     var cate =$('.selected').val();
            //     alert(cate);
                // var keyboard = $('.inp_srh').val();
                // $.ajax({
                //     url:"/index/serch",
                //     data:{cate:cate,keyboard:keyboard},
                //     dataType:'json',
                //     success:function(res){
                //         console.log(res)
                //        if(res.code==2){
                //            alert(res.massage);
                //        };
                //         var data = res.data;
                //         var li = '';
                //        for(var i in data){
                //            console.log(data[i]);
                //            li += '<li><!--点进去是新闻详情，格式和论文中心详情页布局相同-->\
                //                <h4 class="title"><a href="lunwen-zxnext.html" title="'+data[i].j_title+'" target="_blank">'+data[i].j_title+'</a></h4>\
                //                <p class="authors">关键词：'+data[i].a_keywords+'</p>\
                //                <p class="description">'+data[i].a_contetn+'</p></li>';
                //            $('.ul').html(li);
                //
                //        }
                //     }
                // });
            // });
         //
         // $('.pagination').children('li').click(function(){
         //     var page = $(this).text();
         //     var c_id = $('.pagination').children('li').attr('c_id');
         //     $.ajax({
         //            url:"/index/page",
         //         method:"get",
         //         data:{page:page,c_id:c_id},
         //         dataType:'json',
         //         success:function(res){
         //                var list = res.date;
         //                var str = '';
         //                $(list).each(function(k,v){
         //                    str +='<li class="box-item">\
         //                        <div class="item-icon"></div>\
         //                        <div class="img-con item-image">\
         //                      <a href="shop.html" title="'+v.j_title+'" target="_blank"><img src="\/uploads\/"'+v.j_thumbnail+' width="130" height="180" alt="'+v.j_title+'"></a>\
         //                       </div>\
         //                      <div class="item-title">\
         //                       <h4> <a href="shop.html" title="'+v.j_title+'" target="_blank">'+v.j_title+'</a> </h4>\
         //                       </div>\
         //                        <div class="item-info tc">国家级期刊</div>\
         //                        <div class="item-info tc"><span class="red">( 季刊 )</span><span class="red">1-3个月</span>审稿</div>\
         //                        </li>';
         //                });
         //                $('.li').html(str);
         //         }
         //     });
         // });
        </script>

@endsection
