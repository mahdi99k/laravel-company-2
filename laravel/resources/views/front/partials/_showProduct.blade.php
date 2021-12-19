<div class="blog-page area-padding">
    <div class="container">
        <div class="row">

            @include('front.partials.product.recentProduct' , ['recent' => $recent])

            @include('front.partials.product.singleProduct' , ['single' => $single])


        </div>
    </div>
</div>



@section('seo')
    {{--  @forelse ($seo as $item)  --}}
    @if (!empty($single))

        <title>{{ $single->title_web }}</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="{{ $single->keywords }}" name="keywords">
        <meta content="{{ $single->description }}" name="description">
        {{--<meta name="author" content="{{ $single->author }}">--}}
        <meta name="robots" content="index ,follow"> {{-- code me --}}
        <meta property="og:title" content="{{ $single->title_web }}"/> {{-- meta telegram --}}
        <meta property="og:site_name" content="{{ $single->title_web }}"/>
        <meta property="og:description" content="{{ $single->description }}"/>
        <meta property="og:keywords" content="{{ $single->keywords }}"/>
        <meta property="og:image" content="{{ asset("image/product/" . $single->image) }}"/>

        {{--  @empty  --}}
    @else
        <title>eBusiness Bootstrap Template - Index</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">
        {{--<meta name="author" content="">--}}
        <meta name="robots" content="index ,follow"> {{-- code me --}}
        <meta property="og:title" content=""/> {{-- meta telegram --}}
        <meta property="og:site_name" content=""/>
        <meta property="og:description" content=""/>
        <meta property="og:keywords" content=""/>
        <meta property="og:image" content=""/>
    @endif
    {{-- @endforelse --}}

@endsection







