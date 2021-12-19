@extends('admin.layouts.master')

@section('title')
    {{ "about-index" }}
@endsection



@section('content')

    <section class="row m-0">

        @if (session('delete'))
            <section class="col-8 offset-2 alert bg_danger_me mt-4">
                <h4 class="text-center text-white">{{ session('delete') }}</h4>
            </section>
        @endif

        <section class="col-8 offset-2 text-center mt-3">
            <h2 class="text-white font-weight-bold">This Page Is Contact</h2>
        </section>


        <section class="col-10 offset-1 mt-4 p-3 bg-secondary">
            <table class="table table-bordered table-responsive-xl table-hover table-dark">

                <tr class="text-center font-weight-bold">
                    <td>fullname</td>
                    <td>email</td>
                    <td>subject</td>
                    <td>message</td>
                    <td>delete</td>
                </tr>

                @forelse ($contact as $item)

                    <tr class="text-center">
                        <td>{{ $item->fullname }}</td> {{--  $item->fullname => database  --}}
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->subject }}</td>
                        <td style="font-size: 12px">{{ \Illuminate\Support\Str::limit($item->message , 150) }}</td>
                        <td>
                            {!! Form::open(['route' => ['contact.destroy' , $item->id] , 'method' => 'delete']) !!}
                            {!! Form::submit("Delete" , ['class' => "btn btn-danger text-capitalize"]) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>

                @empty
                    <tr>
                        <td colspan="5">
                            <h3 class="text-center text-white">No Data</h3>
                        </td>
                    </tr>
                @endforelse


            </table>


            {{ $contact->links() }}  {{-- paginate --}}

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























