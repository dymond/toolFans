{{--<meta name="mobile-web-app-capable" content="yes">--}}
{{--<meta name="apple-mobile-web-app-capable" content="yes">--}}
{{--<meta name="apple-mobile-web-app-title" content="{{config('website.title')}}">--}}
@include('partials.dns-prefetch')
@include('partials.tracking')
<meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0 viewport-fit=cover">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="description" content="@yield('meta_description')"/>
<title>@yield('meta_title') | {{config('website.title')}}</title>
@hasSection('robots')
<meta name="robots" content="@yield('robots')"/>
@endif

<link rel="canonical" href="{{Request::url()}}"/>

@stack('meta')

{{--OPEN GRAPH--}}
<meta property="og:locale" content="en_US"/>
<meta property="og:type" content="@yield('og:type', 'website')"/>
@hasSection('og:title')
<meta property="og:title" content="@yield('og:title')"/>
@else
<meta property="og:title" content="@yield('meta_title' ) | {{config('website.title')}}"/>
@endif
<meta property="og:image" content="@yield('og:image',  asset('images/logo.png'))"/>
<meta property="og:url" content="{{Request::url()}}"/>
{{--END OPEN GRAPH--}}
<meta name="twitter:card" content="summary"/>
<meta name="twitter:description" content="@yield('meta_description')"/>
@hasSection('og:title')
<meta property="twitter:title" content="@yield('twitter:title')"/>
@else
<meta property="twitter:title" content="@yield('meta_title' ) | {{config('website.title')}}"/>
@endif
<meta name="twitter:image" content="@yield('twitter:image', asset('images/logo.png'))"/>

@render('SchemaWebsiteComponent')

@include('partials.favicons')

