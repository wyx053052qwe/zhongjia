@extends('layouts.zhuzuo')
@section('title', '新闻资讯')
@section('content')
<!--著作 教材-->
<div class="zhuzuo-anli">
    <!--新闻  -->
    <div class="zhuzuo-title">新闻资讯</div>
    <div class="w1200">
        <div class="body-con-4-1">
            <!--1-->
            @foreach($data as $d)
            <dl class="body-con-4-list">
                <dt class="list-title"> <a href="{{url('index/xw')}}/{{$d->a_id}}/{{$d->c_id}}" target="_blank">{{$d->a_title}}？</a></dt>
                <dd class="list-content">
                    <p>{{trim(mb_substr($d->a_contetn, 0, 158, 'utf-8'),'<p></p>')}}...<a href="{{url('index/xw')}}/{{$d->a_id}}/{{$d->c_id}}" class="more">[详细]</a></p>
                </dd>
                <dd class="list-info">
                    <div class="list-date">2018-11-16</div>
                    <div class="list-author"></div>
                    <div class="clear"></div>
                </dd>
            </dl>
            @endforeach
            <!--1-->
{{--            <dl class="body-con-4-list">--}}
{{--                <dt class="list-title"> <a href="" target="_blank">自费出书怎么出？</a></dt>--}}
{{--                <dd class="list-content">--}}
{{--                    <p>根据多年来的行业经验，发现很多作者在过程中，总是存在着字数过多或者过少的情况发生，这样就导致了在选择期刊论文发表的过程中出现如下问题。发表论文字数过多会加重作者的经济负担，因为杂志社都是按照版面来收费的，字数过多会导致版面的增加，字数过少的话，论文质量太低，审稿过程中达不到杂志社的要求。鉴于此种情况...--}}
{{--                        <a href="{{url('index/xw')}}" class="more">[详细]</a>--}}
{{--                    </p>--}}
{{--                </dd>--}}
{{--                <dd class="list-info">--}}
{{--                    <div class="list-date">2018-11-16</div>--}}
{{--                    <div class="list-author"></div>--}}
{{--                    <div class="clear"></div>--}}
{{--                </dd>--}}
{{--            </dl>--}}
{{--            <!--1-->--}}
{{--            <dl class="body-con-4-list">--}}
{{--                <dt class="list-title"> <a href="" target="_blank">如何快速出版教材</a></dt>--}}
{{--                <dd class="list-content">--}}
{{--                    <p>一篇优秀的护理论文可以使作者具有突破性的护理观点、学术成果得以发表和传播，供他人分享借鉴、相互学习，有助于扩大作者在业界和学术界的知名度和影响力。每位想要晋升的护士，都需要先发表护理论文，将护理论文发表成功之后，才能够进行职称评审。那么我们该怎么快速发表护理论文呢？　　　　护理论文快速发表的步骤　　...--}}
{{--                        <a href="{{url('index/xw')}}" class="more">[详细]</a>--}}
{{--                    </p>--}}
{{--                </dd>--}}
{{--                <dd class="list-info">--}}
{{--                    <div class="list-date">2018-11-16</div>--}}
{{--                    <div class="list-author"></div>--}}
{{--                    <div class="clear"></div>--}}
{{--                </dd>--}}
{{--            </dl>--}}
        </div>
    </div>

</div>
<!--著作 教材-->
@endsection
