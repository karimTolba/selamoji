@extends('salamoji_website_project_files.dashboard')


@section('title' , ' / delete_user')


@section('dashboard')

<style>
    #user_information{
        border:1px solid black;
        border-radius: 20px;
        background-color: #2a2a2a;
        padding:40px;
        opacity:.6;
        margin-bottom:50px;
        padding:10px
    }
    form{
        width:50%;
        margin-left:auto;
        margin-right:auto;
        margin-bottom: 20px;
        margin-top:50px;
    }
    fieldset{
        margin-left:20px;
    }
    #title_delete_user{
        font-family:'Pacifico', cursive;
        font-weight:bold;
        color:white;
        margin-top:30px;
        margin-bottom:30px;
    }
    .information{
        padding:10px;
        color:white;
        font-size: 30px;
        font-weight:bold;
        border-bottom:1px solid white;
    }
    #last{
        margin-bottom: 30px;
    }
@media (max-width : 441px){

		#delete_user{

			margin:0px;
		
		}
		.information{

			font-size:20px;
		}
		#title_delete_user{

			font-size:25px;
		}

	} 

</style>

@foreach($user_info as $result)
    <fieldset id="delete_user" class="text-center">
        <h1 id="title_delete_user">user information</h1>
        <div class="container-fluid" id="user_information">
            <div class="information">
                <p>user name : </p>
                <p>{{$result->name}}</p>
            </div>
            <div class="information">
                <p>user email : </p>
                <p>{{$result->email}}</p>
            </div>
@endforeach
            <div class="information">
                <p>user role : </p>
                @foreach($user_role as $user_roles)
                    <p>{{$user_roles->name}}</p>
                @endforeach
            </div>
            <form action="{{route('selamoji_user.destroy' , $result->id)}}" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <input type="submit" class="btn btn-danger btn-lg" value="DELETE">
            </form>
        </div>
    </fieldset>


@stop
