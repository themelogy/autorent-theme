<div class="bg-darken blog-posts">
    <div class="container">
        <div class="gap"></div>
        <div class="owl-carousel" data-items="5">
            @foreach($posts as $post)
                <div>
                    <div class="thumb">
                        <header class="thumb-header">
                            <a class="hover-img curved" href="{{ $post->url }}">
                                <img class="img-responsive img-thumbnail img-rounded" src="{{ $post->present()->firstImage(186,142,'fit',80) }}" alt="{{ $post->title }}" title="{{ $post->title }}" /><i class="fa fa-plus box-icon-white box-icon-border hover-icon-top-right round"></i>
                            </a>
                        </header>
                        <div class="thumb-caption">
                            <h4 class="thumb-title" style="font-size: 0.9em;"><a href="{{ $post->url }}">{{ $post->title }}</a></h4>
                            <p class="thumb-desc">{{ str_sentence(strip_tags($post->intro), 1) }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="gap gap-small"></div>
    </div>
</div>