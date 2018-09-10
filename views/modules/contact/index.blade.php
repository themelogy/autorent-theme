@extends('layouts.master')

@section('content')
    <div class="container">
    </div>
    @include('contact::map')
    <div class="container">
        <div class="gap"></div>
        <div class="row">
            <div class="col-md-7">
                @include('contact::form')
            </div>
            <div class="col-md-4">
                <aside class="sidebar-right">
                    <ul class="address-list list">
                        <li>
                            <h5>E-Posta</h5><a href="mailto:{!! Html::email(setting('theme::email')) !!}">{!! Html::email(setting('theme::email')) !!}</a>
                        </li>
                        <li>
                            <h5>Telefon</h5>
                            <a href="tel:{{ setting('theme::phone') }}">{{ setting('theme::phone') }}</a><br/>
                            <a href="tel:{{ setting('theme::phone2') }}">{{ setting('theme::phone2') }}</a><br/>
                            <a href="tel:{{ setting('theme::mobile') }}">{{ setting('theme::mobile') }}</a>
                        </li>
                        <li>
                            <h5>Adres</h5><address><b>{{ setting('theme::company-name') }}</b><br />{!! setting('theme::address') !!}</address>
                        </li>
                    </ul>
                </aside>
            </div>
        </div>
        <div class="gap"></div>
    </div>
@endsection