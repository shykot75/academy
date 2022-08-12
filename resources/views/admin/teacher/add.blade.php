@extends('master.admin.master')

@section('title')
    Create A Teacher | Academy
@endsection

@section('body')



    <div class="row my-4 pt-4">
        <div class="col-lg-7 mx-auto">
            <div class="card">
                <div class="card-body p-3">
                    <h4 class="card-title mx-3 my-2 text-info font-size-20pt">ADD Teacher </h4>
                    <p class="text-center text-success font-size-20pt">{{Session::get('message')}}</p>
                    <form action="{{route('new-teacher')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row mb-4 ">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Teacher name</label>
                            <div class="col-sm-9">
                                <input type="text" name="name" class="form-control" id="horizontal-firstname-input">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" name="email" class="form-control" id="horizontal-email-input">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-mobile-input" class="col-sm-3 col-form-label">Mobile</label>
                            <div class="col-sm-9">
                                <input type="number" name="mobile" class="form-control" id="horizontal-mobile-input">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="horizontal-address-input" class="col-sm-3 col-form-label">Address</label>
                            <div class="col-sm-9">
                                <textarea name="address" id="horizontal-address-input" class="form-control"></textarea>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="horizontal-image-input" class="col-sm-3 col-form-label">Upload an Image</label>
                            <div class="col-sm-9">
                                <input type="file" name="image" class="form-control-file" accept="images/*" id="horizontal-image-input">
                            </div>
                        </div>

                        <div class="form-group row justify-content-end">
                            <div class="col-sm-9">
                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Create New Teacher</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>






@endsection
