@extends('salamoji_website_project_files.main_of_salamoji')


@section('title' , ' / about_us')

@section('content')

<link rel="stylesheet" href="{{asset('css/about_us_page.css')}}">

<style>
	@import url('https://fonts.googleapis.com/css?family=Bree+Serif&display=swap');
	@import url('https://fonts.googleapis.com/css?family=Bree+Serif|IBM+Plex+Serif&display=swap');
	@import url('https://fonts.googleapis.com/css?family=Bree+Serif|IBM+Plex+Serif|PT+Serif+Caption&display=swap');	
	#about_us{

		width : 100%;
		height : 300px;	

	}
	#about_us_title{

		margin : 20px auto;
		text-align : center;
		font-weight: bold;
		font-size : 30px;
		font-family: 'Bree Serif', serif;

	}
	#about_us_body{

		width : 90%;
		margin  :auto;
		text-align : center;
		font-size : 20px;
		font-family: 'PT Serif Caption', serif;		

	}
	#hide_text{
		
		display : none;
		border :none;
		padding : 10px;
		width : 40%;
		margin-top : 10px;
		border-radius : 30px; 		

	}
	#back_btn{

		display : none;
		border :none;
		padding : 10px;
		width : 40%;
		margin-top : 10px;
		border-radius : 30px; 
		font-size : 20px;
		font-family: 'PT Serif Caption', serif;		

		
	}	
	#back_container{

		text-align : center;
		

	}
	@media(max-width : 555px){

		#remain_text{

			display : none;

		}
		#hide_text{
			
			display : inline;

		}

	}

</style>

<div>

    <div>

        <img src="{{asset('salamoji_project_images/team.jpg')}}" id="about_us" alt="selamoji">

            <div>
                <h6 id="about_us_title">About Us</h6>
                <p id="about_us_body">
                    Three individuals, born in three different countries, who grew up in the three different continents with one common culture that connected them in the melting pot that is modern society today. This is not a plot to a movie, but rather the birth and evolution of Peer Inkwell (Pi) that launched Selamoji.

                    As the world grows with unfettered technological advancements <button id="hide_text">read more</button> <span id="remain_text">,the cultural bonds of society could indeed dissipate due to the vast connectedness via social media and technology today. It is our aim to not only ride the wave of technological growth and innovation into the future but also strengthen and inspire cultural and social bonds of the diverse modern societies of today.

                    With an eye towards the future, we at Pi aim to Preserve & Innovate giving credence to our overall goal of connecting the world through culture and technology.</span>
                </p>
		<div id="back_container">
			<button id="back_btn"> < back</button>
		</div>
            </div>
    </div>
</div>

<script>

	var hide_text_btn = document.getElementById('hide_text');

	var back_text_btn = document.getElementById('back_btn');

	var remain_text_span = document.getElementById('remain_text');

	var body_css = document.getElementById('body-css');

	hide_text_btn.onclick = function (){

		remain_text_span.style.display = 'inline';

		back_text_btn.style.display = 'inline';
		
		hide_text_btn.style.display = 'none';

		}

	back_text_btn.onclick = function (){

		remain_text_span.style.display = 'none';

		back_text_btn.style.display = 'none';
		
		hide_text_btn.style.display = 'inline';


		}
</script>

@stop
