<?php

// Home
Breadcrumbs::for('home', function ($trail) {
    $trail->push('Home', route('home'));
});
// Home > Blog
Breadcrumbs::for('blog', function ($trail) {
    $trail->parent('home');
    $trail->push('Blog', route('blog.index'));
});
// Home > Blog > <Post>
Breadcrumbs::for('blog.post', function ($trail, $post) {
    $trail->parent('home');
    $trail->push('Blog', route('blog.index'));
    $trail->push($post->title, route('blog.index').'/'.$post->slug, ['image' =>  url($post->getFirstMediaUrl('image'))]);
});
