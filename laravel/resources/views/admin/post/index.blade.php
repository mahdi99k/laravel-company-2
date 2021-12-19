@extends('admin.layouts.master')

@section('title')
    {{ "post-index" }}
@endsection




@section('content')

    <section class="row m-0">

        @if (session('delete'))
            <section class="col-8 offset-2 alert bg_danger_me mt-4">
                <h4 class="text-center text-white">{{ session('delete') }}</h4>
            </section>
        @endif

        @if (session("update"))
            <section class="col-8 offset-2 alert alert-success mt-4">
                <h4 class="text-center">{{ session("update") }}</h4>
            </section>
        @endif


        <section class="col-8 offset-2 text-center mt-4">
            <h2 class="text-white font-weight-bold">This Page Is Post</h2>
        </section>


        <section class="col-10 offset-1 mt-4 p-3 bg-secondary">
            <table class="table table-bordered table-responsive-xl table-hover table-dark">

                <tr class="text-center font-weight-bold">
                    <td>subject</td>
                    <td>image</td>
                    <td>alt</td>
                    <td>body</td>
                    <td>title</td>
                    <td>author</td>
                    <td>keywords</td>
                    <td>description</td>
                    <td>update</td>
                    <td>delete</td>
                </tr>


                @forelse ($post as $item)

                    <tr>
                        <td>{{ $item->subject }}</td>
                        <td><img src="{{ asset("/images/post/" . $item->image) }}" width="100" height="50"></td>
                        <td>{{ $item->alt }}</td>
                        <td>{{ \Illuminate\Support\Str::limit($item->body ,25 ) }}</td>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->author }}</td>
                        <td>{{ \Illuminate\Support\Str::limit($item->keywords , 25) }}</td>
                        <td>{{ \Illuminate\Support\Str::limit($item->description , 25) }}</td>

                        <td>
                            <a href="{{ route('post.edit' , ['id' => $item->id]) }}" class="btn btn-info text-white">Update</a>
                        </td>

                        <td>
                            {!! Form::open(['route' => ['post.destroy' , $item->id] , 'method' => 'delete']) !!}
                            {!! Form::submit('Delete' , ['class' => 'btn btn-danger text-capitalize']) !!}
                            {!! Form::close() !!}
                        </td>

                    </tr>

                @empty
                    <tr>
                        <td colspan="10">
                            <h3 class="text-center text-white">No Data</h3>
                        </td>
                    </tr>
                @endforelse


            </table>


            {{ $post->links() }}  {{-- paginate  --}}

            <a href="{{route('post.create')}}" class="btn btn-success text-capitalize">go to create post website</a>

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








