@extends('admin.layouts.master')

@section('title' , 'panel-create-link')



@section('content')

    <section class="row m-0">

        {{--@if ($errors->any())               // if exist error go to foreach
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

            {!! Form::open(['route' => 'link.store' , 'method' => 'post']) !!}

            <section class="form-group">
                {!! Form::label('name' , 'Name' , ['style' => 'font-size:17px']) !!}
                {!! Form::text('name' , old('name') , ['class' => 'form-control mb-4' , 'style' => '2px inset lightgray',
                    'placeholder' => 'Please Enter Name Link ...']) !!}
                @error('name')
                <p class="text-center alert alert-danger p-1">{{ $message }}</p>
                @enderror
            </section>


            <section class="form-group">
                {!! Form::label('link' , 'Link' , ['style' => 'font-size:17px']) !!}
                {!! Form::text('link' , old('link') , ['class' => 'form-control mb-4' , 'style' => '2px inset lightgray',
                    'placeholder' => 'Please Enter Link Address ...']) !!}
                @error('link')
                <p class="text-center alert alert-danger p-1">{{ $message }}</p>
                @enderror
            </section>


            <section class="form-group">
                {!! Form::submit('create' , ['class' => 'btn btn-success btn-block mt-5 text-capitalize']) !!}
            </section>

            {!! Form::close() !!}

            <a href="{{ route("link.index") }}" class="btn btn-primary text-capitalize">go to panel link website</a>


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










