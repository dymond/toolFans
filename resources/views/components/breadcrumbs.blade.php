@if (count($breadcrumbs))

    <nav class="breadcrumb w-full" aria-label="breadcrumbs">
        <ul class="flex text-gray-500 container">
            @foreach ($breadcrumbs as $breadcrumb)

                @if ($loop->last)
                    @if ($breadcrumb->url)
                        <li><a  class="text-teal-600 font-bold" href="{{ $breadcrumb->url }}" aria-current="page">{{ $breadcrumb->title }}</a></li>
                    @else
                        <li><a  class="text-teal-600 font-bold" aria-current="page">{{ $breadcrumb->title }}</a></li>
                    @endif
                @else
                    @if ($breadcrumb->url)
                        <li><a class="text-gray-700" href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a></li>
                    @else
                        <li><a class="text-gray-700 font-bold">{{ $breadcrumb->title }}</a></li>
                    @endif
                    <span class="mx-2 text-gray-800">/</span>
                @endif

            @endforeach
        </ul>
    </nav>
@endif
