@extends('salamoji_website_project_files.main_of_salamoji')


@section('title' , ' / Home')


@section('content')

<link rel="stylesheet" href="{{asset('css/css_of_salamoji_home_page.css')}}">

<style>

	.title_video {
		letter-spacing:5px;
		background-color : lightblue;
		padding : 10px;
		border-radius : 30px 20px 30px 20px;
		margin : 50px auto;	
		width : 40%;
		text-align : center;
		font-weight : bold;
		padding : 5px 12px;	
		}
	#video_show_box{
		width:90%;
		border: none;
		}
	#right,#left{
		
		opacity:.2;

		}
	#right:hover,#left:hover{

		opacity:1.0;	
		
		}
	.content{

		border : none;		

	}
	.slide_pic{
		
		border-radius : 30px 20px 30px 20px;

	}			
	#frame_work , #frame_work_2{
		border-radius : 30px 20px 30px 20px;
		border : none;
	}
	@media(max-width : 555px){

		.title_video{

			width : 80%;

		}
	footer{

		margin-top : 200px;

	}	

	}
</style>

        <div class="content">
            <img class="slide_pic" src="{{asset('salamoji_project_images/salamoji_min.jpg')}}" alt="salamoji_min">
            <img class="slide_pic" src="{{asset('salamoji_project_images/salamoji_test.png')}}" alt="salamoji_logo">
            <img class="slide_pic" src="{{asset('salamoji_project_images/Banner-2.png')}}" alt="salamoji_logo">
            <a href="https://www.youtube.com/watch?v=UCrR4h7EH_U">
                <img class="slide_pic" src="{{asset('salamoji_project_images/phone_banner.png')}}" alt="selamoji_app_link">
            </a>


            <button id="right" onclick="plusImages(+1)">&#10095;</button>
            <button id="left" onclick="plusImages(-1)">&#10094;</button>
        </div>
        	<h3 class="title_video">Check Out Our Trailer</h3>
        <div id="video_show_box">
            <iframe src="https://www.youtube.com/embed/UCrR4h7EH_U" frameborder="0" id="frame_work" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
		<h3 class="title_video">How to Setup Selamoji in Android</h3>
	 <div id="video_show_box">
        	<iframe src="https://www.youtube.com/embed/HLt2YvySYjg" frameborder="0" id="frame_work_2" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>

        <script src="{{asset('js/js_of_salamoji.js')}}"></script>

@stop
