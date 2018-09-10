<ul class="{{ $listClass ?? 'list list-horizontal list-space' }}">
    @foreach(['facebook' => 'fa-facebook-f', 'twitter'=>'fa-twitter', 'google'=>'fa-google-plus', 'whatsapp'=>'fa-whatsapp', 'linkedin'=>'fa-linkedin', 'youtube'=>'fa-youtube-play'] as $sk => $sv)
        @if(setting('theme::'.$sk) && $sk == 'whatsapp')
            <li>
                <a class="fa {{ $sv }} {{ $iconClass ?? '' }}" href="whatsapp:{{ setting('theme::'.$sk) }}"></a>
            </li>
        @elseif(setting('theme::'.$sk))
            <li>
                <a target="_blank" class="fa {{ $sv }} {{ $iconClass ?? '' }}" href="{{ setting('theme::'.$sk) }}"></a>
            </li>
        @endif
    @endforeach
</ul>