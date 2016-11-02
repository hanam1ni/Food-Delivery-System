<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Software Engineer</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<link href="css/bootstrap.css" rel="stylesheet">   
		<link href="css/bootstrap.min.css" rel="stylesheet">      
		<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
		
		<link href="css/bootstrappage.css" rel="stylesheet"/>
			
	    <!-- Loading Flat UI -->
	    <!--<link href="css/flat-ui.css" rel="stylesheet">-->
		

		<!-- global styles -->
		<link href="css/flexslider.css" rel="stylesheet"/>
		<link href="css/browse.css" rel="stylesheet"/>
		<link href="css/payment.css" rel="stylesheet"/>

		<!-- scripts -->
		<script src="js/jquery-1.7.2.min.js"></script>
		<script src="js/bootstrap.min.js"></script>				
		<script src="js/superfish.js"></script>	
		<!--[if lt IE 9]>			
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
	</head>
    <body>		
    	<!-- class top contain picture-->
		<div class="top container">
			<div class="navbar-inner main-menu span12">
				<a href="#"><img src="images/logo.png" class="logo pull-left"></a>
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
						<li><a href="#">Login</a></li>					
						<li><a href="register.html">Sign Up</a></li>				
					</ul>
				</nav>
			</div>
			<!--web banner-->
			<div id="hightlight" class="span6">
				<h1>Food Delivery</h1>
				<h2>We provide food that customers love, day after day after day. People just want more of it.</h2>
			</div>
		</div>


		<!-- content of payment page-->
		<div class="container payment content">
				<!--	Address information	-->
				<div>
					<div class="payment-header" class="span12">
						<h2>Choose Your Address</h2>
					</div>
					<div class="row">
						<div class="span12 address-choose">
							<label class="span2 item radio" style="margin-top:10px;">
								<input type="radio" name="optionsRadios1" id="optionsRadios1" value="option1" data-toggle="radio">
								<span class="thumbnail address-option">8233 Burwell Circle, Port Charlotte, FL 33981 USA
								</span>
							</label>
							<label class="span2 item radio">
								<input type="radio" name="optionsRadios1" id="optionsRadios1" value="option1" data-toggle="radio">
								<span class="thumbnail address-option Quote">465 minburee, Port sengsab, 10510 Bangkok</span>
							</label>
						</div>
					</div>
				</div>

				<!--	Personal information	-->
				<div>
					<div class="payment-option">
						<div class="payment-header">
							<h2>Personal Infomation :</h2>
						</div>
						<div>
							<div class="row">
								<h4 class="span4">First Name :</h4>
								<h4 class="span8">eiei</h4>
							</div>
							<div class="row">
								<h4 class="span4">Last Name :</h4>
								<h4 class="span8">eueu</h4>
							</div>
							<div class="row">
								<h4 class="span4">Phone :</h4>
								<h4 class="span8">0899899969</h4>
							</div>
						</div>
					</div>
				</div>

				<!--	Payment information	-->
				<div>
					<div class="payment-header">
						<h2>Payment Information :</h2>
					</div>
					<div class=payment-info>
						<div class="row">
							<label class="radio">
								<input type="radio" name="optionsRadios2" id="optionsRadios2" value="option2" data-toggle="radio">
								<h4>Cash on delivery</h4>
							</label>
						</div>

						<div class="row">
							<label class="radio">
								<input type="radio" name="optionsRadios2" id="optionsRadios2" value="option2" data-toggle="radio">
								<h4>Transfer to US</h4>
							</label>
						</div>
					</div>
				</div>

			<form action="{{ url('task') }}" method="POST">
				{{ csrf_field() }}

			  	User name: <input type="text" name="username"><br>
			  	Email: <input type="text" name="email"><br>
			  	password: <input type="text" name="password"><br>
			  	address: <input type="text" name="address"><br>
			  	phone: <input type="text" name="phone"><br>
	        	<button type="submit" class="btn btn-default">
	                <i class="fa fa-plus"></i> Add Task
	            </button>
			</form>


			<div class="span4 btn-accept">
	  			<a href="#fakelink" class="btn btn-block btn-lg btn-info">Place Order</a>
			</div>

			<br><br><br><br>
		</div>


			<!-- Place Order btn-->

<!-- Button trigger modal -->



		<div class="footer container"></div>

		<script src="js/common.js"></script>
	    <script src="js/jquery.min.js"></script>
		<script src="js/flat-ui.min.js"></script>
	    <script src="js/application.js"></script>
    </body>
</html>
