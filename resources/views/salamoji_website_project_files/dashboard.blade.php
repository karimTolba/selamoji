@extends('salamoji_website_project_files.main_of_salamoji')


@section('title' , ' / admin_dashboard')


@section('content')

<link rel="stylesheet" href="{{asset('css/dashboard.css')}}">

    <div class="container-fluid">

            <div id="sidebar_dashboard">

                <h4 id="panel_header"><i class="fas fa-tachometer-alt"></i> Dashboard</h4>

                <ol id="panel_body">
				<li><i class="fas fa-address-book"></i>&nbsp;&nbsp; <a href="{{route('selamoji_user_list')}}">Users List</a></li>
				        <li><i class="fas fa-traffic-light"></i>&nbsp;&nbsp;&nbsp; <a href="{{route('selamoji_role_list')}}">Roles List</a></li>
				<li><i class="fas fa-user-tag"></i>&nbsp; <a href="{{route('selamoji_give_roles')}}">Give Roles</a></li>
                    		<li><i class="fas fa-user-slash"></i>&nbsp; <a href="{{route('selamoji_remove_user')}}">Remove Users</a></li>
                   		<li><i class="fas fa-sign-out-alt"></i>&nbsp; <a href="{{route('selamoji_user_logout')}}">Log out</a></li>
                </ol>
            </div>
            <div>

                @yield('dashboard')

            </div>
    </div>

<style>
    body{
        background-image:url("{{asset('salamoji_project_images/background_1.jpg')}}");
        background-position:center ;
        background-repeat: no-repeat;
    }
	@media(max-width : 441px){

		#sidebar_dashboard{

			width:80%;
			}

	}
</style>


@stop
