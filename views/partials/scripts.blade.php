@stack('css-stack')
{!! Asset::css() !!}
@stack('css-inline')
<script src="{{ mix('/themes/autorent/js/jquery.min.js') }}" defer></script>
<script src="{{ mix('/themes/autorent/js/vendor.min.js') }}" defer></script>
@stack('js-stack')
{!! Asset::js() !!}
<script src="{{ mix('/themes/autorent/js/custom.min.js') }}" defer></script>
@stack('js-inline')

@include('partials.analytics')