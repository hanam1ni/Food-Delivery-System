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
		<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet"/> 
		<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"/> 
		<link href="{{ asset('css/bootstrap-responsive.min.css') }}" rel="stylesheet"/> 
		<link href="{{ asset('css/bootstrappage.css') }}" rel="stylesheet"/> 
			
	    <!-- Loading Flat UI -->
	    <!--<link href="css/flat-ui.css" rel="stylesheet">-->
		

		<!-- global styles -->
		<link href="{{ asset('css/flexslider.css') }}" rel="stylesheet"/>
		<link href="{{ asset('css/nav.css') }}" rel="stylesheet"/>
		<link href="{{ asset('css/browse.css') }}" rel="stylesheet"/>
		<link href="{{ asset('css/payment.css') }}" rel="stylesheet"/>
		<link href="{{ asset('css/flexslider.css') }}" rel="stylesheet"/>

		<!-- scripts -->
		<script src="{{ asset('js/jquery-1.7.2.min.js') }}"></script>
		<script src="{{ asset('js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('js/superfish.js') }}"></script>
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
		</div>


		<!-- content of payment page-->
		<div class="container content payment"> <!--class payment-->
				<!--	Address information	-->
				<div style="padding-bottom:50px;">
					<div class="payment-header" class="span12">
					<h2>Choose Your Address</h2>
					</div>
				
				    <!-- address1 -->
				    <label class="row" id="divAddr1">
				        <div class="mark-as-default span1">
				            <input type="radio" name="defaultAddress" id="addressOption1" data-toggle="radio" value="4000500003636379" checked>
				        </div>
				        <div class="span8">
				            <div class="address-name">
				                <h4>Address 1</h4>
				            </div>
				            <div class="address-details">
				                <h5 id="address1">{{Auth::user()->address}}</h5>
				                <a class="address-delete" onclick="toEditAddr('divEdit1','divAddr1','address1','editField1')">Edit Address</a>
				                &emsp;
				                <a class="address-delete" onclick="deleteAddr('divAddr1',1)">Delete Address</a>		<!--can't delete now !?!?!-->
				            </div>
				        </div>
				    </label>
					<div class="modal-content" style="display:none;" id="divEdit1">
						<div class="modal-header">
				        	<h4 class="modal-title" id="myModalLabel">Edit Your Address</h4>
				      	</div>
				  		<div class="modal-body">
					        <textarea rows="6" style="width:97%;" id="editField1"></textarea><br>
				      	</div>
				      	<div class="modal-footer">
					        <button type="button" class="btn btn-default" data-dismiss="modal" onclick="closeEditAddr('divEdit1','divAddr1','address1','editField1')">Cancel</button>
					        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal" onclick="editAddr('divAddr1','divEdit1','address1','editField1',1)">Save changes</button>
				        </div>
					</div>

				    <!-- address2 -->
				    <label class="row" id="divAddr2">
				        <div class="mark-as-default span1">
				            <input type="radio" name="defaultAddress" id="addressOption2" value="4000500003636379" >
				        </div>
				        <div class="span8">
				            <div class="address-name">
				                <h4>Address 2</h4>
				            </div>
				            <div class="address-details">
				                <h5 id="address2">{{Auth::user()->address2}}</h5>
				                <a class="address-delete" onclick="toEditAddr('divEdit2','divAddr2','address2','editField2')">Edit Address</a>
				                &emsp;
				                <a class="address-delete" onclick="deleteAddr('divAddr2',2)">Delete Address</a>
				            </div>
				        </div>
				    </label>
					<form class="modal-content" style="display:none;" id="divEdit2">
						<div class="modal-header">
				        	<h4 class="modal-title" id="myModalLabel">Edit Your Address</h4>
				      	</div>
				  		<div class="modal-body">
					        <textarea rows="6" style="width:97%;" id="editField2"></textarea><br>
				      	</div>
				      	<div class="modal-footer">
					        <button type="button" class="btn btn-default" data-dismiss="modal" onclick="closeEditAddr('divEdit2','divAddr2','address2','editField2')">Cancel</button>
					        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal" onclick="editAddr('divAddr2','divEdit2','address2','editField2',2)">Save changes</button>
				        </div>
					</form>

				    <!-- address3 -->
				    <label class="row" id="divAddr3" >
				        <div class="mark-as-default span1">
				            <input type="radio" name="defaultAddress" id="addressOption3" data-toggle="radio" value="4000500003636379">
				        </div>
				        <div class="span8">
				            <div class="address-name">
				                <h4>Address 3</h4>
				            </div>
				            <div class="address-details">
				                <h5 id="address3">{{Auth::user()->address3}}</h5>
				                <a class="address-delete" onclick="toEditAddr('divEdit3','divAddr3','address3','editField3')">Edit Address</a>
				                &emsp;
				                <a class="address-delete" onclick="deleteAddr('divAddr3',3)">Delete Address</a>
				            </div>
				        </div>
				    </label>
					<form class="modal-content" style="display:none;" id="divEdit3">
						<div class="modal-header">
				        	<h4 class="modal-title" id="myModalLabel">Edit Your Address</h4>
				      	</div>
				  		<div class="modal-body">
					        <textarea rows="6" style="width:97%;" id="editField3"></textarea><br>
				      	</div>
				      	<div class="modal-footer">
					        <button type="button" class="btn btn-default" data-dismiss="modal" onclick="closeEditAddr('divEdit3','divAddr3','address3','editField3')">Cancel</button>
					        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal" onclick="editAddr('divAddr3','divEdit3','address3','editField3',3)">Save changes</button>
				        </div>
					</form>

				    <!-- new address -->
		    	    <div class="new-address">
	                    <button type="button" class="btn btn-danger btn-new-address" id="btn-add" onclick="toAddAddr();">add</button>
	                </div>
	                <!-- add new address model -->
					<!-- Modal -->

					<form class="modal-content" style="display:none;" id="addModal">
						{{ csrf_field() }}
						<div class="modal-header">
				        	<h4 class="modal-title" id="myModalLabel">Enter Your New Address</h4>
				      	</div>
				  		<div class="modal-body">
					        <textarea rows="6" style="width:97%;" id="newAddress" name="name2"></textarea><br>
				      	</div>
				      	<div class="modal-footer">
					        <button type="button" class="btn btn-default" data-dismiss="modal" onclick="closeNewAddr()">Cancel</button>
					        <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#myModal" onclick="addNewAddr()">Save changes</button>
					        <!-- data-toggle="modal" data-target="#myModal" onclick="addNewAddr()"-->
				        </div>
					</form>
				</div>

				<!--	Personal information	-->
				<div>
					<div class="payment-option">
						<div class="payment-header">
							<h2>Personal Infomation :</h2>
						</div>
						<div>
							<div class="row">
								<h4 class="span2">username :</h4>
								<h4 class="span8" id="username">{{Auth::user()->username}}</h4>
							</div>
							<div class="row">
								<h4 class="span2">Phone :</h4>
								<h4 class="span8" id="phone">{{Auth::user()->phone}}</h4>
							</div>
							<div class="row">
								<h4 class="span2">E-mail :</h4>
								<h4 class="span8" id="email">{{Auth::user()->email}}</h4>
							</div>
						</div>
					</div>
				</div>


				<!-- Payment option	-->
				<div>
					<div class="payment-header">
						<h2>Payment Information :</h2>
					</div>
					<div class=payment-info>
						<div class="row">
							<label class="radio">
								<input type="radio" name="optionsRadios2" id="payOption1" value="option1" data-toggle="radio" checked="checked">
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

		<div class="footer container"></div>

		<script src="{{ asset('js/common.js') }}"></script>
		<script src="{{ asset('js/jquery.min.js') }}"></script>
		<script src="{{ asset('js/flat-ui.min.js') }}"></script>
		<script src="{{ asset('js/application.js') }}"></script>

	    <!-- javascript -->
	    <script type="text/javascript">

			$.ajaxSetup({
			    headers: {
			        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			    }
			});
			var cost = 150;
			var username = document.getElementById("username").innerHTML;
	    	var address1 = document.getElementById("address1").innerHTML;
	    	var address2 = document.getElementById("address2").innerHTML;
	    	var address3 = document.getElementById("address3").innerHTML;
	    	console.log(address3);

	    	if(address2 == ''){
	    		address2 = null;
	    	}
	    	if(address3 == ''){
	    		console.log("address3 null");
	    		address3 = null;
	    	}

	    	document.getElementById("address2").innerHTML = address2;
	    	document.getElementById("address3").innerHTML = address3;

	    	if(address2 === null){
	    		document.getElementById("divAddr2").style.display = 'none';
	    	}

	    	if(address3 === null){
	    		document.getElementById("divAddr3").style.display = 'none';
	    	}

	    	function toEditAddr(id2,id1,addr,editField){
	    		document.getElementById(editField).value = document.getElementById(addr).innerHTML;
	    		document.getElementById(id1).style.display = 'none'
	    		document.getElementById(id2).style.display = 'block'
	    	}

	    	function editAddr(id2,id1,addr,editField,count){
	    		if(document.getElementById(editField).value === ''){
	    			window.alert("address is empty!!");
	    			return;
	    		}

	    		if(count === 1){
	    			address1 = document.getElementById(editField).value;
	    			document.getElementById(addr).innerHTML = address1;
	    		}
	    		else if(count === 2){
	    			address2 = document.getElementById(editField).value;
	    			document.getElementById(addr).innerHTML = address2;
	    		}
	    		else{
    				address3 = document.getElementById(editField).value;
	    			document.getElementById(addr).innerHTML = address3;
	    		}

	    		document.getElementById(id1).style.display = 'none'
	    		document.getElementById(id2).style.display = 'block'	    

	    		console.log(addr);
	    		console.log(address1);
	    		console.log(address2);
	    		console.log(address3);

	    		updateAddress(address1,address2,address3);
	    	}

	    	function closeEditAddr(id2,id1,addr,editField){
	    		document.getElementById(editField).value = '';
	    		document.getElementById(id1).style.display = 'block'
	    		document.getElementById(id2).style.display = 'none'
	    	}

	    	function deleteAddr(id,addr){

	    		//document.getElementById(id).style.display = 'none';
	    		console.log(addr);
	    		console.log(address1);
	    		console.log(address2);
	    		console.log(address3);

	    		if(addr === 1 && address2 !== null){
	    			address1 = address2;
	    			address2 = address3;
	    			address3 = null;
	    		}
	    		else if(addr === 1 && address2 === null){
	    			window.alert("you must have less one address!!");
	    		}
				else if(addr === 2){
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

	    		updateAddress(address1,address2,address3);
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

	    		updateAddress(address1,address2,address3);

				document.getElementById("address1").innerHTML = address1;
				document.getElementById("address2").innerHTML = address2;
				document.getElementById("address3").innerHTML = address3;

	    		document.getElementById("newAddress").value = "";
	    		document.getElementById("addModal").style.display = 'none';
	    		document.getElementById("btn-add").style.display = 'block';
	    	}

	    	function updateAddress(addr1, addr2 ,addr3){
	    		console.log(username);

	    		$.post('../test',
	    			{
	    				username	: username,
	    				address1 	: addr1,
	    				address2 	: addr2,
	    				address3	: addr3
	    			},
	    			function(){
	    				console.log('response');
	    			}
	    		);
	    	}
	    	function placeOrder(){
	    		var addressOption1 = document.getElementById('addressOption1').checked;
	    		var addressOption2 = document.getElementById('addressOption2').checked;
	    		var addressOption3 = document.getElementById('addressOption3').checked;
	    		//var address3 = document.getElementById('addressOption2').checked;
	    		var payOption = document.getElementById('payOption1').checked;
	    		
	    		var address;
	    		if(addressOption3){
	    			address = address3;
	    		}
	    		else if(addressOption2){
	    			address = address2;
	    		}
	    		else{
	    			address = address1;
	    		}
	    		if(address == null){
	    			alert("You must should you address!");
	    			return;
	    		}
	    		console.log(address);

	    		if(payOption){ //payOption1
	    			console.log("option1");
	    		}
	    		else{

	    			console.log("option2"+'address');
	    			window.location.replace('../bank/'+{{$cost}}+'/'+address);
		    		/*$.post('./bank',
		    			{
		    				address : address
		    			},
		    			function(){
		    				console.log("call bank controller");
		    				//window.location.replace('./bank');
		    			}
		    		);*/
	    		}
	    	}

	    </script>
    </body>
</html>
