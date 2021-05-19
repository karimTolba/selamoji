<!DOCTYPE HTML>
<html>
    <head>
        <title>Selamoji @yield('title')</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1 , shrink-to-fit=no">
        <link rel="icon" href="{{asset('salamoji_project_images/selamoji_icon_6.ico')}}">
        <link rel="stylesheet" href="{{asset('css/css_of_salamoji_main_page.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('css/fontawesome/css/font-awesome.css')}}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfobject/2.1.1/pdfobject.min.js"></script>
        <script src="{{asset('js/bootstrap.js')}}"></script>
	<style>
		
		footer{

			margin-top : 150px;		
	
		}
		
		@media(max-width : 441px){

		.card-body p{

			font-size:15px;			

			}
		.card-body p a{

			font-size:15px;
			
			}

	}
	</style>
    </head>
    <body id="body-css">

            <nav class="navbar navbar-expand-lg navbar-light bg-primary">
                    <a class="navbar-brand" id="brand" data-toggle="tooltip" data-placement="bottom" title="welcome to salamoji website" href="{{route('home')}}">
                        <img src="{{asset('salamoji_project_images/logo.svg')}}" id="navbar_logo" alt="salamoji_logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{route('home')}}" id="links"><i class="fas fa-home"></i> Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('selamoji_features_page')}}" class="nav-link" id="links"><i class="fas fa-bolt"></i> Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('about_us')}}" id="links"><i class="fas fa-address-card"></i> About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('contact')}}" id="links"><i class="fa fa-phone"></i> Contact</a>
                        </li>
                        @if(!Auth::guest() && Auth::user()->hasAnyRole('admin'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('selamoji_dashboard')}}" id="links"><i class="fas fa-tachometer-alt" aria-hidden="true"></i> Dashboard</a>
                            </li>
                        @endif
                    </ul>
                    <div>
                    <ul class="navbar-nav my-2 my-lg-0">
                            @if(Auth::guest())
                                <li class="nav-item my-2 my-lg-0">
                                    <a class="nav-link" href="{{route('selamoji_login_page')}}" id="links"><i class="fas fa-lock"></i> Login</a>
                                </li>

                                <li class="nav-item my-2 my-lg-0">
                                    <a class="nav-link" href="{{route('selamoji_sine_up_page')}}" id="links"><i class="fas fa-user"></i> Sign Up</a>
                                </li>
                            @endif
                            @if(!Auth::guest())
                                <li class="nav-item my-2 my-lg-0">
                                    <a class="nav-link" href="{{route('selamoji_user_logout')}}" id="links"><i class="fas fa-sign-out-alt"></i> Logout</a>
                                </li>
                                <li class="nav-item my-2 my-lg-0">
                                    <a class="nav-link" href="{{route('user_profile')}}" id="links"><i class="fas fa-user"></i> Profile</a>
                                </li>
                            @endif
                    </ul>
                </div>
                </div>
                </nav>
                @if(session()->has('success_message_login'))
                <div class="container-fluid" id="comment_box">
                    <div class="alert alert-success text-center" id="comment_body">
                        <p>{{session()->get('success_message_login')}}</p>
                    </div>
                </div>
                @endif
        @yield('content')

        <footer>
            <div class="conatiner-fluid" id="social_media">
                    <span class="social_media_item">
                        <a data-toggle="tooltip" data-placement="bottom" title="facebook" href="http://www.facebook.com/selamoji"><span class="fab fa-facebook-f color" id="facebook"></span></a>
                    </span>
                    <span class="social_media_item">
                        <a data-toggle="tooltip" data-placement="bottom" title="twitter" href="https://twitter.com/selamoji"><span class="fab fa-twitter" id="twitter"></span></a>
                    </span>
                    <span class="social_media_item">
                        <a data-toggle="tooltip" data-placement="bottom" title="instagram" href="https://www.instagram.com/selamoji/"><span class="fab fa-instagram" id="instagram"></span></a>
                    </span>
                    <span class="social_media_item">
                        <a data-toggle="tooltip" data-placement="bottom" title="youtube" href="https://www.youtube.com/watch?v=UCrR4h7EH_U"><span class="fab fa-youtube" id="youtube"></span></a>
                    </span>
            </div>
            <div class="conainer-fluid">

                    <div class="text-center copy_rights">
                        <div class="card-body">
                                <a href="https://apps.apple.com/us/app/selamoji/id1378284662"><button class="store" data-toggle="tooltip" data-placement="bottom" title="ios store"><span style="font-size:15px;position:absolute;top:3px;margin-right:auto;margin-left:auto;margin-bottom:10px;width:90%">Download on the</span><i class="fab fa-apple"></i> Apple Store</button></a>
                                <a href="https://play.google.com/store/apps/details?id=com.selamoji.android&hl=en_us"><button class="store" id="margin_google_button" data-toggle="tooltip" data-placement="bottom" title="play store"><span style="font-size:15px;position:absolute;top:3px;margin-right:auto;margin-left:auto;margin-bottom:5px;width:70%">Get it on</span><i class="fab fa-google-play"></i> Google Play</button></a>
                        </div>
                    </div>
                    <div id="copy_right">

                        <div class="text-center copy_rights">
                            <div class="container-fluid">
                                <div class="card-body">
                                    <P><em>&copy;</em>2019<a href="https://www.peerinkwell.com" target="_blank">Peer Inkwell</a>. All rights reserved.</p>
                                    <p><a class="privacy_rights" href="{{asset('Selamoji-Privacy-Policy.pdf')}}" target="_blank">Privacy Policy</a></P>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </footer>
    </body>

</html>
