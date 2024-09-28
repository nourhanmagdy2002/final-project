@extends('layout')
@section('title','Home Page')

@section('content')

    <div class="backg">
        <img src="{{asset('/images/bg3.jpg')}}">

    </div>

    <div class="swiperr">

        <h3 class="text-center"> - Novels And Stories -</h3>
        <h2 class="text-center">BOOKS</h2>
        <section class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="item swiper-slide">
                    <img src="{{asset('/images/alashFeElhakeka.jpg')}}">
                </div>

                <div class="item swiper-slide">
                    <img src="{{asset('/images/hades.jpg')}}">
                </div>
                <div class="item swiper-slide">
                    <img src="{{asset('/images/radobes.jpeg')}}">
                </div>
                <div class="item swiper-slide">
                    <img src="{{asset('/images/lyaleAlf.jpg')}}">
                </div>
                <div class="item swiper-slide">
                    <img src="{{asset('/images/elas.jpg')}}">
                </div>
                <div class="item swiper-slide">
                    <img src="{{asset('/images/amamEhArsh.jpg')}}">
                </div>
                <div class="item swiper-slide">
                    <img src="{{asset('/images/yaomkotl.png')}}">
                </div>
                <div class="item swiper-slide">
                    <img src="{{asset('/images/alashFeElhakeka.jpg')}}">
                </div>
                <div class="item swiper-slide">
                    <img src="{{asset('/images/harafesh.jpg')}}">
                </div>
                <div class="item swiper-slide">
                    <img src="{{asset('/images/albake.jpg')}}">
                </div>

                <div class="item swiper-slide">
                    <img src="{{asset('/images/awlad.jpg')}}">
                </div>
                <div class="item swiper-slide">
                    <img src="{{asset('/images/kalb.jpg')}}">
                </div>
                <div class="item swiper-slide">
                    <img src="{{asset('/images/new cairo.jpeg')}}">
                </div>

            </div>
            <div class="swiper-pagination"></div>
        </section>

    </div>


    <div class="sliderr">
        <h3 class="text-center"> - Quotes  - </h3>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('/images/1.jpg')}}" class="d-block " alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('/images/2.jpg')}}" class="d-block" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('/images/3.jpg')}}" class="d-block" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('/images/4.jpg')}}" class="d-block" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('/images/5.jpg')}}" class="d-block" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('/images/6.jpg')}}" class="d-block" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('/images/11.jpg')}}" class="d-block" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('/images/8.jpg')}}" class="d-block" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev sm bg-dark" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next bg-dark" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
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
