<div class="blog-page area-padding">
    <div class="container">
        <div class="row">

            @include('front.partials.post.recent' , ['recent' => $recentPost])

            @include('front.partials.post.post' , ['post' => $post])


        </div>
    </div>
</div>



@section('seo')
    {{--  @forelse ($seo as $item)  --}}
    @if (!empty($post))  {{-- تم مقدار باید سیو بشه --}}

    <title>{{ $post->title }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="{{ $post->keywords }}" name="keywords">
    <meta content="{{ $post->description }}" name="description">
    <meta name="author" content="{{ $post->author }}">
    <meta name="robots" content="index ,follow"> {{-- code me --}}
    <meta property="og:title" content="{{ $post->subject }}"/> {{-- meta telegram --}}
    <meta property="og:site_name" content="{{ $post->title }}"/>
    <meta property="og:description" content="{{ $post->description }}"/>
    <meta property="og:keywords" content="{{ $post->keywords }}"/>
    <meta property="og:image" content="{{ asset("image/post/" . $post->image) }}"/>

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

@endsection









