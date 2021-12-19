@extends('admin.layouts.master')

@section('title' , 'panel-create-seo')



@section('content')

    <section class="row m-0">

        @if (session('create'))
            <section class="col-8 offset-2 alert alert-success mt-4">
                <h4 class="text-center">{{session('create')}}</h4>
            </section>
        @endif

        <section class="col-8 offset-2 mt-4 p-5 bg-secondary text-capitalize text-white">

            {!! Form::open(['route' => 'panel.store' , 'method' => 'post']) !!}

            <section class="form-group">
                {!! Form::label('title' , 'Title' , ['style' => 'font-size:17px']) !!}
                {!! Form::text('title',null,['class' => 'form-control mb-4','style' => '2px inset lightgray','placeholder' => 'Please Enter Title Website ...']) !!}
                @error("title")
                <p class="text-center alert alert-danger p-1">{{ $message }}</p>
                @enderror
            </section>


            <section class="form-group">
                {!! Form::label('keywords' , 'Keywords' , ['style' => 'font-size:17px']) !!}
                {!! Form::textarea('keywords' , null , ['class' => 'form-control mb-4' , 'style' => 'inset 2px lightgray;resize:none;height:150px' ,
                    'placeholder' =>  'Please Enter Keywords Website ... ']) !!}
                @error("keywords")
                <p class="text-center alert alert-danger p-1">{{ $message }}</p>
                @enderror
            </section>


            <section class="form-group">
                {!! Form::label('description' , 'Description' , ['style' => 'font-size:17px']) !!}
                {!! Form::textarea('description' , null , ['class' => 'form-control mb-4' , 'style' => 'inset 2px lightgray;resize:none;height:150px' ,
                    'placeholder' =>  'Please Enter Description Website ... ']) !!}
                @error("description")
                <p class="text-center alert alert-danger p-1">{{ $message }}</p>
                @enderror
            </section>


            <section class="form-group">
                {!! Form::label('author' , 'Author' , ['style' => 'font-size:17px']) !!}
                {!! Form::text('author',null,['class' => 'form-control mb-4','style' => '2px inset lightgray','placeholder' => 'Please Enter Author Website ...']) !!}
                @error("author")
                <p class="text-center alert alert-danger p-1">{{ $message }}</p>
                @enderror
            </section>


            <section class="form-group">
                {!! Form::submit('create' , ['class' => 'btn btn-success btn-block mt-5 text-capitalize']) !!}
            </section>

            {!! Form::close() !!}

            <a href="{{route('panel.showData')}}" class="btn btn-info font-weight-bold text-capitalize">go to panel seo
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






