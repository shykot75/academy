@extends('master.admin.master')
@section('body')
{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <head>--}}
{{--        <meta charset="utf-8">--}}
{{--        <meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
{{--        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">--}}
{{--        <title> PDF</title>--}}

{{--        <style>--}}
{{--            body {--}}
{{--                background-color: #0e9f6e;--}}
{{--            }--}}
{{--        </style>--}}
{{--    </head>--}}
{{--</head>--}}
{{--<body>--}}





<div class="mdk-header-layout__content page-content ">

    <section class="py-2">

        <div class="card col-md-10 mx-auto">

            <div class="card-title"><h3 class="text-center pt-3">Manage Administrators</h3></div>

            <div class="card-body bg-primary">
                <table class="table  thead-border-top-0 table   table-hover">

                    <thead >
                    <tr >

                        <th>SL</th>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>QR</th>

                    </tr>
                    </thead>


                    <tbody>

                    @foreach($users as $user)

                        <tr class="font-size-16pt">

                            <td class="text-success">{{$loop->iteration}}</td>
                            <td><strong>{{$user->id}}</strong></td>
                            <td>
                                <span><img src="{{$user->image}}" alt="" class="mr-2 rounded-circle" height="60" width="60"></span>
                                <strong>{{$user->name}}</strong>
                            </td>

                            <td>
                                <span class="js-lists-values-company"><strong>{{$user->email}}</strong></span>

                            </td>

                            <td>

                                <img src="data:image/png;base64, {{  base64_encode( QrCode::format('png')->size(100)->generate(url('').'/edit-administrator/'.$user->id) ) }}" alt="">
                                {{--                                    {!! QrCode::size(100)->generate(url('/').'/edit-administrator/'.$user->id); !!}--}}
                                {{--                                    {!! QrCode::format('svg')->size(100)->generate(url('/edit-administrator/').$user->id); !!}--}}
                                {{--                                    {!! QrCode::format('svg')->size(100)->generate(url('').'/edit-administrator/'.$user->id); !!}--}}
                                {{--                                    {!! QrCode::size(60)->formate('png')->generate(Request::url().'/edit-administrator/'.$user->id); !!}--}}
                                {{--                                    {!! QrCode::size(60)->generate(Request::url(), public_path('\edit-administrator')); !!}--}}


                            </td>



                        </tr>
                    @endforeach
                    </tbody>
                </table>



            </div>

        </div>

    </section>

</div>




@endsection






















{{--</body>--}}

{{--</html>--}}






