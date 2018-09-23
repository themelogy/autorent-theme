<h3>Marka</h3>
<ul class="list booking-filters-list">
    @foreach($brands as $brand)
    <li>
        {!! link_to_route('carrental.index', $brand->name, ['sort'=>request()->get('sort'),'dir'=>request()->get('dir'), 'category'=>request()->get('category'), 'brand'=>$brand->id]) !!}
        @if(request()->get('brand') == $brand->id)
            {!! link_to_route('carrental.index', '[x]', ['sort'=>request()->get('sort'),'dir'=>request()->get('dir'), 'category'=>request()->get('category')], ['style'=>'color:gray;']) !!}
        @endif
    </li>
    @endforeach
</ul>