@extends('salamoji_website_project_files.dashboard')


@section('title' , ' / give_roles')


@section('dashboard')

<style>
    form{
        border:1px solid black;
        border-radius: 20px;
        background-color: #2a2a2a;
        padding:40px;
        opacity:.6;
    }
    fieldset{
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
    #give_role{
        opacity:none;
    }
@media(max-width : 441px){

		#give_roles{

			margin:0px;			

			}

	}
</style>

@if(Session::has('success_message'))
    <div class="alert alert-success">
        {{Session::get('success_message')}}
    </div>
@endif
@if(Session::has('failed_message'))
    <div class="alert alert-danger" id="fa">
        {{Session::get('failed_message')}}
    </div>
@endif

<fieldset id="give_roles" class="text-center">
    <h1>user_role</h1>
    <form action="{{route('selamoji_roles_given')}}" method="POST">
        {{csrf_field()}}
        <div class="form-group">
            <label for="user_name">user_name</label>
            <input type="text" id="user_name" name="user_name" placeholder="user_name" class="form-control">
            @if($errors->any())
            @foreach($errors->get('user_name') as $username)
                <div class="alert alert-danger">
                    {{$username}}
                </div>
            @endforeach
            @endif
        </div>
        <div class="form-group">
            <label for="role_name">role_name</label>
            <input type="text" id="role_name" name="role_name" placeholder="role_name" class="form-control">
        </div>
        @if($errors->any())
        @foreach($errors->get('role_name') as $roleName)
            <div class="alert alert-danger">
                {{$roleName}}
            </div>
        @endforeach
        @endif
        <div>
            <input type="submit" id="give_role" class="btn btn-danger btn-lg" value="Give_Role">
        </div>
    </form>
</fieldset>

<script>
    $(document).ready(function(){
        $('#user_name').focus();
    });
</script>

@stop
