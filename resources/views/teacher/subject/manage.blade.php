@extends('master.teacher.master')

@section('title')
    Manage Subjects | Academy
@endsection


@section('body')




    <section class="py-2">

        <div class="card col-md-11 mx-auto">
            <div class="card-title"><h3 class="text-center pt-3">Manage Your Subjects</h3></div>
            <p class="text-center text-success font-size-20pt">{{Session::get('message')}}</p>
            <div class="card-body">
                <table class="table  thead-border-top-0 table   table-hover">

                    <thead >
                    <tr >

                        <th>SL</th>
                        <th>Title</th>
                        <th>CODE</th>
                        <th>Fees</th>
                        <th>Instructor</th>
                        <th>Status</th>
                        <th colspan="2">Actions</th>
                    </tr>
                    </thead>


                    <tbody>

                    @foreach($subjects as $subject)

                        <tr class="font-size-16pt">

                            <td class="text-success">{{$loop->iteration}}</td>
                            <td>
                                <span><img src="{{$subject->image}}" alt="" class="mr-2 rounded" height="80" width="80"></span>
                                <strong>{{$subject->title}}</strong>
                            </td>

                            <td>
                                <span class="js-lists-values-company"><strong>{{$subject->code}}</strong></span>

                            </td>

                            <td>
                                <span class="js-lists-values-company"><strong>{{number_format($subject->fee)}}</strong></span>

                            </td>

                            <td>
                                <span class="js-lists-values-company"><strong>{{$subject->teacher->name}}</strong></span>

                            </td>


                            <td>
                                <span class="js-lists-values-company"><strong>{{$subject->status == 1 ? 'Active' : 'Inactive'}}</strong></span>

                            </td>

                            <td >
                                <a href="{{route('edit-subject', ['id' => $subject->id])}}" class="btn btn-sm btn-info ">Edit</a>
                            </td >
                            <td class="p-0 m-0">
                                <a href="" onclick="deleteSubject({{$subject->id}})" class="btn btn-sm btn-danger ">Delete</a>
                                <form action="{{route('delete-subject', ['id' => $subject->id])}}" method="POST" id="deleteSubject{{$subject->id}}">
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
        function deleteSubject(id) {
            event.preventDefault();
            var check = confirm('Are You Sure To DELETE This Subject?');

            if(check){
                document.getElementById('deleteSubject'+id).submit();
            }


        }
    </script>



@endsection
