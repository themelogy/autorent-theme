<header id="main-header">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @include('partials.header.top-user')
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="navbar">
            <div class="navbar-header">
                <a class="logo" href="{{ LaravelLocalization::getLocalizedURL(locale(), route('homepage')) }}">
                    <img src="{{ Theme::url('img/logo/logo-r.svg') }}" alt="{{ setting('theme::company-name') }}" title="{{ setting('theme::company-name') }}" />
                </a>
            </div>
            <div class="nav">
                {!! Menu::render('header', \Themes\Autorent\Presenter\HeaderMenuPresenter::class) !!}
            </div>
        </div>
    </div>
</header>