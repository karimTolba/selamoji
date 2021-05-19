@extends('salamoji_website_project_files.main_of_salamoji')


@section('title' , ' / edit_user_password')


@section('content')

<link rel="stylesheet" href="{{asset('css/sine_up_page.css')}}">

<div class="container-fluid text-center" id="fieldset">

    @if(session()->has('success_message'))
        <div class="alert alert-success">
            {{session()->get('success_message')}}
        </div>
    @endif
    <fieldset>
        <h1>Edit User Password</h1>
        <form action="/edit_user_password/{{Auth::user()->id}}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="new_password">password</label>
                <input type="password" id="new_password" class="form-control" placeholder="password" name="new_password">
                @if($errors->any())
                    @foreach($errors->get('new_password') as $new_password)
                        <div class="alert alert-danger">
                            {{$new_password}}
                        </div>
                    @endforeach
                @endif
            </div>
            <div class="form-group">
                <label for="confirm_new_password">confirm</label>
                <input type="password" id="confirm_new_password" class="form-control" placeholder="confirm" name="confirm_new_password">
                @if($errors->any())
                @foreach($errors->get('confirm_new_password') as $new_password)
                    <div class="alert alert-danger">
                        {{$new_password}}
                    </div>
                @endforeach
            @endif
            <div class="form-group" id="buttons">
                <input type="submit" value="edit" class="btn btn-danger btn-lg">
                <input type="reset" value="reset" class="btn btn-primary btn-lg">
            </div>
        </form>
    </fieldset>
</div>

<script>

    $(document).ready(function(){

        $('#new_password').focus();

    });

</script>
@stop
