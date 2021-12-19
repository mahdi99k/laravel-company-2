@extends('admin.layouts.master')

@section('title' , 'panel-create-information')



@section('content')

    <section class="row m-0">

        {{--@if ($errors->any())               // if exist error go to foreach
             <sectio class="col-8 offset-2 alert bg_danger_me text-white">
                 @foreach($errors->all() as $item)
                     <h4 class="text-center p-2">{{ $errors }}</h4>
                 @endforeach
             </sectio>
         @endif--}}

        @if (session("create"))
            <section class="col-8 offset-2 alert alert-success mt-4">
                <h4 class="text-center">{{ session("create") }}</h4>
            </section>
        @endif

        <section class="col-8 offset-2 mt-4 p-5 bg-secondary text-capitalize text-white">

            {!! Form::open(['route' => 'info.store' , 'method' => 'post']) !!}

            <section class="form-group">
                {!! Form::label('phone' , 'Phone' , ['style' => 'font-size:17px']) !!}
                {!! Form::text('phone' , old('phone') , ['class' => 'form-control mb-4' , 'style' => '2px inset lightgray',
                    'placeholder' => 'Please Enter Phone Number Information ...']) !!}
                @error('phone')
                <p class="text-center alert alert-danger p-1">{{ $message }}</p>
                @enderror
            </section>


            <section class="form-group">
                {!! Form::label('email' , 'Email' , ['style' => 'font-size:17px']) !!}
                {!! Form::text('email' , old('email') , ['class' => 'form-control mb-4' , 'style' => '2px inset lightgray',
                    'placeholder' => 'Please Enter Email address Information ...']) !!}
                @error('email')
                <p class="text-center alert alert-danger p-1">{{ $message }}</p>
                @enderror
            </section>


            <section class="form-group">
                {!! Form::label('hours' , 'Working-Hours' , ['style' => 'font-size:17px']) !!}
                {!! Form::text('hours' , old('hours') , ['class' => 'form-control mb-4' , 'style' => '2px inset lightgray',
                    'placeholder' => 'Please Enter working Hours Information ...']) !!}
                @error('hours')
                <p class="text-center alert alert-danger p-1">{{ $message }}</p>
                @enderror
            </section>


            <section class="form-group">
                {!! Form::submit('create' , ['class' => 'btn btn-success btn-block mt-5 text-capitalize']) !!}
            </section>

            {!! Form::close() !!}

            <a href="{{ route("info.index") }}" class="btn btn-primary text-capitalize">go to panel information
                website</a>


        </section>
    </section>
    <br><br>

@endsection



@section('css')
    <link rel="stylesheet" href="{{asset("css/admin.css")}}">
    {{-- <style>
        body{
            background: url("{{asset('images/bg-panel/panel-3.jpg')}}") center center no-repeat fixed;background-size: cover;
        }
    </style>--}}
@endsection








