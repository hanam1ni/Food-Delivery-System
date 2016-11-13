<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Software Engineer</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->		

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- bootstrap -->
		<link href="../../css/bootstrap.css" rel="stylesheet">   
		<link href="../../css/bootstrap.min.css" rel="stylesheet">      
		<link href="../../css/bootstrap-responsive.min.css" rel="stylesheet">
		
		<link href="../../css/bootstrappage.css" rel="stylesheet"/>
			
	    <!-- Loading Flat UI -->
	    <!--<link href="css/flat-ui.css" rel="stylesheet">-->
		

		<!-- global styles -->
		<link href="{{ asset('css/flexslider.css') }}" rel="stylesheet"/>
		<link href="{{ asset('css/nav.css') }}" rel="stylesheet"/>
		<link href="{{ asset('css/browse.css') }}" rel="stylesheet"/>
		<link href="../css/flexslider.css" rel="stylesheet"/>
		<link href="../css/browse.css" rel="stylesheet"/>
		<link href="../css/payment.css" rel="stylesheet"/>

		<!-- scripts -->
		<script src="../../js/jquery-1.7.2.min.js"></script>
		<script src="../../js/bootstrap.min.js"></script>				
		<script src="../../js/superfish.js"></script>	
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
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
    	<!-- class top contain picture-->
		<div class="container">
			<div class="navbar-inner main-menu span12">
				<a href="#"><img src="../images/logo.png" class="logo pull-left"></a>
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
						<li><a href="#">{{Auth::user()->username}}</a></li>					
						<li><a href="{{ url('/logout') }}"
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                        </li>				
					</ul>
				</nav>
			</div>
		</div>

		<!-- content of payment page-->
		<form class="container content payment"> <!--class payment-->
			<div>
				<div class="payment-option">
					<div class="payment-header">
						<h2>Pay :</h2>
					</div>
					<form>
							<h4 >username :</h4>
							<h5  style="margin-left: 50px;" id="username">{{Auth::user()->username}}</h5>
						
							<h4 >Amount :</h4>
							<h5 style="margin-left: 50px;" id="amount">123.45 bath</h5>
						
							<h4>Address :</h4>
							<h5  style="margin-left: 50px;" id="addresses">{{$addresses}}</h5>
						
							<h4>Bank :</h4>
							<select style="margin-left: 50px;">
								<option value="null">select Bank</option>
								<option value="bank">bank1</option>
							</select>

							<h4 >Account number :</h4>
							<input style="height: 27px;margin-left:50px;" type="text" id="account" maxlength="10" size="10" placeholder="Account number"></input>
							
							<h4>Enter OTP :</h4>
							<input  id="otp" maxlength="5" size="5" placeholder=" OTP"  style="width:50px; margin-left: 50px;"></input>
					</div>
				</div>
			</div>

			<!-- Place Order btn-->
			<div class="span4 btn-accept">
	  			<button type="submit" class="btn btn-block btn-lg btn-danger" id="placeOrder" onclick="placeOrder()">Pay now</button> 
			</div>
		</form>			

		<div class="footer container"></div>

		<script src="../../js/common.js"></script>
	    <script src="../../js/jquery.min.js"></script>
		<script src="../../js/flat-ui.min.js"></script>
	    <script src="../../js/application.js"></script>

	    <script type="text/javascript">
	    	
	    </script>
	    <!--
			"from_Account"=> "1234567890",
			  "to_Account"=> "9876543210",
			  "Amount"=> 123.56,
			"opt"=>xxxxxx
	    -->
    </body>
</html>