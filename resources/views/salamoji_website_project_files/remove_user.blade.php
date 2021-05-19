@extends('salamoji_website_project_files.dashboard')


@section('title' , ' / remove_user')


@section('dashboard')

<style>
    form{
        border:1px solid black;
        border-radius: 20px;
        background-color: #2a2a2a;
        padding:40px;
        opacity:.6;
    }
    #search_container{
        margin-left:20px;
        padding: 20px;
    }
    h1{
        font-family:'Pacifico', cursive;
        color:white;
        margin-bottom: 20px;
    }
    .alert{
        margin-top:50px;
        padding:10px;
        text-align: center;
        font-size:30px;
    }
    label{
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        color:white;
        font-size: 30px;
    }
    #search{
        opacity: .8;
    }
@media(max-width : 441px){

		#search_container{

			margin:0px;			

			}

	}
</style>
@if(Session::has('success_deleted'))
    <div class="alert alert-success">
        {{Session::get('success_deleted')}}
    </div>
@endif
@if(Session::has('failed_message'))
    <div class="alert alert-danger" id="fa">
        {{Session::get('failed_message')}}
    </div>
@endif
    <fieldset id="search_container" class="text-center">
        <h1>Search for user</h1>
        <form action="{{route('search_user')}}" method="POST">
            {{csrf_field()}}
            <div class="form-group">
                <label for="search_field">user_name</label>
                <input type="text" id="search_field" name="search" placeholder="user_name" class="form-control"><br>
                <input type="submit" id="search" class="btn btn-danger btn-lg" value="search">
            </div>
        </form>
    </fieldset>

    <script>
        $(document).ready(function(){
            $('#search_field').focus();
        });
    </script>

@stop
