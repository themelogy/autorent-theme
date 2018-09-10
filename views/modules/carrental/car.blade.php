@extends('layouts.master')

@section('content')
    @component('partials.components.title', ['breadcrumbs'=>'carrental.car'])
        <h1 class="title">{{ trans('themes::carrental.titles.car', ['car'=>$car->fullname]) }}</h1>
    @endcomponent

    <div class="container">
        <div class="booking-item-details">
            <div class="gap"></div>
            <div class="row">
                <div class="col-md-8">
                    <h3 class="lh1em pull-left">{!! $car->brand->present()->logo(50).' '.$car->fullname !!}</h3>
                    <span class="label label-default pull-right">{{ $car->carclass->name }}</span>
                    <div class="clearfix"></div>
                    <div class="fotorama" data-allowfullscreen="true" data-nav="thumbs">
                        @foreach($car->present()->images(800,null,'resize',80) as $image)
                            <img src="{{ $image }}" alt="{{ trans('themes::carrental.titles.car', ['car'=>$car->fullname]) }}" title="{{ trans('themes::carrental.titles.car', ['car'=>$car->fullname]) }}" />
                        @endforeach
                    </div>
                    <div class="row row-wrap">
                        <div class="gap"></div>
                        <div class="col-md-12">
                            <ul class="booking-item-features detail">
                                <li><i class="fa fa-male"></i><span class="booking-item-feature-title">x {{ $car->series->person }}</span></li>
                                <li><i class="im im-car-doors"></i><span class="booking-item-feature-title">x {{ $car->present()->body_type }}</span></li>
                                <li><i class="fa fa-briefcase"></i><span class="booking-item-feature-title">x {{ $car->series->baggage }}</span></li>
                                <li><i class="im im-shift-auto"></i><span class="booking-item-feature-title">{{ $car->present()->transmission }}</span></li>
                                <li><i class="im im-diesel"></i><span class="booking-item-feature-title">{{ $car->present()->fuel_type }}</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="booking-item-dates-change">
                        @if($errors->count()>0)
                        <div class="alert alert-danger">
                            <button class="close" type="button" data-dismiss="alert"><span aria-hidden="true">×</span>
                            </button>
                            <p class="text-small">{{ $errors->first() }}</p>
                        </div>
                        @endif
                        @include('carrental::partials.reservation-date')
                    </div>
                </div>
            </div>
            <div class="gap"></div>
        </div>
        <div class="gap gap-small"></div>
    </div>
@endsection