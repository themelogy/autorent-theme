<aside class="sidebar-right">
    @blogCategories()
    @blogLatestPosts(4, 'sidebar-latest-posts')
    @blogArchive()
    @include('blog::widgets.share')
    @isset($post)
        @blogTags($post, 5)
    @endisset
    @isset($posts)
        @blogTags($posts, 2)
    @endisset
</aside>