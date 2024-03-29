{!! seo_helper()->render() !!}
<link rel="shortcut icon" href="{{ Theme::url('img/favicon.png') }}" type="image/png">

<script async>
    WebFontConfig = { google: {
            families: ['Roboto:400,300,100,500,700:latin-ext', 'Open Sans:400italic,400,300,600:latin-ext', 'Roboto Condensed:400,300,100,500,700:latin-ext'
            ]
        }};
    (function(d) {
        var wf = d.createElement('script'), s = d.scripts[0];
        wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
        wf.async = true;
        s.parentNode.insertBefore(wf, s);
    })(document);
</script>

<!-- /GOOGLE FONTS -->
<link media="all" rel="stylesheet" type="text/css" href="{{ mix('/themes/autorent/css/bootstrap.css') }}">
{!! Theme::style('css/font-awesome.css') !!}
{!! Theme::style('css/icomoon.css') !!}
<link media="all" rel="stylesheet" type="text/css" href="{{ mix('/themes/autorent/css/styles.css') }}">
{!! Theme::script('js/modernizr.js') !!}