<html><head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>查询结果</title>
    <style type="text/css">
        /* reset */
        html,
        body,
        div,
        span,
        applet,
        object,
        iframe,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        blockquote,
        pre,
        a,
        abbr,
        acronym,
        address,
        big,
        cite,
        code,
        del,
        dfn,
        em,
        img,
        ins,
        kbd,
        q,
        s,
        samp,
        small,
        strike,
        strong,
        sub,
        sup,
        tt,
        var,
        b,
        u,
        i,
        center,
        dl,
        dt,
        dd,
        ol,
        ul,
        li,
        fieldset,
        form,
        label,
        legend,
        table,
        caption,
        tbody,
        tfoot,
        thead,
        tr,
        th,
        td,
        article,
        aside,
        canvas,
        details,
        embed,
        figure,
        figcaption,
        footer,
        header,
        hgroup,
        menu,
        nav,
        output,
        ruby,
        section,
        summary,
        time,
        mark,
        audio,
        video {
            margin: 0;
            padding: 0;
            border: 0;
            font-size: 100%;
            font: inherit;
            vertical-align: baseline;
        }

        article,
        aside,
        details,
        figcaption,
        figure,
        footer,
        header,
        hgroup,
        menu,
        nav,
        section {
            display: block;
        }

        body {
            line-height: 1;
        }

        ol,
        ul {
            list-style: none;
        }

        blockquote,
        q {
            quotes: none;
        }

        blockquote:before,
        blockquote:after,
        q:before,
        q:after {
            content: '';
            content: none;
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
        }

        body,
        input,
        textarea,
        select,
        button {
            font: 12px/1.6em '\5FAE\8F6F\96C5\9ED1', arial, '\5b8b\4f53';
            color: #232323;
            outline: 0;
        }

        a {
            color: #232323;
        }

        .cb10 {
            height: 20px;
        }

        /* m-tb */
        .m-tb {
            width: 100%;
        }

        .m-tb th {
            background-color: #CCCCCC;
            border: 1px solid #AAA;
            padding: 8px;
        }

        .m-tb td {
            background-color: #EFEFEF;
            border: 1px solid #AAA;
            padding: 8px;
        }

        .m-tb2 {
            width: 100%;
        }

        .m-tb2 th {
            background-color: #dedede;
            border: 1px solid #666;
            padding: 8px;
        }

        .m-tb2 td {
            background-color: #ffffff;
            border: 1px solid #666;
            padding: 8px;
        }

        .m-tb3 {
            width: 100%;
        }

        .m-tb3 th {
            background-color: #c3dde0;
            border: 1px solid #a9c6c9;
            padding: 8px;
        }

        .m-tb3 td {
            background-color: #d4e3e5;
            border: 1px solid #a9c6c9;
            padding: 8px;
        }
    </style>
</head>

<body style="width:1200px; margin:0 auto;">
<div class="cb10"></div>
<table class="m-tb">
    <tbody><tr>
        <th>稿件编号</th>
        <th>处理进度</th>
        <th>投稿题目</th>
        <th>投稿人姓名</th>
        <th>刊物名称</th>
        <th>投稿时间</th>
    </tr>
    @foreach($data as $d)
    <tr>
        <td>{{$d->a_gjbh}}</td>
        <td>@if($d->status==1) 已通过 @else 审核中 @endif</td>
        <td>{{$d->m_title}}</td>
        <td>{{$d->a_name}}</td>
        <td>{{$d->p_name}}</td>
        <td>{{$d->upload_time}}</td>
    </tr>
        @endforeach
    </tbody></table>
<a href="{{url('index/gjcx')}}" style="font-size:16px;">返回上一页</a>

</body></html>
