<!DOCTYPE html>
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

        <!-- scripts -->
        <script src="js/jquery-1.7.2.min.js"></script>
        <script src="js/bootstrap.min.js"></script>               
        <script src="js/superfish.js"></script> 
        <!--[if lt IE 9]>           
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
            <script src="js/respond.min.js"></script>
        <![endif]-->
         <link href="css/home.css" rel="stylesheet"/>
         <script language="javascript" type="text/javascript" src="{{asset('js/mootools-1.2.1-core.js')}}"></script>
		<script language="javascript" type="text/javascript" src="{{asset('js/mootools-1.2-more.js')}}"></script>
		<script language="javascript" type="text/javascript" src="{{asset('js/slideitmoo-1.1.js')}}"></script>
		<script language="javascript" type="text/javascript">
		window.addEvents({
			'domready': function () { /* thumbnails example , div containers */
				new SlideItMoo({
					overallContainer: 'SlideItMoo_outer',
					elementScrolled: 'SlideItMoo_inner',
					thumbsContainer: 'SlideItMoo_items',
					itemsVisible: 5,
					elemsSlide: 3,
					duration: 200,
					itemsSelector: '.SlideItMoo_element',
					itemWidth: 140,
					showControls: 1
				});
			},

		});
		</script>
    </head>
    <body>      
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
        <div id="hightlight" class="span6">
				<h1>Food Delivery</h1>
				<h2>We provide food that customers love, day after day after day. People just want more of it.</h2>
		</div>
		</div>
		<div id="newgallary">
      <h2>What's NEW</h2>
      <div id="SlideItMoo_outer" style="width: 750px;">
        <div id="SlideItMoo_inner" style="width: 700px;">
          <div id="SlideItMoo_items" style="width: 1200px; margin-left: 0px;">
            <div class="SlideItMoo_element"> <a href="#"> <img src="images/restaurants/res3.jpg" alt="" /></a> </div>
            <div class="SlideItMoo_element"> <a href="#"> <img src="images/restaurants/res7.jpg" alt="" /></a> </div>
            <div class="SlideItMoo_element"> <a href="#"> <img src="images/restaurants/res6.jpg" alt="" /></a> </div>
            <div class="SlideItMoo_element"> <a href="#"> <img src="images/restaurants/res5.jpg" alt="" /></a> </div>
			<div class="SlideItMoo_element"> <a href="#"> <img src="images/restaurants/res8.jpg" alt="" /></a> </div>
			<div class="SlideItMoo_element"> <a href="#"> <img src="images/restaurants/res9.jpg" alt="" /></a> </div>
			<div class="SlideItMoo_element"> <a href="#"> <img src="images/restaurants/res10.jpg" alt="" /></a> </div>
            </div>
        </div>
      </div>
    
    </div>
	</body>
