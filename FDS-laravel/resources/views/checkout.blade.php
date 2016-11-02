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
         <link href="css/checkout.css" rel="stylesheet">
         <script src="js/checkout.js"></script> 
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
        </div>

        <div class="mar-left10"> 
            <h1>Restaurant Name</h1>
        </div>

        <div>
            <table id="t01" style="width:80%">        
              <tr>
                <th>Menu</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>X</th>    
              </tr>
              <tr class="text-center">
                <td class="text-left">Jill</td>
                <td>
                    <div>
                        <div class="qty-changer">
                        <input class="qty-input form-group" type="number" value="1"/>
                        </div>
                    </div>
                </td>
                <td>50</td>
                <td></td>
              </tr>
              <tr class="text-center">
                <td class="text-left">Eve</td>
                <td>
                    <div>
                        <div class="qty-changer">
                        <input class="qty-input form-group" type="number" value="1"/>
                        </div>
                    </div>
                </td>
                <td>44</td>
                <td></td>
              </tr>
            </table>
        </div>
        <br>
        <div class="mar-left10">
            <form>
                <font size="5.5">
                <strong> Delivery Methods </strong>
                </font>
                <font size="5">
                <br><br>
                <input type="radio" name="gender" value="male" checked> Delivery
                <br><br>
                <input type="radio" name="gender" value="female"> Fast Delivery (+50 baht)
                <br>
                </font>
            </form> 
        </div>


        <script src="js/common.js"></script>
    </body>
</html>