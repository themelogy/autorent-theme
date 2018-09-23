<h3>Kategori</h3>
<ul class="list booking-filters-list">
    @foreach($classes as $class)
    <li>
        {!! link_to_route('carrental.index', $class->name, ['sort'=>request()->get('sort'),'dir'=>request()->get('dir'), 'category'=>$class->id, 'brand'=>request()->get('brand')]) !!}
        @if(request()->get('category') == $class->id)
            {!! link_to_route('carrental.index', '[x]', ['sort'=>request()->get('sort'),'dir'=>request()->get('dir'), 'brand'=>request()->get('brand')]) !!}
        @endif
    </li>
    @endforeach
</ul>