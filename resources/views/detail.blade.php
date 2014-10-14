@extends('public.header')
@section('css')
    /detail.css
@stop
    <section id="header">
        <a href="/">Blog</a>
        <span>>&nbsp;&nbsp;Detail</span>
    </section>
    <section id="content-wrapper">
        <section class="article">
            <a href="#" class="title">关于词频统计</a>
            <span>{{ date("Y年m月d日",$article['article_time']) }}
                {{ $article['article_click'] }}次点击
            </span>
            <a href="#" class="keyword">算法</a>
            <a href="#" class="keyword">数据结构</a>
            <section class="content">
            {!! $article['article_content'] !!}
            </section>
        </section>
        <!-- 多说评论框 start -->
        <div    class="ds-thread"
                data-thread-key="BOOLEAN93.COM/$article['article_id']"
                data-title="{{ $article['article_content'] }}"
                data-url="请替换成文章的网址">

        </div>
        <!-- 多说评论框 end -->
    </section>
@include('public.Duoshuo')

</body>
</html>