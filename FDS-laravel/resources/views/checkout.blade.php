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

        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>

        <!-- scorll magic -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js"></script>
        <!--[if lt IE 9]>           
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
            <script src="js/respond.min.js"></script>
        <![endif]-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">\
        <link rel="stylesheet" href="css/checkout.css">
    </head>
    <body>      
        <div class="container">
            <div id="trigger"></div>
            <div class="navbar navbar-fixed-top">       
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
            </div>
            <!-- <div id="hightlight" class="span6">
                <h1>Food Delivery</h1>
                <h2>We provide food that customers love, day after day after day. People just want more of it.</h2>
            </div> -->
        </div>
        <div class="container" style="margin-top: 100px; ">
            <div class="content">
                <div class="row">
                    <div id="content-header" class="span12">
                        Restaurant Name
                    </div>
                </div>
                <div>
                    <table  style="width:100%" id="t01"class="span12">        
                        <tr>
                            <th style="width:60%">Menu</th>
                            <th class="text-center">Quantity</th>
                            <th class="text-center">Price</th>
                            <th class="text-center"></th>    
                        </tr>
                        <tr class="text-center">
                            <td class="text-left">Jill</td>
                            <td>
                                <div>
                                    <div class="qty-changer">
                                        <input class="qty-input form-group" type="number" min="1" value="1"/>
                                    </div>
                                </div>
                            </td>
                            <td>50</td>
                            <td>
                                <span class="glyphicon glyphicon-remove btn-danger"></span>
                            </td>
                        </tr>
                        <tr class="text-center">
                            <td class="text-left">Eve</td>
                            <td>
                                <div>
                                    <div class="qty-changer">
                                        <input class="qty-input form-group" type="number" min="1" value="1"/>
                                    </div>
                                </div>
                            </td>
                            <td>44</td>
                            <td>
                                <span class="glyphicon glyphicon-remove btn-danger"></span>
                            </td>
                        </tr>
                    </table>
                    <br><br><br><br><br><br><br>
                    <form align="left">
                        <th>
                            Delivery Methods 
                        </th>
                        <font size="3">
                            <br><br>
                            <input type="radio" name="gender" value="male" checked> Delivery
                            <br><br>
                            <input type="radio" name="gender" value="female"> Fast Delivery (+50 baht)
                            <br><br>
                        </font>
                    </form>
                    <div align="right">
                        <h4>Total : 00</h4>
                        <br>
                    </div>
                    <div align="center">
                        <br>
                        <button type="button" class="btn btn-default">Confirm</button>
                    </div>       
                </div>       
            </div>
        </div>

        <div class="footer container">

        </div>
        <script src="js/common.js"></script>
        <script src="js/browse.js"></script>
        <script src="js/scroll.js"></script>
    </body>
</html>