@extends('master.admin.master')

@section('title')
    Course Details | Academy
@endsection


@section('body')




    <section class="py-2">

        <div class="card col-md-11 mx-auto">
            <div class="card-title"><h3 class="text-center pt-3">Course Details</h3></div>
            <div class="card-body">
                <table class="table  thead-border-top-0 table   table-hover">

                    <tr >
                        <th>ID</th>
                        <td class="text-primary">{{$subject->id}}</td>
                    </tr>

                    <tr >
                        <th>Title</th>
                        <td class="font-size-20pt">
                            <strong>{{$subject->title}}</strong>
                        </td>
                    </tr>

                    <tr >
                        <th>CODE</th>
                        <td>
                            <span class="js-lists-values-company"><strong>{{$subject->code}}</strong></span>

                        </td>
                    </tr>

                    <tr >
                        <th>Fees</th>
                        <td>
                            <span class="js-lists-values-company"><strong>{{number_format($subject->fee)}} Tk.</strong></span>

                        </td>
                    </tr>

                    <tr >
                        <th>Short Description</th>
                        <td>{!! $subject->short_description !!}</td>
                    </tr>

                    <tr >
                        <th>Long Description</th>
                        <td>{!! $subject->long_description !!}</td>
                    </tr>

                    <tr >
                        <th>Instructor</th>
                        <td class="font-size-20pt">
                            <span class="js-lists-values-company"><strong>{{$subject->teacher->name}}</strong></span>

                        </td>
                    </tr>

                    <tr >
                        <th>Image</th>
                        <td class="">
                            <span><img src="{{asset($subject->image)}}" alt="" class="img-thumbnail" ></span>
                        </td>
                    </tr>

                </table>



            </div>

        </div>

    </section>





@endsection
