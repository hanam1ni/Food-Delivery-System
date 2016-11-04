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
		<div class="container content"> <!--class payment-->
				<!--	Address information	-->
				<div style="padding-bottom:50px;">
					<div class="payment-header" class="span12">
						<h2>Choose Your Address</h2>
					</div>

				    <!-- address1 -->
				    <label class="row" id="divAddr1">
				        <div class="mark-as-default span1">
				            <input type="radio" name="defaultAddress" id="payOption1" data-toggle="radio" value="4000500003636379" checked>
				        </div>
				        <div class="span8">
				            <div class="address-name">
				                <h4>Address 1</h4>
				            </div>
				            <div class="address-details">
				                <h5 id="address1"></h5>
				                <a class="address-delete" onclick="editAddr('divAddr3',3)">Edit Address</a>
				                &emsp;
				                <a class="address-delete" onclick="deleteAddr('divAddr1',1)">Delete Address</a>		<!--can't delete now !?!?!-->
				            </div>
				        </div>
				    </label>

				    <!-- address2 -->
				    <label class="row" id="divAddr2">
				        <div class="mark-as-default span1">
				            <input type="radio" name="defaultAddress" value="4000500003636379" >
				        </div>
				        <div class="span8">
				            <div class="address-name">
				                <h4>Address 2</h4>
				            </div>
				            <div class="address-details">
				                <h5 id="address2"></h5>
				                <a class="address-delete" onclick="editAddr('divAddr3',3)">Edit Address</a>
				                &emsp;
				                <a class="address-delete" onclick="deleteAddr('divAddr2',2)">Delete Address</a>
				            </div>
				        </div>
				    </label>

				    <!-- address3 -->
				    <label class="row" id="divAddr3" >
				        <div class="mark-as-default span1">
				            <input type="radio" name="defaultAddress" id="payOption3" data-toggle="radio" value="4000500003636379">
				        </div>
				        <div class="span8">
				            <div class="address-name">
				                <h4>Address 3</h4>
				            </div>
				            <div class="address-details">
				                <h5 id="address3"></h5>
				                <a class="address-delete" onclick="editAddr('divAddr3',3)">Edit Address</a>
				                &emsp;
				                <a class="address-delete" onclick="deleteAddr('divAddr3',3)">Delete Address</a>
				                
				            </div>
				        </div>
				    </label>
				    <!-- new address -->
		    	    <div class="new-address">
	                    <button type="button" class="btn btn-danger btn-new-address" id="btn-add" onclick="toAddAddr();">add</button>
	                </div>
	                <!-- add new address model -->
					<!-- Modal -->

					<div class="modal-content" style="display:none;" id="addModal">
						<div class="modal-header">
				        	<h4 class="modal-title" id="myModalLabel">Enter Your New Address</h4>
				      	</div>
				  		<div class="modal-body">
					        <textarea rows="6" style="width:97%;" id="newAddress"></textarea><br>
				      	</div>
				      	<div class="modal-footer">
					        <button type="button" class="btn btn-default" data-dismiss="modal" onclick="closeNewAddr()">Close</button>
					        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal" onclick="addNewAddr()">Save changes</button>
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
								<h4 class="span8" id="firstname"></h4>
							</div>
							<div class="row">
								<h4 class="span4">Last Name :</h4>
								<h4 class="span8" id="lastname"></h4>
							</div>
							<div class="row">
								<h4 class="span4">Phone :</h4>
								<h4 class="span8" id="phone"></h4>
							</div>
							<div class="row">
								<h4 class="span4">E-mail :</h4>
								<h4 class="span8" id="email"></h4>
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
								<input type="radio" name="optionsRadios2" id="payOption1" value="option2" data-toggle="radio" checked>
								<h4>Cash on delivery</h4>
							</label>
						</div>

						<div class="row">
							<label class="radio">
								<input type="radio" name="optionsRadios2" id="payOption2" value="option2" data-toggle="radio">
								<h4>Transfer to US</h4>
							</label>
						</div>
					</div>
				</div>
			<!-- Place Order btn-->
			<div class="span4 btn-accept">
	  			<button class="btn btn-block btn-lg btn-danger" id="placeOrder" onclick="placeOrder()">Place Order</button> 
			</div>



		</div>


			

		<div class="footer container" style="width:100%"></div>

		<script src="js/common.js"></script>
	    <script src="js/jquery.min.js"></script>
		<script src="js/flat-ui.min.js"></script>
	    <script src="js/application.js"></script>


	    <!-- javascript -->
	    <script type="text/javascript">
	    	var firstname = "Tipakorn";
	    	var lastname = "Jackson";
	    	var phone = "0899999999";
	    	var email = "testmail@hotmail.com"

	    	var address1 = "23 ตีทอง แขวง วัดราชบพิตร เขต พระนคร กรุงเทพมหานคร 10200";
	    	var address2 = "818 ซอย ภาณุรังษี แขวง วังบูรพาภิรมย์ เขต พระนคร กรุงเทพมหานคร 10200";
	    	var address3 = null;

	    	document.getElementById("firstname").innerHTML = firstname;
	    	document.getElementById("lastname").innerHTML = lastname;
	    	document.getElementById("phone").innerHTML = phone;
	    	document.getElementById("email").innerHTML = email;


	    	document.getElementById("address1").innerHTML = address1;
	    	document.getElementById("address2").innerHTML = address2;
	    	document.getElementById("address3").innerHTML = address3;


	    	if(address1 === null){
	    		document.getElementById("divAddr1").style.display = 'none';
	    	}

	    	if(address2 === null){
	    		document.getElementById("divAddr2").style.display = 'none';
	    	}

	    	if(address3 === null){
	    		document.getElementById("divAddr3").style.display = 'none';
	    	}

	    	function editAddr(id,addr){
	    		window.alert("Edit Address");
	    	}

	    	function deleteAddr(id,addr){

	    		//document.getElementById(id).style.display = 'none';
	    		console.log(addr);
	    		console.log(address1);
	    		console.log(address2);
	    		console.log(address3);


	    		if(addr === 1){
	    			address1 = address2;
	    			address2 = address3;
	    			address3 = null;
	    		}
	    		if(addr === 2){
	    			address2 = address3;
	    			address3 = null;
	    		}
	    		if(addr === 3){
	    			address3 = null;
	    		}


	    		if(address1 === null){
	    			document.getElementById("divAddr1").style.display = 'none';
	    		}
	    		else if(address2 === null){
	    			document.getElementById("divAddr2").style.display = 'none';
	    		}
	    		console.log("new address");
	    		console.log(address1);
	    		console.log(address2);
	    		console.log(address3);

				document.getElementById("address1").innerHTML = address1;
				document.getElementById("address2").innerHTML = address2;
	    		
	    		document.getElementById("divAddr3").style.display = 'none';
	    	}

	    	function toAddAddr(){
	    		if(address3 === null){
		    		document.getElementById("addModal").style.display = 'block';
		    		document.getElementById("btn-add").style.display = 'none';
		    	}
		    	else{
		    		window.alert("Slot Address is FULL");
		    	}
	    	}

	    	function closeNewAddr(){
	    		document.getElementById("newAddress").value = "";
	    		document.getElementById("addModal").style.display = 'none';
	    		document.getElementById("btn-add").style.display = 'block';
	    	}

	    	function addNewAddr(){
	    		if(address1 === null){
	    			address1 = document.getElementById("newAddress").value;
	    			document.getElementById("divAddr1").style.display = 'block';
	    		}
	    		else if(address2 === null){
	    			address2 = document.getElementById("newAddress").value;
	    			document.getElementById("divAddr2").style.display = 'block';
	    		}
	    		else if(address3 === null){
	    			address3 = document.getElementById("newAddress").value;
	    			document.getElementById("divAddr3").style.display = 'block';
	    		}

	    	
				document.getElementById("address1").innerHTML = address1;
				document.getElementById("address2").innerHTML = address2;
				document.getElementById("address3").innerHTML = address3;

	    		document.getElementById("newAddress").value = "";
	    		document.getElementById("addModal").style.display = 'none';
	    		document.getElementById("btn-add").style.display = 'block';
	    	}

	    	function placeOrder(){
	    		window.alert("place order!!!");
	    	}


	    </script>
    </body>
</html>
