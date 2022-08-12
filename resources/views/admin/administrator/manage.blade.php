@extends('master.admin.master')

@section('title')
    Manage Admins | Academy
@endsection


@section('body')




    <section class="py-2">

            <div class="card col-md-10 mx-auto">
                <a href="{{route('generate-pdfs')}}" class="btn btn-primary" >print pdf</a>
                <div class="card-title"><h3 class="text-center pt-3">Manage Administrators</h3></div>
                <p class="text-center text-success font-size-20pt">{{Session::get('message')}}</p>
                <div class="card-body">
                    <table class="table  thead-border-top-0 table   table-hover">

                    <thead >
                    <tr >

                        <th>SL</th>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>QR</th>
                        <th>Actions</th>
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

                            <td class="">
                                <a href="{{route('edit-administrator', ['id' => $user->id])}}" class="btn btn-info">Edit</a>
                            </td>
                            <td class="">
                                <a href="" onclick="deleteAdmin({{$user->id}})" class="btn btn-danger {{$user->id == 2 ? 'disabled' : ''}}">Delete</a>
                                <form action="{{route('delete-administrator', ['id' => $user->id])}}" method="POST" id="deleteAdmin{{$user->id}}">
                                    @csrf
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>


                     <div class="card-footer p-8pt">

                    <ul class="pagination justify-content-start pagination-xsm m-0">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true" class="material-icons">chevron_left</span>
                                <span>Prev</span>
                            </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Page 1">
                                <span>1</span>
                            </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Page 2">
                                <span>2</span>
                            </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span>Next</span>
                                <span aria-hidden="true" class="material-icons">chevron_right</span>
                            </a>
                        </li>
                    </ul>

                </div>
                </div>

            </div>

    </section>

    <script>
        function deleteAdmin(id) {
            event.preventDefault();
            var check = confirm('Are You Sure To DELETE This Admin?');

            if(check){
                document.getElementById('deleteAdmin'+id).submit();
            }


        }
    </script>



@endsection
