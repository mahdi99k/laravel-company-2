@extends('admin.layouts.master')

@section('title')
    {{ "product-index" }}
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


        <section class="col-8 offset-2 text-center mt-3">
            <h2 class="text-white font-weight-bold">This Page Is Team</h2>
        </section>


        <section class="col-10 offset-1 mt-4 p-3 bg-secondary">
            <table class="table table-bordered table-responsive-xl table-hover table-dark">

                <tr class="text-center font-weight-bold">
                    <td>image</td>
                    <td>alt</td>
                    <td>fullname</td>
                    <td>job</td>
                    <td>linkedin</td>
                    <td>telegram</td>
                    <td>instagram</td>
                    <td>update</td>
                    <td>delete</td>
                </tr>

                @forelse ($team as $item)

                    <tr class="text-center">
                        <td><img src="{{ asset("images/team/" . $item->image) }}" width="100" height="50"></td>
                        <td>{{ $item->alt }}</td>
                        <td>{{ $item->fullname }}</td>
                        <td>{{ $item->job }}</td>
                        <td>{{ \Illuminate\Support\Str::limit($item->linkedin , 10) }}</td>
                        <td>{{ \Illuminate\Support\Str::limit($item->telegram , 10) }}</td>
                        <td>{{ \Illuminate\Support\Str::limit($item->instagram , 10) }}</td>

                        <td>
                            <a href="{{ route('team.edit' , ['id' => $item->id]) }}" class="btn btn-info text-white">Update</a>
                        </td>

                        <td>
                            {!! Form::open(['route' => ['team.destroy' , $item->id] , 'method' => 'delete']) !!}
                            {!! Form::submit("Delete" , ['class' => "btn btn-danger text-capitalize"]) !!}
                            {!! Form::close() !!}
                        </td>

                    </tr>

                @empty
                    <tr>
                        <td colspan="9">
                            <h3 class="text-center text-white">No Data</h3>
                        </td>
                    </tr>
                @endforelse


            </table>


            {{ $team->links() }}  {{-- paginate  --}}

            <a href="{{route('team.create')}}" class="btn btn-success text-capitalize">go to create team website</a>

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







