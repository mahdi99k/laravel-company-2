
@extends('admin.layouts.master')

@section('title' , 'panel-update-team')



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

            {!! Form::model($team , ['route' => ['team.update' , $team->id] , 'method' => 'put' , 'files' => true]) !!}


            <section class="form-group">
                {!! Form::label('alt' , 'Name-image' , ['style' => 'font-size:17px']) !!}
                {!! Form::text('alt' , old('alt') , ['class' => 'form-control mb-4' , 'style' => '2px inset lightgray',
                    'placeholder' => 'Please Enter Alt image Team ...']) !!}
                @error('alt')
                <p class="text-center alert alert-danger p-1">{{ $message }}</p>
                @enderror
            </section>


            <section class="form-group">
                {!! Form::label('image' , 'Image' , ['style' => 'font-size:17px']) !!}
                {!! Form::file('image' , ['class' => 'form-control mb-4' , 'style' => '2px inset lightgray']) !!}
                <p class="text-center"><img src="{{ asset("/images/team/" . $team->image) }}" width="170" height="100"></p>
                @error('image')
                <p class="text-center alert alert-danger p-1">{{ $message }}</p>
                @enderror
            </section>


            <section class="form-group">
                {!! Form::label('fullname' , 'Fullname' , ['style' => 'font-size:17px']) !!}
                {!! Form::text('fullname' , old('fullname') , ['class' => 'form-control mb-4' , 'style' => '2px inset lightgray',
                    'placeholder' => 'Please Enter Fullname Team ...']) !!}
                @error('fullname')
                <p class="text-center alert alert-danger p-1">{{ $message }}</p>
                @enderror
            </section>


            <section class="form-group">
                {!! Form::label('job' , 'Job' , ['style' => 'font-size:17px']) !!}
                {!! Form::text('job' , old('job') , ['class' => 'form-control mb-4' , 'style' => '2px inset lightgray',
                   'placeholder' => 'Please Enter Your Job Team ...']) !!}
                @error('job')
                <p class="text-center alert alert-danger p-1">{{ $message }}</p>
                @enderror
            </section>

            <section class="form-group">
                {!! Form::label('linkedin' , 'Link-Linkedin' , ['style' => 'font-size:17px']) !!}
                {!! Form::text('linkedin' , old('linkedin') , ['class' => 'form-control mb-4' , 'style' => '2px inset lightgray',
                   'placeholder' => 'Please Enter your address Link-Linkedin ...']) !!}
                @error('linkedin')
                <p class="text-center alert alert-danger p-1">{{ $message }}</p>
                @enderror
            </section>


            <section class="form-group">
                {!! Form::label('telegram' , 'Link-Telegram' , ['style' => 'font-size:17px']) !!}
                {!! Form::text('telegram' , old('telegram') , ['class' => 'form-control mb-4' , 'style' => '2px inset lightgray',
                   'placeholder' => 'Please Enter your address Link-Telegram ...']) !!}
                @error('telegram')
                <p class="text-center alert alert-danger p-1">{{ $message }}</p>
                @enderror
            </section>


            <section class="form-group">
                {!! Form::label('instagram' , 'Link-Instagram' , ['style' => 'font-size:17px']) !!}
                {!! Form::text('instagram' , old('instagram') , ['class' => 'form-control mb-4' , 'style' => '2px inset lightgray',
                   'placeholder' => 'Please Enter your address Link-Instagram ...']) !!}
                @error('instagram')
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







