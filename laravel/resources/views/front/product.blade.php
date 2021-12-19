@extends('front.layouts.master')


@section('content')

    <!-- =======  Start Main Header  and Menu   ======= -->
    @include('front.partials._menu')
    <!-- =======  End Main Header  and Menu     ======= -->


    <main id="main">

        <!-- =======  Start parallax  ======= -->
    @include("front.partials._parallax")
    <!-- =======  End parallax    ======= -->


        <!-- ======= Start Product Section   ======= -->
    @include('front.partials._showProduct' , ['recent' => $recentProduct , 'single' => $singleProducr])
    <!-- ======= End Product Section     ======= -->

    </main><!-- End #main -->



    <!-- =======  Start Footer   ======= -->
    @include('front.partials._footer')
    <!-- =======  End Footer     ======= -->

@endsection


{{-- برای هر صفجه سیو جداگونه --}}
@section('seo')
@endsection


















