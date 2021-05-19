@extends('salamoji_website_project_files.main_of_salamoji')


@section('title' , ' / about_us')


@section('content')

<link rel="stylesheet" href="{{asset('css/about_us_page.css')}}">

<div class="container-fluid" id="about_us_container">

    <div class="card" id="card_id_1">

        <img src="{{asset('salamoji_project_images/team.jpg')}}" class="card-img-top img-fluid" id="about_us" alt="selamoji">

            <div class="card-body text-center">
                <h6 class="card-title">About Us</h6>
                <p class="card card_id" id="p">
                    Three individuals, born in three different countries, who grew up in the three different continents with one common culture that connected them in the melting pot that is modern society today. This is not a plot to a movie, but rather the birth and evolution of Peer Inkwell (Pi) that launched Selamoji.

                    As the world grows with unfettered technological advancements, the cultural bonds of society could indeed dissipate due to the vast connectedness via social media and technology today. It is our aim to not only ride the wave of technological growth and innovation into the future but also strengthen and inspire cultural and social bonds of the diverse modern societies of today.

                    With an eye towards the future, we at Pi aim to Preserve & Innovate giving credence to our overall goal of connecting the world through culture and technology.
                </p>
            </div>
    </div>
</div>


@stop
