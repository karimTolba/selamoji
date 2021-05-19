@extends('salamoji_website_project_files.main_of_salamoji')


@section('title' , ' / sine_up_page')


@section('content')

<link rel="stylesheet" href="{{asset('css/sine_up_page.css')}}">

<div class="container-fluid text-center" id="fieldset">

    @if(session()->has('success_message'))
        <div class="alert alert-success">
            {{session()->get('success_message')}}
        </div>
    @endif
    <fieldset>
        <h1>Sign Up Form</h1>
        <form action="{{route('selamoji_user.store')}}" method="POST">
            {{csrf_field()}}
            <div class="form-group">
                <label for="user_name">username</label>
                <input type="text" id="user_name" class="form-control" value="{{old('username')}}" placeholder="name" name="username">
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
                <input type="text" id="user_email" class="form-control" value="{{old('email')}}" placeholder="email" name="email">
                @if($errors->any())
                @foreach($errors->get('email') as $email)
                    <div class="alert alert-danger">
                        {{$email}}
                    </div>
                @endforeach
            @endif
            </div>
            <div class="form-group">
                <label for="user_password">password</label>
                <input type="password" id="user_password" class="form-control" placeholder="password" name="password">
                @if($errors->any())
                    @foreach($errors->get('password') as $password)
                        <div class="alert alert-danger">
                            {{$password}}
                        </div>
                    @endforeach
                @endif
            </div>
            <div class="form-group">
                <label for="user_retype_password">confirm</label>
                <input type="password" id="user_retype_password" class="form-control" placeholder="confirm" name="retype_password">
                @if($errors->any())
                    @foreach($errors->get('retype_password') as $retype_password)
                        <div class="alert alert-danger">
                            {{$retype_password}}
                        </div>
                    @endforeach
                @endif
            </div>
            <div class="form-group" id="buttons">
                <input type="submit" value="register" class="btn btn-danger btn-lg">
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
