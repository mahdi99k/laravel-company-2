@extends('admin.layouts.master')

@section('title' , 'panel-update-about')



@section('content')

    <section class="row m-0">

        {{--@if ($errors->any())
             <sectio class="col-8 offset-2 alert bg_danger_me text-white">
                 @foreach($errors->all() as $item)
                     <h4 class="text-center p-2">{{ $errors }}</h4>
                 @endforeach
             </sectio>
         @endif--}}


        <section class="col-8 offset-2 mt-4 p-5 bg-secondary text-capitalize text-white">

            {!! Form::model($about , ['route' => ['about.update' , $about->id] , 'method' => 'put' , 'files' => true]) !!}

            <section class="form-group">
                {!! Form::label('title' , 'Title' , ['style' => 'font-size:17px']) !!}
                {!! Form::text('title' , old('title') , ['class' => 'form-control mb-4' , 'style' => '2px inset lightgray',
                    'placeholder' => 'Please Enter Title About ...']) !!}
                @error('title')
                <p class="text-center alert alert-danger p-1">{{ $message }}</p>
                @enderror
            </section>


            <section class="form-group">
                {!! Form::label('image' , 'Image' , ['style' => 'font-size:17px']) !!}
                {!! Form::file('image' , ['class' => 'form-control mb-4' , 'style' => '2px inset lightgray']) !!}
                <p class="text-center"><img src="{{ asset("/images/about/" . $about->image) }}" width="170" height="100"></p>
                @error('image')
                <p class="text-center alert alert-danger p-1">{{ $message }}</p>
                @enderror
            </section>


            <section class="form-group">
                {!! Form::label('alt' , 'Alt-image' , ['style' => 'font-size:17px']) !!}
                {!! Form::text('alt' , old('alt') , ['class' => 'form-control mb-4' , 'style' => '2px inset lightgray',
                    'placeholder' => 'Please Enter Alt image About ...']) !!}
                @error('alt')
                <p class="text-center alert alert-danger p-1">{{ $message }}</p>
                @enderror
            </section>


            <section class="form-group">
                {!! Form::label('description' , 'Description' , ['style' => 'font-size:17px']) !!}
                {!! Form::textarea('description' , old('description'), ['class' => 'form-control mb-4' , 'style' => '2px inset lightgray;
                    resize:none; height:300px', 'placeholder' => 'Please Enter Description About ...']) !!}
                @error('description')
                <p class="text-center alert alert-danger p-1">{{ $message }}</p>
                @enderror
            </section>


            <section class="form-group">
                {!! Form::submit('update' , ['class' => 'btn btn-success btn-block mt-5 text-capitalize']) !!}
            </section>

            {!! Form::close() !!}

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







