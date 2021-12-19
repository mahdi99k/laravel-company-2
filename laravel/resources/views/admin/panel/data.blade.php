@extends('admin.layouts.master')

@section('title')
    {{ "panel-showData" }}
@endsection




@section('content')

    <section class="row m-0">

        @if (session('delete'))
            <section class="col-8 offset-2 alert bg_danger_me mt-4">
                <h4 class="text-center text-white">{{ session('delete') }}</h4>
            </section>
        @endif

        @if (session('update'))
            <section class="col-8 offset-2 alert alert-success mt-4">
                <h4 class="text-center">{{ session('update') }}</h4>
            </section>
        @endif

            <section class="col-8 offset-2 text-center mt-3">
                <h2 class="text-white font-weight-bold">This Page Is Seo</h2>
            </section>

        <section class="col-10 offset-1 mt-3 p-4 bg-secondary">
            <table class="table table-bordered table-responsive-lg table-hover table-info">

                <tr class="text-center font-weight-bold">
                    <td>title</td>
                    <td>keywords</td>
                    <td>description</td>
                    <td>author</td>
                    <td>update</td>
                    <td>delete</td>
                </tr>


                @forelse ($seo as $item)
                    <tr class="text-center">
                        <td>{{ $item->title }}</td>
                        <td>{{ \Illuminate\Support\Str::limit($item->keywords , 20)}}</td> {{-- بیا محدود کن و 100 کاراکتر نمایش بده --}}
                        <td>{{ \Illuminate\Support\Str::limit($item->description , 20)}}</td>
                        <td>{{ $item->author }}</td>

                        <td><a href="{{route('panel.edit' , ['id' =>$item->id ])}}"
                               class="btn btn-info text-white text-capitalize">update</a></td>
                        <td>
                            {!! Form::open(['route' => ['panel.destroy' , $item->id] , 'method' => 'delete']) !!}
                            {!! Form::submit('delete' , ['class' => 'btn btn-danger text-capitalize']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @empty
                    <h3 class="text-center text-white">Empty To Data</h3>
                @endforelse


            </table>

            <a href="{{route('panel.create')}}" class="btn btn-info text-capitalize">go to create seo website</a>

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





