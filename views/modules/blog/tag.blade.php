@extends('layouts.master')

@section('content')
    @component('partials.components.title', ['breadcrumbs'=>'blog.tag'])
        <h1 class="title">{{ trans('blog::post.title.tag', ['tag'=>$tag->name]) }}</h1>
    @endcomponent
    <div class="container mt30">
        <div class="row">
            <div class="col-md-9">
                @foreach($posts as $post)
                    @include('blog::partials._post')
                @endforeach
                @unset($post)
                {!! $posts->links('blog::pagination.default') !!}
            </div>
            <div class="col-md-3">
                @include('blog::partials.sidebar')
            </div>
        </div>
    </div>
    <div class="gap"></div>
@endsection