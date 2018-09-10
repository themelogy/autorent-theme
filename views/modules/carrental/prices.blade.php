@extends('layouts.master')

@section('content')
    @component('partials.components.title', ['breadcrumbs'=>'carrental.car'])
        <h1 class="title">{{ trans('themes::carrental.titles.car', ['car'=>$car->fullname]) }}</h1>
    @endcomponent

    <div class="container">

    </div>
@endsection