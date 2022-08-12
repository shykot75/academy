@extends('master.admin.master')

@section('title')
    Edit Teacher | Academy
@endsection

@section('body')



    <div class="row my-4 pt-4">
        <div class="col-lg-7 mx-auto">
            <div class="card">
                <div class="card-body p-3">
                    <h4 class="card-title mx-3 my-2 text-info font-size-20pt">Edit Teacher </h4>
                    <p class="text-center text-success font-size-20pt">{{Session::get('message')}}</p>
                    <form action="{{route('update-teacher', ['id' => $teacher->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row mb-4 ">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Teacher name</label>
                            <div class="col-sm-9">
                                <input type="text" name="name" class="form-control" id="horizontal-firstname-input" value="{{$teacher->name}}">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" name="email" class="form-control" id="horizontal-email-input" value="{{$teacher->email}}">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="horizontal-pass-input" class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-9">
                                <input type="password" name="password" class="form-control" id="horizontal-pass-input">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="horizontal-mobile-input" class="col-sm-3 col-form-label">Mobile</label>
                            <div class="col-sm-9">
                                <input type="number" name="mobile" class="form-control" id="horizontal-mobile-input" value="{{$teacher->mobile}}">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="horizontal-address-input" class="col-sm-3 col-form-label">Address</label>
                            <div class="col-sm-9">
                                <textarea name="address" id="horizontal-address-input" class="form-control">{{$teacher->address}}</textarea>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="horizontal-mobile-input" class="col-sm-3 col-form-label">Status</label>
                            <div class="col-sm-9">
                                <label><input type="radio" {{$teacher->status == 1 ? 'checked' : ''}} name="status" value="1"/> Active</label>
                                <label><input type="radio" {{$teacher->status == 0 ? 'checked' : ''}} name="status" value="0"/> Inactive</label>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="horizontal-image-input" class="col-sm-3 col-form-label">Upload an Image</label>
                            <div class="col-sm-9">
                                <img src="{{asset($teacher->image)}}" alt="" height="150" width="150">
                                <input type="file" name="image" class="form-control-file" accept="images/*" id="horizontal-image-input">
                            </div>
                        </div>

                        <div class="form-group row justify-content-end">
                            <div class="col-sm-9">
                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Update Teacher</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>






@endsection
