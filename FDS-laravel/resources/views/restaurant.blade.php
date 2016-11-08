<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Software Engineer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
    <!-- bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">      
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    
    <link href="css/bootstrappage.css" rel="stylesheet"/>
    
    <!-- global styles -->
    <link href="css/flexslider.css" rel="stylesheet"/>
    <link href="css/browse.css" rel="stylesheet"/>

    <link href="css/restaurant.css" rel="stylesheet"/>
    <!-- scripts -->
    <script src="js/jquery-1.7.2.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>       
    <script src="js/superfish.js"></script> 

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>

    <!-- scorll magic -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js"></script>
    <!--[if lt IE 9]>     
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  </head>
    <body>    
    <div class="top container">
      <div id="trigger"></div>
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
      <div id="hightlight" class="span6">
        <h1>Food Delivery</h1>
        <h2>We provide food that customers love, day after day after day. People just want more of it.</h2>
      </div>
    </div>

<!--End Header-->

<!--Start Detail-->

    <div class="container">
      <div class="content">
        <div class="row">
          <div id="content-header" class="span12">
            Restaurant 8
          </div>
          <div class="span12 pic">
            <div class="span4">
              <img src="images/restaurants/res8.jpg">
            </div>
            <div class="span4 header-detail">
              <div class="span8">
                <h3>Rating : <img width="40" height="40" src="images/rating.png">
                <img width="40" height="40" src="images/rating.png">
            	<img width="40" height="40" src="images/rating.png"></h3>

              </div>
              <div class="span8">
                <h3>Detail </h3><p>The best restaurant ever</p>
              </div>
            </div>
          </div>

<!--Start Menu and Comment-->

          <div class="container" id="tab">
              <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#Menu">Menu</a></li>
                <li><a data-toggle="tab" href="#Comment">Comment</a></li>
              </ul>

              <div class="tab-content">
                <div class=" tab-pane fade in active" id="Menu">
<!--Menu-->
                	<div class="row">
					<div id="list"  style="margin-left: 8%" class="span11">
						<div class="span3 item">
							<div class="img-contain">
								<img src="images/menu/menu1.jpg">
							</div>
							<div class="span3 item-text">
								<h1>Menu 1</h1>
							</div>
						</div>
						<div class="span3 item">
							<div class="img-contain">
								<img src="images/menu/menu2.jpg">
							</div>
							<div class="span3 item-text">
								<h1>Menu 2</h1>
							</div>
						</div>
						<div class="span3 item">
							<div class="img-contain">
								<img src="images/menu/menu3.jpg">
							</div>
							<div class="span3 item-text">
								<h1>Menu 3</h1>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div id="list" style="margin-left: 8%" class="span11">
						<div class="span3 item">
							<div class="img-contain">
								<img src="images/menu/menu4.jpg">
							</div>
							<div class="span3 item-text">
								<h1>Menu 4</h1>
							</div>
						</div>
						<div class="span3 item">
							<div class="img-contain">
								<img src="images/menu/menu5.jpg">
							</div>
							<div class="span3 item-text">
								<h1>Menu 5</h1>
							</div>
						</div>
						<div class="span3 item">
							<div class="img-contain">
								<img src="images/menu/menu6.jpg">
							</div>
							<div class="span3 item-text">
								<h1>Menu 6</h1>
							</div>
						</div>
					</div>
				</div>
<!--endMenu-->
                </div>
                <div class="tab-pane fade" id="Comment">
<!--Start Comment-->

				<form>
					<div class="form-group commentBox">
  						<label for="comment1">Comment:</label>
  						<textarea class="form-control span10" rows="6" id="comment1"></textarea>
					</div>

				</form>
					<div class="span8"></div>
					<button type="submit" id="submit" value="Send" class="btn btn-success span1">Submit</button>



<div class="container">
<div class="row">
<div class="span10 commentHead">
<h3>User Comment</h3>
</div><!-- /col-sm-12 -->
</div><!-- /row -->
<div class="row commentForm">
<div class="span1">
<div class="thumbnail">
<img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
</div><!-- /thumbnail -->
</div><!-- /col-sm-1 -->

<div class="span5">
<div class="panel panel-default">
<div class="panel-heading">
<strong>myusername</strong> <span class="text-muted">commented 5 days ago</span>
</div>
<div class="panel-body">
Panel content
</div><!-- /panel-body -->
</div><!-- /panel panel-default -->
</div><!-- /col-sm-5 -->
</div><!-- /row -->

<div class="row commentForm">
<div class="span1">
<div class="thumbnail">
<img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
</div><!-- /thumbnail -->
</div><!-- /col-sm-1 -->

<div class="span5">
<div class="panel panel-default">
<div class="panel-heading">
<strong>myusername</strong> <span class="text-muted">commented 5 days ago</span>
</div>
<div class="panel-body">
Panel content
</div><!-- /panel-body -->
</div><!-- /panel panel-default -->
</div><!-- /col-sm-5 -->
</div><!-- /row -->

</div><!-- /container -->


					<!--<div class="row">
						<div class="span11">
                    		<h4>User1</h4>
                    	</div>
                    	<div class="span11 commentText">
                    		Good Good
                    	</div>
                    	<div class="span11 commentLine"></div>
					</div>

					<div class="row">
                    	<div class="span11">
                    		<h4>User2</h4>
                    	</div>
                    	<div class="span11 commentText">
                    		Good Good Good
                    	</div>
                    	<div class="span11 commentLine"></div>
					</div>-->
<!--End Comment-->
                </div>
              </div>
          </div>
        </div>
      </div>
    </body>
  </html>