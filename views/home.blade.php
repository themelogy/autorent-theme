@extends('layouts.master')

@section('content')

    @include('carrental::home.search')

    @include('block::widgets.slogans')

    @carFindByOptions('settings.show_home', 'home')

    @blogLatestPosts(10)

@endsection