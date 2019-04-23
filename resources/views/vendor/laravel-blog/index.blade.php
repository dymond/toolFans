@extends('layouts.default')

@section('meta_title', 'Blog')
@section('meta_description', '')

@section('content')


    <h1 class="text-center">Blog</h1>

    <div class="container">
        <div class="flex flex-wrap -mx-3">

            @foreach($posts as $post)
                <div class="w-full sm:w-1/2 md:w-1/3 flex flex-col px-3 mb-8">

                    <a href="{{url( config('laravel-blog.prefix').'/'. $post->slug)}}"
                       class="flex flex-col justify-between no-underline bg-white rounded shadow hover:shadow-lg overflow-hidden h-full">

                        @if( count($post->getMedia('image')))
                        <div class="h-48 bg-cover bg-center"
                             style="background-image: url('{{$post->getFirstMedia('image')->getUrl('thumb')}}');"></div>
                        @endif
                        <h2 class="text-2xl text-center px-3">{{$post->title}}</h2>
                        <p class="text-xs px-3 py-2 text-gray-500">
                            {{$post->excerpt}}
                        </p>
                        <p class="text-lg px-3 pb-2">Read More...</p>
                    </a>
                </div>
            @endforeach

        </div>


    <div class="w-full text-center py-4">
        <div class="inline-block rounded">
            {{$posts->links('components.pagination.default')}}
        </div>
    </div>


    </div>


@endsection


@push('meta')
    @if($posts->previousPageUrl())
        <link rel="prev" href="{{$posts->previousPageUrl()}}">
    @endif
    @if($posts->nextPageUrl())
        <link rel="next" href="{{$posts->nextPageUrl()}}">
    @endif
@endpush
