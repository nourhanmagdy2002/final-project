@extends('layout')
@section('title','Contact us')
@section('content')
    <div class="contactForm">
        <div class="container">
    <h2 class="text-center" >- Need More Help ? - </h2>
        <p class="text-center">Contact us now, and our team will get in touch with you soon.</p>

        @if(session('contactfailed'))
            <p class="alert alert-danger">{{session('contactfailed')}}</p>
        @endif

        @if(session('contact'))
            <p class="alert alert-success">{{session('contact')}}</p>
        @endif
    <form method="post" action="{{route('contact.save')}}">
        @csrf

        <div class="mb-3">
            <label>Email</label>
            <input class="form-control" name="email" placeholder="Your Email" required >
        </div>
        @error('email')
        <p class="alert alert-danger">{{$message}}</p>
        @enderror

        <div class="mb-3">
            <select class="form-control" name="title">
                <option>Complaint</option>
                <option>Technical Help</option>
                <option>Other..</option>

            </select>
        </div>
        <div class="mb-3">
            <label>Info</label>
            <textarea class="form-control" name="info" placeholder="Your Message" required ></textarea>
        </div>


        <input type="submit" value="Send" class="btn btn-secondary btn1" >
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
