@extends('salamoji_website_project_files.main_of_salamoji')


@section('title' , ' / contact')


@section('content')

<link rel="stylesheet" href="{{asset('css/contact_page.css')}}">

<div class="container-fluid">
    <fieldset class="text-center">

            @if(session()->has('success_message'))
                <div class="alert alert-success">
                    {{session()->get('success_message')}}
                </div>
            @endif

            <h1>Contact form</h1>
            <form action="{{route('contact_form')}}" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="first_name">first name</label>
                    <input type="text" id="first_name" class="form-control" value="{{old('first_name')}}" placeholder="first_name" name="first_name">
                    @if($errors->any())
                        @foreach($errors->get('first_name') as $first_name)
                            <div class="alert alert-danger">
                                {{$first_name}}
                            </div>
                        @endforeach
                    @endif
                </div>
                <div class="form-group">
                    <label for="last_name">last name</label>
                    <input type="text" id="last_name" class="form-control" value="{{old('last_name')}}" placeholder="last_name" name="last_name">
                    @if($errors->any())
                    @foreach($errors->get('last_name') as $last_name)
                        <div class="alert alert-danger">
                            {{$last_name}}
                        </div>
                    @endforeach
                @endif
                </div>
                <div class="form-group">
                        <label for="country">email</label>
                        <input type="text" id="country" class="form-control" value="{{old('email')}}" placeholder="email" name="email">
                        @if($errors->any())
                        @foreach($errors->get('email') as $email)
                            <div class="alert alert-danger">
                                {{$email}}
                            </div>
                        @endforeach
                    @endif
                    </div>
                <div class="form-group">
                        <label for="subject">subject</label>
                        <textarea id="subject" class="form-control" placeholder='write some thing....' name="subject" rows="10">
                        </textarea>
                        @if($errors->any())
                        @foreach($errors->get('subject') as $subject)
                            <div class="alert alert-danger">
                                {{$subject}}
                            </div>
                            @endforeach
                        @endif
                </div>
                <div class="form-group" id="buttons">
                    <input type="submit" value="submit" class="btn btn-danger btn-lg">
                    <input type="reset" value="reset" class="btn btn-primary btn-lg">
                </div>
            </form>
    </fieldset>
</div>

<script>

    $(document).ready(function(){

        $('#first_name').focus();

    });

</script>


@stop
