@extends('master.admin.master')

@section('title')
    Manage Teachers | Academy
@endsection


@section('body')




    <section class="py-2">

        <div class="card col-md-11 mx-auto">
            <div class="card-title"><h3 class="text-center pt-3">Manage Teachers</h3></div>
            <p class="text-center text-success font-size-20pt">{{Session::get('message')}}</p>
            <div class="card-body">
                <table class="table  thead-border-top-0 table   table-hover">

                    <thead >
                    <tr >

                        <th>SL</th>
                        <th>ID</th>
                        <th>Name</th>
                        <th>CODE</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Address</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                    </thead>


                    <tbody>

                    @foreach($teachers as $teacher)

                        <tr class="font-size-16pt">

                            <td class="text-success">{{$loop->iteration}}</td>
                            <td><strong>{{$teacher->id}}</strong></td>
                            <td>
                                <span><img src="{{$teacher->image}}" alt="" class="mr-2 rounded-circle" height="50" width="50"></span>
                                <strong>{{$teacher->name}}</strong>
                            </td>

                            <td>
                                <span class="js-lists-values-company"><strong>{{$teacher->code}}</strong></span>

                            </td>

                            <td>
                                <span class="js-lists-values-company"><strong>{{$teacher->email}}</strong></span>

                            </td>

                            <td>
                                <span class="js-lists-values-company"><strong>{{$teacher->mobile}}</strong></span>

                            </td>

                            <td>
                                <span class="js-lists-values-company"><strong>{{$teacher->address}}</strong></span>

                            </td>

                            <td>
                                <span class="js-lists-values-company"><strong>{{$teacher->status == 1 ? 'Active' : 'Inactive'}}</strong></span>

                            </td>

                            <td >
                                <a href="{{route('edit-teacher', ['id' => $teacher->id])}}" class="btn btn-sm btn-info">Edit</a>
                            </td>
                            <td >
                                <a href="" onclick="deleteTeacher({{$teacher->id}})" class="btn btn-sm btn-danger ">Delete</a>
                                <form action="{{route('delete-teacher', ['id' => $teacher->id])}}" method="POST" id="deleteTeacher{{$teacher->id}}">
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
        function deleteTeacher(id) {
            event.preventDefault();
            var check = confirm('Are You Sure To DELETE This Teacher?');

            if(check){
                document.getElementById('deleteTeacher'+id).submit();
            }


        }
    </script>



@endsection
