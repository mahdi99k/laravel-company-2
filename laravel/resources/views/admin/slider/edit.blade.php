@extends('admin.layouts.master')

@section('title' , 'panel-update-slider')



@section('content')

    <section class="row m-0">

        {{--@if ($errors->any())
             <sectio class="col-8 offset-2 alert bg_danger_me text-white">
                 @foreach($errors->all() as $item)
                     <h4 class="text-center p-2">{{ $errors }}</h4>
                 @endforeach
             </sectio>
         @endif--}}

        {{--@if (session('create'))
             <section class="col-8 offset-2 alert alert-success mt-4">
                 <h4 class="text-center">{{ session('create') }}</h4>
             </section>
         @endif--}}

        <section class="col-8 offset-2 mt-4 p-5 bg-secondary text-capitalize text-white">

            {!! Form::model($slider , ['route' => ['slider.update' , $slider->id] , 'method' => 'put' , 'files' => true]) !!}

            <section class="form-group">
                {!! Form::label('title' , 'Title' , ['style' => 'font-size:17px']) !!}
                {!! Form::text('title' , old('title') , ['class' => 'form-control mb-4' , 'style' => '2px inset lightgray',
                    'placeholder' => 'Please Enter Title Slider ...']) !!}
                @error('title')
                <p class="text-center alert alert-danger p-1">{{ $message }}</p>
                @enderror
            </section>


            <section class="form-group">
                {!! Form::label('caption' , 'Caption' , ['style' => 'font-size:17px']) !!}
                {!! Form::text('caption' , old('caption') , ['class' => 'form-control mb-4' , 'style' => '2px inset lightgray',
                    'placeholder' => 'Please Enter Caption Slider ...']) !!}
                @error('caption')
                <p class="text-center alert alert-danger p-1">{{ $message }}</p>
                @enderror
            </section>


            <section class="form-group">
                {!! Form::label('alt' , 'Alt-image' , ['style' => 'font-size:17px']) !!}
                {!! Form::text('alt' , old('alt') , ['class' => 'form-control mb-4' , 'style' => '2px inset lightgray',
                    'placeholder' => 'Please Enter Alt Image Slider ...']) !!}
                @error('alt')
                <p class="text-center alert alert-danger p-1">{{ $message }}</p>
                @enderror
            </section>


            <section class="form-group">
                {!! Form::label('image' , 'Image' , ['style' => 'font-size:17px']) !!}
                {!! Form::file('image' , ['class' => 'form-control mb-3' , 'style' => '2px inset lightgray']) !!}
                <p class="text-center"><img src="{{ asset("images/slider/" . $slider->image) }}" width="170" height="100"></p>
                @error('image')
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






