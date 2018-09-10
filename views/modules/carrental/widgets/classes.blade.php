<h3>Kategori</h3>
<ul class="list booking-filters-list">
    @foreach($classes as $class)
    <li>
        {!! link_to_route('carrental.index', $class->name, ['sort'=>request()->get('sort'),'dir'=>request()->get('dir'), 'category'=>$class->id]) !!}
    </li>
    @endforeach
</ul>