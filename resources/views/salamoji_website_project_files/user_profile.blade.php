@extends('salamoji_website_project_files.main_of_salamoji')


@section('title' ,' / '.' '.Auth::user()->name.' '.'profile')


@section('content')

    <div id="parent" class="container-fluid text-center">
        <h2 id="title_user_profile">User Profile</h2>
            <div>
                <img id="user_image" src="{{asset('salamoji_project_images/'.Auth::user()->image)}}" alt="use_profile" width="200px" height="200px">
            </div>
            <div class="container-fluid content">
                <p class="title">User_name</p>
                <p class="info">{{Auth::user()->name}}</p>
            </div>
            <div class="container-fluid content">
                <p class="title">User_email</p>
                <p class="info">{{Auth::user()->email}}</p>
            </div>
            <a id="edit_profile" href="selamoji_user/{{Auth::user()->id}}/edit"><button class="btn btn-primary btn-lg" id="btn_profile">edit profile</button></a>
            <a id="change_password" href="{{route('get_edit_user_password')}}"><button class="btn btn-danger btn-lg" id="btn_profile">edit password</button></a>
    </div>

<style>
    #user_image{
        border-radius: 50%;
        border:2px double;
     }
    #parent{
        padding:50px;
        background-color: blueviolet;
    }
    .content{
        margin: 30px 0px;
    }
    .info{
        font-size: 30px;
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        font-weight:bold;
        color:white
    }
    .title{
        font-size: 20px;
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        font-weight:bold;
        color:white;
    }
    #title_user_profile{
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        font-size:30px;
        margin-bottom:30px;
        font-weight:bold;
        letter-spacing: 5px;
        color:white;
    }
    footer{
        margin-top:0px;
    }
    #edit_profile{
        text-decoration: none;
        color:white;
        margin-right:20px;
    }
    #btn_profile{
        color:white;
    }

@media (max-width : 441px){

	.info{
		font-size:17px;
	}
	.title{
		font-size:15px;

	}

	#btn_profile{

		font-size:15px;	
	}
	#edit_profile{
		margin-right:10px;
	
	}
	#title_user_profile{
		font-size:20px;
		}
}
</style>
@stop
