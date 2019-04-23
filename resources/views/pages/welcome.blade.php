@extends('layouts.default')

@section('meta_title', 'Welcome')
@section('meta_description', '')

@section('content')
	<div class="container text-white text-center font-serif font-bold leading-none">
		<div class="text-8xl">TOOL</div>
		<div class="text-6xl">420 + 69 = 666</div>
		<div class="flex flex-wrap relative z-10">
			<div class="w-1/4">
				<img src="{{asset('images/666.jpg')}}" alt="">
			</div>
			<div class="w-1/4 mx-auto">
				<img src="{{asset('images/galaxie-brane.jpg')}}" alt="">
			</div>
		</div>
		<div class="flex flex-wrap justify-between items-end -mt-64">
			<div class="w-3/5">
				<img src="{{asset('images/alien-smoking.jpg')}}" alt="">
			</div>
			<div class="w-1/3">
				<img src="{{asset('images/dragon.jpg')}}" alt="">
			</div>
		</div>
	</div>
@endsection