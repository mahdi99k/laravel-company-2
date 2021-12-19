@extends('admin.layouts.master')

@section('title' , 'panel-create-product')



@section('content')

    <section class="row m-0">

        {{--@if ($errors->any())
             <sectio class="col-8 offset-2 alert bg_danger_me text-white">
                 @foreach($errors->all() as $item)
                     <h4 class="text-center p-2">{{ $errors }}</h4>
                 @endforeach
             </sectio>
         @endif--}}

        @if (session('create'))
            <section class="col-8 offset-2 alert alert-success mt-4">
                <h4 class="text-center">{{ session('create') }}</h4>
            </section>
        @endif

        <section class="col-8 offset-2 mt-4 p-5 bg-secondary text-capitalize text-white">

            {!! Form::open(['route' => 'product.store' , 'method' => 'post' , 'files' => true]) !!}

            <section class="form-group">
                {!! Form::label('title' , 'Title' , ['style' => 'font-size:17px']) !!}
                {!! Form::text('title' , old('title') , ['class' => 'form-control mb-4' , 'style' => '2px inset lightgray',
                    'placeholder' => 'Please Enter Title Product ...']) !!}
                @error('title')
                <p class="text-center alert alert-danger p-1">{{ $message }}</p>
                @enderror
            </section>


            <section class="form-group">
                {!! Form::label('image' , 'Image' , ['style' => 'font-size:17px']) !!}
                {!! Form::file('image' , ['class' => 'form-control mb-4' , 'style' => '2px inset lightgray']) !!}
                @error('image')
                <p class="text-center alert alert-danger p-1">{{ $message }}</p>
                @enderror
            </section>


            <section class="form-group">
                {!! Form::label('alt' , 'Alt-image' , ['style' => 'font-size:17px']) !!}
                {!! Form::text('alt' , old('alt') , ['class' => 'form-control mb-4' , 'style' => '2px inset lightgray',
                    'placeholder' => 'Please Enter Alt image Product ...']) !!}
                @error('alt')
                <p class="text-center alert alert-danger p-1">{{ $message }}</p>
                @enderror
            </section>

            <section class="form-group">
                {!! form::label('body' , 'Body' , ['style' => 'font-size:17px']) !!}
                {!! Form::textarea('body' , old('body') , ['class' => 'form-control mb-4' , 'style' => '2px inset lightgray:
                    resize:none;height:250px' , 'placeholder' => 'Please Enter Body Product ...']) !!}
                @error('body')
                <p class="text-center alert alert-danger p-1">{{ $message }}</p>
                @enderror
            </section>


            <section class="form-group">
                {!! Form::label('webTitle' , 'Web-Title' , ['style' => 'font-size:17px']) !!}
                {!! Form::text('webTitle' , old('webTitle') , ['class' => 'form-control mb-4' , 'style' => '2px inset lightgray',
                    'placeholder' => 'Please Enter Web Title Seo Product ...']) !!}
                @error('webTitle')
                <p class="text-center alert alert-danger p-1">{{ $message }}</p>
                @enderror
            </section>


            <section class="form-group">
                {!! form::label('keywords' , 'Keywords' , ['style' => 'font-size:17px']) !!}
                {!! Form::textarea('keywords' , old('keywords') , ['class' => 'form-control mb-4' , 'style' => '2px inset lightgray:
                    resize:none;height:250px' , 'placeholder' => 'Please Enter Keywords Seo Product ...']) !!}
                @error('keywords')
                <p class="text-center alert alert-danger p-1">{{ $message }}</p>
                @enderror
            </section>


            <section class="form-group">
                {!! form::label('description' , 'Description' , ['style' => 'font-size:17px']) !!}
                {!! Form::textarea('description' , old('description') , ['class' => 'form-control mb-4' , 'style' => '2px inset lightgray:
                    resize:none;height:250px' , 'placeholder' => 'Please Enter Description Seo Product ...']) !!}
                @error('description')
                <p class="text-center alert alert-danger p-1">{{ $message }}</p>
                @enderror
            </section>


            <section class="form-group">
                {!! Form::submit('create' , ['class' => 'btn btn-success btn-block mt-5 text-capitalize']) !!}
            </section>

            {!! Form::close() !!}

            <a href="{{route('product.index')}}" class="btn btn-primary text-capitalize">go to panel product website</a>


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






