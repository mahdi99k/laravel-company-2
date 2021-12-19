@extends('admin.layouts.master')

@section('title')
    {{ "slider-showData" }}
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
                <h2 class="text-white font-weight-bold">This Page Is Slider</h2>
            </section>


        <section class="col-10 offset-1 mt-4 p-3 bg-secondary">
            <table class="table table-bordered table-responsive-md table-hover table-dark">

                <tr class="text-center font-weight-bold">
                    <td>title</td>
                    <td>caption</td>
                    <td>image</td>
                    <td>alt</td>
                    <td>update</td>
                    <td>delete</td>
                </tr>


                @forelse ($slider as $item)

                    <tr class="text-center">
                        <td>{{ \Illuminate\Support\Str::limit($item->title , 50) }}</td>
                        <td>{{ \Illuminate\Support\Str::limit($item->caption , 50) }}</td>
                        <td><img src="{{ asset("images/slider/" . $item->image) }}" width="50" height="50"></td>
                        <td>{{ $item->alt }}</td>

                        <td>
                            <a href="{{ route('slider.edit' , ['id' => $item->id]) }}" class="btn btn-info text-white">Update</a>
                        </td>

                        <td>
                            {!! Form::open(['route' => ['slider.destroy' , $item->id] , 'method' => 'delete']) !!}
                            {!! Form::submit('Delete' , ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>

                @empty
                    <tr>
                        <td colspan="6">
                            <h3 class="text-center text-white">No Data</h3>
                        </td>
                    </tr>
                @endforelse


            </table>


           {{ $slider->links() }} {{-- paginate --}}


            <a href="{{route('slider.create')}}" class="btn btn-success text-capitalize">go to create slider website</a>

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






