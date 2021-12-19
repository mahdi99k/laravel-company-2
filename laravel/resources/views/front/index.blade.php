@extends('front.layouts.master')


@section('content')

    <!-- =======  Start Main Header  and Menu   ======= -->
    @include('front.partials._menu')
    <!-- =======  End Main Header  and Menu     ======= -->


    <!-- =======   Start Slider Section   ======= -->
    @include('front.partials._slider'  , ['slider' => $slider])
    <!-- =======   End Slider Section     ======= -->

    <main id="main">

        <!-- ======= Start About Section ======= -->
        @include('front.partials._about'  , ['about' => $about]); {{-- HomeController  پاس بد یم --}}
    <!-- ======= End About Section   ======= -->


        <!-- ======= Start Product Section   ======= -->
        @include('front.partials._product' , ['product' => $product]); {{-- HomeController  پاس بد یم --}}
    <!-- ======= End Product Section     ======= -->


        <!-- =======  Start Team Section ======= -->
    @include('front.partials._team' , ['team' => $team])
    <!-- =======  End Team Section   ======= -->


        <!-- =======  Start Blog Section ======= -->
    @include('front.partials._blog' , ['post' => $post] )
    <!-- =======  End Blog Section   ======= -->


    </main><!-- End #main -->


    <!-- =======  Start Contact Area ======= -->
    @include('front.partials._contact')
    <!-- =======  End Contact Area   ======= -->


    <!-- =======  Start Footer   ======= -->
    @include('front.partials._footer')
    <!-- =======  End Footer     ======= -->

@endsection



{{-- برای هر صفجه سیو جداگونه --}}
@section('seo')
    @include('front.partials._seo' , ['seo' => $seo]) {{-- HomeController  پاس بدیم --}}
@endsection

















