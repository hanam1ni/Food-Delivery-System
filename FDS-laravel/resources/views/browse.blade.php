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
							<li><a href="{{ url('browse') }}">Browse</a></li>
							<li><a href="#">Meal</a>					
								<ul>
									<li><a href="{{ url('/browse/vegan') }}">Vegan</a></li>									
									<li><a href="{{ url('/browse/islamic') }}">Isalmic</a></li>
									<li><a href="{{ url('/browse/meal') }}">All Meal</a></li>								
								</ul>
							</li>															
							<li><a href="{{ url('/browse/dessert') }}">Dessert</a></li>
							<li><a href="{{ url('/browse/drink') }}">Drink</a></li>
							<li><a href="#">Search</a>
								<ul>
									<li id="search">
									<form method="get" action="{{ url('/browse/search/') }}">
										<input type="search" name="search" placeholder="search">
										<input type="submit" style="display:none;"/>
									</form>
									</li>

								</ul>
							</li>
							<li>
							@if (Auth::check())
							 	<a href="#">{{Auth::user()->username}}</a>
							 	<ul>
							 		<li>
							 			<a href="{{ url('logout') }}"
		                                    onclick="event.preventDefault();
		                                             document.getElementById('logout-form').submit();">
		                                    Logout
		                                </a>

		                                <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
		                                    {{ csrf_field() }}
		                                </form>
							 		</li>
							 	</ul>
							 </li>	
							@else
							 	<a href="{{ url('login') }}">Login</a></li>
							@endif					
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
						{{ $head }}
					</div>
				</div>
				<div class="row">
					<div id="menuList" class="span12">
						@if ($type != 'filter')
							@foreach ($restaurants as $restaurant)
								<a href="{{ url('/browse/filter/'.$restaurant->restaurant_id.'/'.$restaurant->restaurant_name.'/'.$type) }}">
									<div class="span4 item">
										<div class="img-contain">
											<img src="{{ asset('images/restaurants/res'.$restaurant->restaurant_id.'.jpg') }}">
										</div>
										<div class="span4 item-text">
											<h1>{{ $restaurant->restaurant_name }}</h1>
										</div>
										<div class="triangle"></div>
									</div>
								</a>
							@endforeach
						@else
							@foreach ($foods as $food)
								<a href="#">
									<div class="span4 item">
										<div class="img-contain">
											<img src="{{ asset('images/food/food'.$food->food_id.'.jpg') }}">
										</div>
										<div class="span4 item-text">
											<h1>{{ $food->food_name }}</h1>
										</div>
										<div class="triangle"></div>
									</div>
								</a>
							@endforeach
						@endif
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