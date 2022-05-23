@stack('css-stack')
{!! Asset::css() !!}
@stack('css-inline')
{!! Theme::script('js/jquery.js') !!}
{!! Theme::script('js/bootstrap.js') !!}
{!! Theme::script('js/slimmenu.js') !!}
{!! Theme::script('js/bootstrap-datepicker.js') !!}
{!! Theme::script('js/datepicker-locales/bootstrap-datepicker.tr.min.js') !!}
{!! Theme::script('js/bootstrap-timepicker.js') !!}
{!! Theme::script('js/dropit.js') !!}
{!! Theme::script('js/ionrangeslider.js') !!}
{!! Theme::script('js/icheck.js') !!}
{!! Theme::script('js/fotorama.js') !!}
{!! Theme::script('js/typeahead.js') !!}
{!! Theme::script('js/card-payment.js') !!}
{!! Theme::script('js/magnific.js') !!}
{!! Theme::script('js/owl-carousel.js') !!}
{!! Theme::script('js/fitvids.js') !!}
{!! Theme::script('js/tweet.js') !!}
{!! Theme::script('js/countdown.js') !!}
{!! Theme::script('js/gridrotator.js') !!}
@stack('js-stack')
{!! Asset::js() !!}
<script src="{{ mix('/themes/autorent/js/custom.min.js') }}"></script>
@stack('js-inline')

@include('partials.analytics')