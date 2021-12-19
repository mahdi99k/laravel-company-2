@extends('admin.layouts.master')

@section('title' , 'panel-update-post')



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

            {!! Form::model($post  , ['route' => ['post.update' , $post->id] , 'method' => 'put' , 'files' => true]) !!}


            <section class="form-group">
                {!! Form::label('subject' , 'Subject' , ['style' => 'font-size:17px']) !!}
                {!! Form::text('subject' , old('subject') , ['class' => 'form-control mb-4' , 'style' => 'border:2px inset lightgray',
                    'placeholder' => 'Please Enter Subject Post ...']) !!}
                @error('subject')
                <p class="text-center alert alert-danger p-1">{{ $message }}</p>
                @enderror
            </section>

            <section class="form-group">
                {!! Form::label('image' , 'Image' , ['style' => 'font-size:17px']) !!}
                {!! Form::file('image' , ['class' => 'form-control mb-4' , 'style' => 'border:2px inset lightgray']) !!}
                <p class="text-center"><img src="{{ asset("images/post/" . $post->image) }}" width="170" height="100" ></p>
                @error('image')
                <p class="text-center alert alert-danger p-1">{{ $message }}</p>
                @enderror
            </section>


            <section class="form-group">
                {!! Form::label('alt' , 'Name-Image' , ['style' => 'font-size:17px']) !!}
                {!! Form::text('alt' , old('alt') , ['class' => 'form-control mb-4' , 'style' => 'border:2px inset lightgray',
                    'placeholder' => 'Please Enter Name image Post ...']) !!}
                @error('alt')
                <p class="text-center alert alert-danger p-1">{{ $message }}</p>
                @enderror
            </section>


            <section class="form-group">
                {!! form::label('body' , 'Body' , ['style' => 'font-size:17px']) !!}
                {!! Form::textarea('body' , old('body') , ['class' => 'form-control mb-4' , 'style' => 'border:2px inset lightgray:
                    resize:none;height:250px' , 'placeholder' => 'Please Enter Body Post ...']) !!}
                @error('body')
                <p class="text-center alert alert-danger p-1">{{ $message }}</p>
                @enderror
            </section>


            <section class="form-group">
                {!! Form::label('title' , 'Title' , ['style' => 'font-size:17px']) !!}
                {!! Form::text('title' , old('title') , ['class' => 'form-control mb-4' , 'style' => 'norder:2px inset lightgray',
                    'placeholder' => 'Please Enter Title Post ...']) !!}
                @error('title')
                <p class="text-center alert alert-danger p-1">{{ $message }}</p>
                @enderror
            </section>


            <section class="form-group">
                {!! Form::label('author' , 'Author' , ['style' => 'font-size:17px']) !!}
                {!! Form::text('author' , old('author') , ['class' => 'form-control mb-4' , 'style' => 'border:2px inset lightgray' ,
                    'placeholder' => 'Please Enter Author Post ...']) !!}
                @error('author')
                <p class="text-center alert alert-danger p-1">{{ $message }}</p>
                @enderror
            </section>


            <section class="form-group">
                {!! form::label('keywords' , 'Keywords' , ['style' => 'font-size:17px']) !!}
                {!! Form::textarea('keywords' , old('keywords') , ['class' => 'form-control mb-4' , 'style' => 'border:2px inset lightgray:
                    resize:none;height:250px' , 'placeholder' => 'Please Enter Keywords Seo Post ...']) !!}
                @error('keywords')
                <p class="text-center alert alert-danger p-1">{{ $message }}</p>
                @enderror
            </section>


            <section class="form-group">
                {!! form::label('description' , 'Description' , ['style' => 'font-size:17px']) !!}
                {!! Form::textarea('description' , old('description') , ['class' => 'form-control mb-4' , 'style' => 'border:2px inset lightgray:
                    resize:none;height:250px' , 'placeholder' => 'Please Enter Description Seo Post ...']) !!}
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





















