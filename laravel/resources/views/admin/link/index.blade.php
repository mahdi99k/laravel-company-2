@extends('admin.layouts.master')

@section('title')
    {{ "link-index" }}
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


        <section class="col-8 offset-2 text-center mt-4">
            <h2 class="text-white font-weight-bold">This Page Is Link</h2>
        </section>


        <section class="col-8 offset-2 mt-4 p-3 bg-secondary">
            <table class="table table-bordered table-responsive-md table-hover table-dark">

                <tr class="text-center font-weight-bold">
                    <td>name</td>
                    <td>link</td>
                    <td>update</td>
                    <td>delete</td>
                </tr>


                @forelse ($link as $item)

                    <tr class="text-center">
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->link }}</td>

                        <td>
                            <a href="{{ route("link.edit" , ['id' => $item->id]) }}" class="btn btn-info text-white">Update</a>
                        </td>
                        <td>
                            {!! Form::open(['route' => ['link.destroy'  , $item->id] , 'method' => 'delete']) !!}
                            {!! Form::submit('Delete' , ['class' => 'btn btn-danger text-capitalize']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>

                @empty
                    <tr>
                        <td colspan="4">
                            <h3 class="text-center">No Data</h3>
                        </td>
                    </tr>
                @endforelse


            </table>

            {{ $link->links() }}  {{-- paginate --}}

            <a href="{{ route('link.create') }}" class="btn btn-success text-capitalize">go to create link website</a>

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























