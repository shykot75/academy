@extends('master.front.master')

@section('title')
    User Login | Academy
@endsection


@section('body')

    <div class="pt-32pt pt-sm-64pt pb-32pt">

        <div class="container page__container ">

            <div class="col-md-5 p-2 m-2 mx-auto">
                <img src="{{asset('/')}}assets/images/illustration/student/128/white.svg" height="150"  width="150" alt="logo"  class="bg-primary p-2 rounded-circle d-block mx-auto" />

            </div>

            <h2 class=" col-md-5 p-0 mx-auto text-center">User Login</h2>
            <p class="text-center text-danger">{{Session::get('message')}}</p>
            <form class="col-md-5 p-0 mx-auto " action="{{route('new-login')}}" method="POST">
                @csrf

                <div class="form-group ">
                    <label class="form-label " for="email">Email:</label>
                    <input type="email" id="email" class="form-control" name="email" placeholder="Your email address ...">
                </div>
                <div class="form-group ">
                    <label class="form-label " for="password">Password:</label>
                    <input type="password" id="password" class="form-control" name="password" placeholder="Enter Your Password ...">
                    <p class="text-right"><a href="" class="small ">Forgot your password?</a></p>
                </div>

                <div class="form-group ">
                    <label class="form-label " for="loginas">Login As: </label>
                    <label><input type="radio" name="check" value="1"/> Teacher</label>
                    <label><input type="radio" name="check" value="0"/> Student</label>

                </div>

                <div class="text-center">
                    <button class="btn-lg btn-primary" type="submit">Login</button>
                </div>
            </form>


        </div>
    </div>

@endsection
