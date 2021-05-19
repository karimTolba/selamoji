@extends('salamoji_website_project_files.main_of_salamoji')


@section('title' , 'Home')


@section('content')

<link rel="stylesheet" href="{{asset('css/css_of_salamoji_home_page.css')}}">

        <div class="content">
            <img class="slide_pic" src="{{asset('salamoji_project_images/salamoji_min.jpg')}}" alt="salamoji_min">
            <img class="slide_pic" src="{{asset('salamoji_project_images/salamoji_test.png')}}" alt="salamoji_logo">

            <button id="right" onclick="plusImages(+1)">&#10095;</button>
            <button id="left" onclick="plusImages(-1)">&#10094;</button>
        </div>

        <script src="{{asset('js/js_of_salamoji.js')}}"></script>

@stop
