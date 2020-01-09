@extends('layouts.app')
@section('title', '稿件查询')
@section('content')
<!--稿件查询-->
<div class="content" style="width:100%;height:222px;margin-top:60px;">
    <div class="cont">
        <form action="{{url('index/serch1')}}" method="post" onsubmit="return search_check(document.search_js1);">
            <input type="text" name="keyword" id="textfield" value="" placeholder="请输入稿件编号">
            <input type="image" src="{{asset('statics/images/anniu-1.jpg')}}" alt="Submit" id="anniu">
        </form>
    </div>
</div>
<!--稿件查询-->
@endsection
