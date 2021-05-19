@extends('salamoji_website_project_files.dashboard')


@section('title' , ' / create_roles')


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
    #make_role{
        opacity:none;
    }
</style>

@if(Session::has('success_message'))
    <div class="alert alert-success">
        {{Session::get('success_message')}}
    </div>
@endif
<fieldset class="text-center">
    <h1>create_roles</h1>
    <form action="{{route('selamoji_roles_created')}}" method="POST">
        {{csrf_field()}}
        <div class="form-group">
            <label for="role_name">role_name</label>
            <input type="text" id="role_name" name="role_name" placeholder="role_name" class="form-control"><br>
        </div>
            <input type="submit" id="make_role" class="btn btn-danger btn-lg" value="Create_Role">
        </div>
    </form>
</fieldset>

<script>
    $(document).ready(function(){
        $('#role_name').focus();
    });
</script>

@stop
