@extends('layouts.master')

@section('content')
    @component('partials.components.title', ['breadcrumbs'=>'blog.show'])
        <h1 class="title">{{ $post->title }}</h1>
    @endcomponent
    <div class="container mt30">
        <div class="row">
            <div class="col-md-9">
                <div class="article post mb10">
                    <header class="post-header">
                        <img src="{{ $post->present()->firstImage(800,null,'resize',80) }}" alt="{{ $post->title }}" title="{{ $post->title }}" />
                    </header>
                    <div class="post-inner pb10">
                        <h4 class="post-title"><a class="text-darken" href="{{ $post->url }}">{{ $post->title }}</a></h4>
                        <ul class="post-meta">
                            <li><i class="fa fa-th-large"></i> <a href="{{ $post->category->url }}">{{ $post->category->name }}</a></li>
                            <li><i class="fa fa-calendar"></i> <a href="#">{{ $post->created_at->formatLocalized('%d %B %Y') }}</a></li>
                            <li><i class="fa fa-user"></i> <a href="#">{{ $post->author->fullname }}</a></li>
                        </ul>
                        <div class="post-desciption">
                            {!! $post->content !!}
                        </div>
                    </div>
                </div>
                @include('partials.components.share', ['theme'=>'plain'])
            </div>
            <div class="col-md-3">
                @include('blog::partials.sidebar')
            </div>
        </div>
    </div>
    <div class="gap"></div>
@endsection