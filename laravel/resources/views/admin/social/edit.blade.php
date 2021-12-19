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


        <section class="col-8 offset-2 mt-4 p-5 bg-secondary text-capitalize text-white">

            {!! Form::model($social , ['route' => ['social.update' , $social->id] , 'method' => 'put']) !!}

            <section class="form-group">
                {!! Form::label('telegram' , 'Telegram' , ['style' => 'font-size:17px']) !!}
                {!! Form::text('telegram' , old('telegram') , ['class' => 'form-control mb-4' , 'style' => '2px inset lightgray',
                    'placeholder' => 'Please Enter id Telegram ...']) !!}
                @error('telegram')
                <p class="text-center alert alert-danger p-1">{{ $message }}</p>
                @enderror
            </section>


            <section class="form-group">
                {!! Form::label('instagram' , 'Instagram' , ['style' => 'font-size:17px']) !!}
                {!! Form::text('instagram' , old('instagram') , ['class' => 'form-control mb-4' , 'style' => '2px inset lightgray',
                    'placeholder' => 'Please Enter id Instagram ...']) !!}
                @error('instagram')
                <p class="text-center alert alert-danger p-1">{{ $message }}</p>
                @enderror
            </section>


            <section class="form-group">
                {!! Form::label('linkedin' , 'Linkedin' , ['style' => 'font-size:17px']) !!}
                {!! Form::text('linkedin' , old('linkedin') , ['class' => 'form-control mb-4' , 'style' => '2px inset lightgray',
                    'placeholder' => 'Please Enter id Linkedin ...']) !!}
                @error('linkedin')
                <p class="text-center alert alert-danger p-1">{{ $message }}</p>
                @enderror
            </section>


            <section class="form-group">
                {!! Form::label('twitter' , 'Twitter' , ['style' => 'font-size:17px']) !!}
                {!! Form::text('twitter' , old('twitter') , ['class' => 'form-control mb-4' , 'style' => '2px inset lightgray',
                    'placeholder' => 'Please Enter id Twitter ...']) !!}
                @error('twitter')
                <p class="text-center alert alert-danger p-1">{{ $message }}</p>
                @enderror
            </section>


            <section class="form-group">
                {!! Form::submit('update' , ['class' => 'btn btn-success btn-block mt-5 text-capitalize']) !!}
            </section>

            {!! Form::close() !!}

            <a href="{{ route("social.index") }}" class="btn btn-primary text-capitalize">back to panel</a>


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










