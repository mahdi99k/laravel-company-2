@extends('admin.layouts.master')

@section('title')
    {{ "panel-website" }}
@endsection




@section('content')

    <section class="row m-0">

        <section class="col-8 offset-2 mt-5 p-5 bg-secondary">
            <h1 class="text-success text-center">Welcome To Your Website !</h1>
            <h5 class="text-white text-center mt-4">welcome to your website and take data in the website , please click
                down button , thanks</h5>
            <a href="{{route('panel.create')}}" class="btn btn-info btn-block text-capitalize text-white mt-4">go to create seo
                website</a>
        </section>
    </section>

@endsection




@section('css')
    <link rel="stylesheet" href="{{asset("css/admin.css")}}">

    {{-- <style>
            body{
                background: url("{{asset('images/bg-panel/panel-3.jpg')}}") center center no-repeat fixed;background-size: cover;
            }
        </style>--}}
@endsection





