{{--  @forelse ($seo as $item)  --}}
@if (!empty($seo))

    <title>{{ $seo->title }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="{{ $seo->keywords }}" name="keywords">
    <meta content="{{ $seo->description }}" name="description">
    <meta name="author" content="{{ $seo->author }}">
    <meta name="robots" content="index ,follow"> {{-- code me --}}
    <meta property="og:title" content="{{ $seo->title }}"/> {{-- meta telegram --}}
    <meta property="og:site_name" content="{{ $seo->title }}"/>
    <meta property="og:description" content="{{ $seo->description }}"/>
    <meta property="og:keywords" content="{{ $seo->keywords }}"/>
    <meta property="og:image" content=""/>

    {{--  @empty  --}}
@else
    <title>eBusiness Bootstrap Template - Index</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <meta name="author" content="">
    <meta name="robots" content="index ,follow"> {{-- code me --}}
    <meta property="og:title" content=""/> {{-- meta telegram --}}
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta property="og:keywords" content=""/>
    <meta property="og:image" content=""/>
@endif
{{-- @endforelse --}}
