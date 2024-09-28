@extends('layout')
@section('title','Home Page')

@section('content')
    <div class="products">
        <div class="product">
            <div class="container">
                <div class="row">
                @foreach($data as $dta)

                    <div class="col-4">
                        <img class="shadow" src="{{$dta->image}}">
                        <h3>{{$dta->name}}</h3>
                        <p>{{$dta->info}}</p>
                        <h4>{{$dta->price}}</h4>
                        <button class="btn btn-secondary">Buy</button>

                    </div>


                @endforeach
                </div>

            </div>

        </div>




    </div>



@endsection
