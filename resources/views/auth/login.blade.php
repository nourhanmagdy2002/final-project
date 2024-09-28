@extends('layout')
@section('title','Sign in ')
@section('content')
    <div class="loginForm">
        <div class="container">
            <h2 class="text-center" >- Login - </h2>
            <form method="post" action="{{route('login.save')}}">
                @csrf
                @if(session('failedLogin'))
                    <p class="alert alert-danger">{{session('failedLogin')}}</p>
                @endif

                <div class="mb-3">
                    <label>Phone</label>
                    <input class="form-control" name="phone" required>
                </div>
                @error('phone')
                <p class="alert alert-danger">{{$message}}</p>
                @enderror

                <div class="mb-3">
                    <label>Password</label>
                    <input class="form-control" name="password"  required>
                </div>
                @error('password')
                <p class="alert alert-danger">{{$message}}</p>
                @enderror

               <input type="submit" value="Register" class="btn btn-secondary btn1" >
            </form>


        </div>

    </div>

    <footer>
        <div class="foot">
            <div class="row">
                <div class="col-12 col1">
                    <h2 class="text-center">Mahfouz's</h2>
                    <p class="text-center">Novelist And Egyptian Author</p>
                    <div class="spans">
                        <span ><i class="bi bi-facebook"></i></span>
                        <span ><i class="bi bi-twitter-x"></i></span>
                        <span ><i class="bi bi-youtube"></i></span> <br>
                    </div>
                </div>

                <div class="col-12">
                    <h4 class="text-center">Email us</h4>
                    <p class="text-center" class="bi bi-envelope-at"> Mahfouzs19@gamil.com</p>
                </div>
                <br>
                <hr>
                <p class="text-center"><span>Mahfouz's</span> Copyright</p>

            </div>

        </div>

    </footer>

@endsection
