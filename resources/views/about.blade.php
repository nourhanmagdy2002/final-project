@extends('layout')
@section('title','Contact us')
@section('content')

<div class="about">
    <hr>
    <div class="about_content d-flex justify-content-between">

        <div class="left">
            <img src="{{asset('/images/naguib1.jpg')}}" >

        </div>

        <div class="right">
            <h1>About Naguib Mahfouz</h1>
            <p>an Egyptian writer who won the 1988 Nobel Prize in Literature.<br> Mahfouz is regarded as one of the first contemporary writers in Arabic literature, along with Taha Hussein, to explore themes of existentialism.<br> He is the only Egyptian to win the Nobel Prize in Literature.<br> He published 35 novels, over 350 short stories, 26 screenplays, <br>hundreds of op-ed columns for Egyptian newspapers, and seven plays over a 70-year career, from the 1930s until 2004.<br> All of his novels take place in Egypt, and always mentions the lane, which equals the world.<br>Many of Mahfouz's works have been made into Egyptian and foreign films; no Arab writer exceeds Mahfouz in number of works that have been adapted for cinema and television. </p>
           <a href="/products"> <button class="btn btn-secondary">Discover His Books</button></a>

        </div><hr>

    </div>
    <hr>
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
