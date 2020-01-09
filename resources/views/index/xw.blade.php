@extends('layouts.zhuzuo')
@section('title', '新闻')
@section('content')
<!--著作 教材-->
<div class="zhuzuo-anli">
    <!--新闻  -->
    <div class="article">
        <h3 class="article-title">{{$data->a_title}}</h3>
        <div class="article-info">发布时间：{{$data->created_at}} <span class="info-date">2018-11-16</span> 当前文章地址：news_47.html</div>
        <div class="article-content">
            <p style="text-indent: 2em;">{!! $data->a_contetn !!}</p>
{{--            <p style="text-indent: 2em;">● 公司实力：我们已经取得国家新闻出版总署颁发的"出版物经营许可证"，全国合作客户上万人！出版各类著作2000余本！平均每年出版100多本书！<br></p>--}}
{{--            <p style="text-indent: 2em;">● 关于价格：一分钱一分货，本店所报价格是经过专业成本核算，价格公道！预付定金，查到书号再付尾款！<br></p>--}}
{{--            <p style="text-indent: 2em;">● 售后服务：一次合作，终身是朋友！书出版后并不意味着服务结束，书出版后有任何问题都有专人编辑一对一跟踪服务<br></p>--}}
{{--            <p style="text-indent: 2em;">● 出版领域：2019年学术专著挂名进行中，英语、体育、艺术、教育学、医学、建筑、工程、译著、外文专著等各类学科专著均可出版！<br></p>--}}
{{--            <p style="text-indent: 2em;">● 关于书号：正规百佳出版社、国家级出版社、省级出版社！单号书！第一版第一次印刷，绝非第二版或修订版！著、编著、主编、副主编、参编都有，所有书号CIP都上网，一书一号，拒绝忽悠人的丛书号！<br></p>--}}

        </div>
        <div class="box-page">
					<span>上一条：
                <a href="{{url('index/xwlist')}}/{{$down['a_id']}}/{{$up['c_id']}}" title="{{$down['a_title']}}">{{$down['a_title']}}</a>

                    </span>
            <span>下一条：
                <a href="{{url('index/xwlist')}}/{{$up['a_id']}}/{{$up['c_id']}}" title="{{$up['a_title']}}">{{$up['a_title']}}</a></span>
        </div>

    </div>


</div>
<!--著作 教材-->
@endsection
