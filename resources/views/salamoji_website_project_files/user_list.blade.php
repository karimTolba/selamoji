@extends('salamoji_website_project_files.dashboard')


@section('title' , ' / user_list')


@section('dashboard')

<style>
    #list_container{

        font-size: 30px;
        margin:50px auto;
        width:50%;
        background-color: black;
        opacity: .8;
        padding: 20px;
        border-radius: 20px;

    }
    #list_container #list{

        list-style-type: none;

    }
    #list_container #list #li{

        color: white;
        font-size: 30px;
        font-weight:bold;
        font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    }
    #head{

        color:white;
        text-align: center;
        margin: 50px auto;
        width:70%;
        letter-spacing: -1px;
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        font-size: 50px;
    }
@media (max-width : 441px){

	#head{
	
		font-size:25px;
	
	}
	#list_container #list #li{
	
		font-size:20px;
		
	}
	#list_container{
	
		width:90%;
		padding-left:0px;
	}

}
@media(max-width : 830px ){

	#list_container{
	
		width:90%;
		padding-left:0px;
	}


}
</style>

    @if(count($user_list))

    <h1 id="head">User List</h1>
        <div id="list_container">
            <ul id="list">
                @foreach($user_list as $users)

                    <li id="li">{{$users->id}} - {{$users->name}}</li>

                @endforeach
            </ul>
        </div>

    @endif

@stop
