@extends('public.header')
@section('css')
/index.css
@stop
    <section id="header">
        <a href="/">Blog</a>
    </section>
    <section id="content-wrapper">
        @foreach($articles as $article)
        <section class="article">
            <a href="/{{ $article['article_id'] }}" class="title">
                {{ $article['article_title'] }}
            </a>
            <span>{{ date("Y年m月d日",$article['article_time']) }}
            10条评论

            {{ $article['article_click'] }}次点击</span>
            <section class="content">
                {!! ($article['article_content']) !!}
            </section>
            <a href="/{{ $article['article_id'] }}" class="readmore">Read more...</a>
        </section>
        @endforeach
    </section>
</body>
</html>