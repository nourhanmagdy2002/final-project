@extends('layout')
@section('title','Register Page')
@section('content')
    <div class="RegisterForm">
        <div class="container">
            <h2 class="text-center" >Register now</h2>
            <p class="text-center" >- A little step to join Mahfouz's community to enjoy reading all his works -</p>
            @if($errors->any)
                @foreach($errors->all() as $err)
                    <p class="alert alert-danger">{{$err}}</p>

                @endforeach
            @endif
            <form method="post" action="{{route('register.save')}}">
                @csrf
                @if(session('failedRegister'))
                    <p class="alert alert-danger">{{session('failedRegister')}}</p>
                @endif

                <div class="mb-3">
                    <label>Username</label>
                    <input class="form-control" name="username"  required>
                </div>
                    @error('name')
                    <p class="alert alert-danger">{{$message}}</p>
                    @enderror


                <div class="mb-3">
                    <label>Email</label>
                    <input class="form-control" name="email" type="email" required>
                </div>
                    @error('email')
                    <p class="alert alert-danger">{{$message}}</p>
                    @enderror

                <div class="mb-3">
                    <label>Phone</label>
                    <input class="form-control" name="phone" required>
                </div>
                    @error('phone')
                    <p class="alert alert-danger">{{$message}}</p>
                    @enderror
                <div class="mb-3">
                    <label>Password</label>
                    <input class="form-control" name="password" type="password" required>
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
