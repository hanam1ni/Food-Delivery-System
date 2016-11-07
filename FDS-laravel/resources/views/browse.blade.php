<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Software Engineer</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">      
		<link href="{{ asset('css/bootstrap-responsive.min.css') }}" rel="stylesheet">
		
		<link href="{{ asset('css/bootstrappage.css') }}" rel="stylesheet"/>
		
		<!-- global styles -->
		<link href="{{ asset('css/flexslider.css') }}" rel="stylesheet"/>
		<link href="{{ asset('css/browse.css') }}" rel="stylesheet"/>

		<!-- scripts -->
		<script src="{{ asset('js/jquery-1.7.2.min.js') }}"></script>
		<script src="{{ asset('js/bootstrap.min.js') }}"></script>				
		<script src="{{ asset('js/superfish.js') }}"></script>	

		<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>

		<!-- scorll magic -->
		<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js"></script>
		<!--[if lt IE 9]>			
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
	</head>
    <body>		
		<div class="top container">
			<div id="trigger"></div>
			<div class="navbar navbar-fixed-top">		
				<div class="navbar-inner main-menu span12">
					<a href="#"><img src="{{ asset('images/logo.png') }}" class="logo pull-left"></a>
					<nav id="menu" class="pull-right">
						<ul>
							<li><a href="./products.html">Type</a>					
								<ul>
									<li><a href="./products.html">Type1</a></li>									
									<li><a href="./products.html">Type2</a></li>
									<li><a href="./products.html">Type3</a></li>								
								</ul>
							</li>															
							<li><a href="./products.html">Place</a></li>
							<li><a href="./products.html">Search</a>
								<ul>
									<li><input type="text"></li>																
								</ul>
							</li>
							<li>
							@if (Auth::check())
							 	<a href="#">{{Auth::user()->username}}</a></li>	
							@else
							 	<a href="./register">Sign Up</a></li>	
							@endif
								
							<li>
							 @if (Auth::check())
							 	<a href="{{ url('/logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
							 @else
							 	<a href="./login">Login</a>
							 @endif
							</li>						
						</ul>
					</nav>
				</div>
			</div>
			<div id="hightlight" class="span6">
				<h1>Food Delivery</h1>
				<h2>We provide food that customers love, day after day after day. People just want more of it.</h2>
			</div>
		</div>
		<div class="container">
			<div class="content">
				<div class="row">
					<div id="content-header" class="span12">
						{{ $type }}
					</div>
				</div>
				<div class="row">
					<div id="menuList" class="span12">
						@foreach ($restaurants as $restaurant)
							<div class="span4 item">
								<div class="img-contain">
									<img src="{{ asset('images/restaurants/res'.$restaurant->restaurant_id.'.jpg') }}">
								</div>
								<div class="span4 item-text">
									<h1>{{ $restaurant->restaurant_name }}</h1>
								</div>
								<div class="triangle"></div>
							</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
		<div class="footer container">

		</div>
		<script src="{{ asset('js/common.js') }}"></script>
		<script src="{{ asset('js/browse.js') }}"></script>
		<script src="{{ asset('js/scroll.js') }}"></script>
    </body>
</html>