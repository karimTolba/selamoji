@extends('salamoji_website_project_files.main_of_salamoji')


@section('title' , ' / '.' '.Auth::user()->name.' '.'profile')


@section('content')

<link rel="stylesheet" href="{{asset('css/sine_up_page.css')}}">

<style>
    #profile_image{
        margin-top:40px;
    }
    @media (max-width : 633px) {
        #image{
            display:none;
        }

    }

</style>

<div class="container-fluid text-center" id="fieldset">

    @if(session()->has('success_message'))
        <div class="alert alert-success">
            {{session()->get('success_message')}}
        </div>
    @endif
    <fieldset>
        <h1>Edit User Form</h1>
        <form action="/selamoji_user/{{$result->id}}" enctype="multipart/form-data" method="POST">
            <input type="hidden" name="_method" value="PUT">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="user_name">username</label>
                <input type="text" id="user_name" class="form-control" value="{{$result->name}}" placeholder="name" name="username">
                @if($errors->any())
                    @foreach($errors->get('username') as $username)
                        <div class="alert alert-danger">
                            {{$username}}
                        </div>
                    @endforeach
                @endif
            </div>
            <div class="form-group">
                <label for="user_email">email</label>
                <input type="text" id="user_email" class="form-control" value="{{$result->email}}" placeholder="email" name="email">
                @if($errors->any())
                @foreach($errors->get('email') as $email)
                    <div class="alert alert-danger">
                        {{$email}}
                    </div>
                @endforeach
            @endif
            </div>
            <div  id="profile_image" class="from-group">
                <label id="btn_image" for="image" class="btn btn-file btn-primary btn-lg">
                    profile_image<input type="file" name="image" id="image">
                </label>
            </div>
            <div class="form-group" id="buttons">
                <input type="submit" value="edit" class="btn btn-danger btn-lg">
                <input type="reset" value="reset" class="btn btn-primary btn-lg">
            </div>
        </form>
    </fieldset>
</div>

<script>

    $(document).ready(function(){

        $('#user_name').focus();

    });

</script>
@stop
