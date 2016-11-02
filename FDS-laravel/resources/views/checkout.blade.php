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

        <div> 
            <h1>Restaurant Name</h1>
        </div>

        <div>
            <table id="t01" style="width:100%">        
              <tr>
                <th width="20%">Menu</th>
                <th width="40%">Quantity</th>
                <th width="20%">Price</th>
                <th width="20%">Delete</th>    
              </tr>
              <tr>
                <td>Jill</td>
                <td>
                    <div>
                        <div class="qty-changer">
                        <input class="qty-input form-group" type="number" value="1"/>
                        </div>
                    </div>
                </td>
                <td>50</td>
                <td>50</td>
              </tr>
              <tr>
                <td>Eve</td>
                <td>
                    <div>
                        <div class="qty-changer">
                        <input class="qty-input form-group" type="number" value="1"/>
                        </div>
                    </div>
                </td>
                <td>44</td>
                <td>94</td>
              </tr>
            </table>
        </div>
        <br>
        <br>

        <form>
            <input type="radio" name="gender" value="male" checked> Male<br>
            <input type="radio" name="gender" value="female"> Female<br>
            <input type="radio" name="gender" value="other"> Other
        </form>



        <script src="js/common.js"></script>
    </body>
</html>