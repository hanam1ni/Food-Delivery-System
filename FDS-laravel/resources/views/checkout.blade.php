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
        <link rel="stylesheet" href="css/checkout.css">
        <!-- <link rel="stylesheet" href="js/css/stylecheckout.css"> -->
 
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

        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->       
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
        <div class="container" style="margin-top: 100px;">
            <div class="content">
                <div class="row">
                    <div id="content-header" style="margin-left: 3%">
                        Shopping Cart
                    </div>
                </div>
                <div>
                    <table>
                        <br>
                        <div class="column-labels">
                            <label class="product-image">Image</label>
                            <label class="product-details">Product</label>
                            <label class="product-removal">Remove</label>
                            <label class="product-price">Price</label>
                            <label class="product-quantity">Quantity</label>
                            <label class="product-line-price">Total</label>
                        </div>

                        <div class="product">
                            <div class="product-image">
                                <img src="http://s.cdpn.io/3/dingo-dog-bones.jpg">
                            </div>
                            <div class="product-details">
                                <div class="product-title">Dingo Dog Bones</div>
                                <div class="product-note">
                                    <button class="btn btn-link" data-toggle="modal" data-target="#exampleModal">
                                        Notation
                                    </button>

                                    <div id="myContent">
                                        
                                    </div> 

                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="exampleModalLabel">Notation</h4>
                                          </div>
                                          <div class="modal-body">
                                            <form>
                                              <div class="form-group">
                                                <label for="message-text" class="control-label">Message:</label>
                                                <textarea class="form-control" id="message-text"></textarea>
                                              </div>
                                            </form>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="add()">Send message</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-removal">
                                <button class="remove-product">
                                        Remove
                                </button>
                            </div>
                            <div class="product-price">12.99</div>
                            <div class="product-quantity">
                                <input type="number" value="1" min="1">
                            </div>
                            <div class="product-line-price">25.98</div>
                        </div>
                        <div class="product">
                            <div class="product-image">
                                <img src="http://s.cdpn.io/3/dingo-dog-bones.jpg">
                            </div>
                            <div class="product-details">
                                <div class="product-title">Nutro Adult Lamb and Rice Dog Food</div>
                            </div>
                            <div class="product-removal">
                                <button class="remove-product">
                                    Remove
                                </button>
                            </div>
                            <div class="product-price">45.99</div>
                            <div class="product-quantity">
                            <input type="number" value="1" min="1">
                            </div>
                            
                            <div class="product-line-price">45.99</div>
                        </div>
                    </table>
                    <div class="totals">
                        <div class="totals-item">
                            <label>Subtotal</label>
                            <div class="totals-value" id="cart-subtotal">71.97</div>
                        </div>
                        <div class="totals-item">
                            <label>Service (10%)</label>
                            <div class="totals-value" id="cart-tax">3.60</div>
                        </div>
                        <div class="totals-item">
                            <label>Shipping</label>
                            <div class="totals-value" id="cart-shipping">15.00</div>
                        </div>
                        <div class="totals-item totals-item-total">
                            <label>Grand Total</label>
                            <div class="totals-value" id="cart-total">90.57</div>
                        </div>
                    </div>
                    <button class="checkout" style="vertical-align:middle">
                        <span>Checkout</span>
                    </button>
                </div>      
            </div>
        </div>
 
        <div class="footer container">
 
        </div>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src="js/browse.js"></script>
        <script src="js/checkout.js"></script>

    </body>
</html>