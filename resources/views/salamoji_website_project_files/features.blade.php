@extends('salamoji_website_project_files.main_of_salamoji')


@section('title' , ' / features')

<link rel="stylesheet" href="{{asset('css/selamoji_features.css')}}">

<style>
    #emoji_title #first_title,#second_title{
        font-size: 30px;
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        font-weight:bold;
        text-align:center;
        width:90%;
        margin: 50px auto;
	border-radius : 30px 20px 30px 20px;
	background-color : lightblue;
	padding : 10px;	
    }
	#first_p,#second_p{
		text-align:center;
		font-size:20px;
		width:90%;
        	margin: 50px auto;
		
	}
	#emoji_title #img{
		text-align:center;
		}
	#emoji_title{
		margin:50px 0px;
	}
 
    @media(max-width : 441px){

        #emoji_title #first_title,#second_title{

            font-size:20px;

        }
       #first_p,#second_p{
            font-size:15px;
        }
       
}
    #image_container{
	margin:0px auto;
	width:300px;
        height:400px;
        animation: slide 5s infinite alternate-reverse;
    }
#image_parent{
	margin : 50px 0px;
}
    @keyframes slide{
        0%{
            background-image:url({{url('2.png')}});
            background-size:100% 100%;
            background-repeat:no-repeat;
        }
	 20%{
            background-image:url({{url('2.png')}});
            background-size:100% 100%;
            background-repeat:no-repeat;
        }

	 40%{
            background-image:url({{url('3.png')}});
            background-size:100% 100%;
            background-repeat:no-repeat;
        }
	
        60%{
            background-image:url({{url('3.png')}});
            background-size:100% 100%;
            background-repeat:no-repeat;
        }
	 80%{
            background-image:url({{url('7.png')}});
            background-size:100% 100%;
            background-repeat:no-repeat;
        }
	 100%{
            background-image:url({{url('7.png')}});
            background-size:100% 100%;
            background-repeat:no-repeat;
        }
    }
</style>

@section('content')


    <div id="emoji_title">
	<div class="container">

	<div class="row">
	<div id="img" class="col-lg-6 col-md-6 col-sm-12">
		<img src="{{asset('giff_image.gif')}}" width="300px" height="400px">
	</div>
	<div class="col-lg-6 col-md-6 col-sm-12">
        	<h2 id="first_title"> YOUR OWN HABESHA GIFF & EMOJI KEYBOARD TO EXPRESS YOUR CULTURE</h2>
			<p id="first_p"> For the first time Peerinkwell is introducing giff and emoji culture keyboard to enhance our communication and expressions to one another.</p>
	</div>
	</div>
</div>
</div>
	<div class="container">
	
	<div class="row">
<div id="image_parent" class="col-lg-6 col-md-6 col-sm-12">
    <div id="image_container">

    </div>
</div>
<div class="col-lg-6 col-md-6 col-sm-12">	

        <h2 id="second_title">Emoji Keyboard</h2>
        <p id="second_p">
Selamoji is the emoji keyboard for every culture and language! For the first time, offering an Amharic keyboard for the Ethiopian and Eritrean community! Do it for the culture and express yourself in your own language and with culture-centric emojis with your friends and family. More cultures to be added soon!</p>
    </div>
</div>
</div>	
@stop
