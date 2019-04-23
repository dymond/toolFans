@extends('layouts.default')

@section('meta_title', 'Blog')
@section('meta_description', '')

@section('content')


 <div class="container">
<h1 class="text-center">{{$post->title}}</h1>
<div class="text-center text-gray-500 text-lg"  >{{$post->author}} - {{$post->publishedDate}}</div>
 </div>

 @if( count($post->getMedia('image')))
<div class="w-full h-80 overflow-hidden py-4">

        {{ $post->getFirstMedia('image')('responsive', [
        'class' => 'block relative inline-block',
         'alt' => $post->title,
         'style' => 'transform: translate(20, 0, 0);'
        ] ) }}

</div>
 @endif



<div class="blog-post container relative py-8">
    {!! demote_html_header_tags($post->body) !!}
</div>



@endsection
