<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <head>
             
            <style>
                
                 <?php include '../css/style.css'; ?>
              
            </style>
    </head>
    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>                        
                </button>
                <a class="navbar-brand" href="#">WebSiteName</a>
              </div>
              <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                  <li class="active"><a href="product.htm">Home</a></li>
                  <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="product.php">Products <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Helmets</a></li>
                      <li><a href="#">Jackets</a></li>
                      <li><a href="#">Gears</a></li>
                    </ul>
                  </li>
                  <li><a href="#">My Account</a></li>
                  <li><a href="#">All Order </a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                  <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
              </div>
            </div>
          </nav>
          
      
        
      <div class="container checkout">
        <div class="py-5 text-center">

            <h2>Checkout form</h2>

        </div>
        <div class="row">
            <!-- <div class="col-md-4 order-md-2 mb-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Your cart</span>
                    <span class="badge badge-secondary badge-pill">3</span>
                </h4>
                <ul class="list-group mb-3 sticky-top">
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Product name</h6>
                            <small class="text-muted">Brief description</small>
                        </div>
                        <span class="text-muted">$12</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Second product</h6>
                            <small class="text-muted">Brief description</small>
                        </div>
                        <span class="text-muted">$8</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Third item</h6>
                            <small class="text-muted">Brief description</small>
                        </div>
                        <span class="text-muted">$5</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between bg-light">
                        <div class="text-success">
                            <h6 class="my-0">Promo code</h6>
                            <small>EXAMPLECODE</small>
                        </div>
                        <span class="text-success">-$5</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Total (USD)</span>
                        <strong>$20</strong>
                    </li>
                </ul>
                <form class="card p-2">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Promo code">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-secondary">Redeem</button>
                        </div>
                    </div>
                </form>
            </div> -->
            <div class="col-md-8 order-md-1">
                <h4 class="mb-3">Billing address</h4>
                <form class="form-horizontal" action="/action_page.php">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="firstname">First Name:</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="firstname" placeholder="Enter First Name" name="firstname">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-sm-2" for="lastname">Last Name:</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="lastname" placeholder="Enter Last Name" name="lastname">
                        </div>
                      </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Email:</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="address">Address:</label>
                    <div class="col-sm-10">          
                      <input type="text" class="form-control" id="address" placeholder="Enter address" name="address">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="address2">Address 2:</label>
                    <div class="col-sm-10">          
                      <input type="text" class="form-control" id="address2" placeholder=" Enter address2" name="address2">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-sm-2" for="country">Country:</label>
                    <div class="col-sm-10">          
                        <div class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" >Canada <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                              <li><a href="#">USA</a></li>
                              <li><a href="#">India</a></li>
                              <li><a href="#">Nigeria</a></li>
                            </ul>
                        </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-sm-2" for="province">Province:</label>
                    <div class="col-sm-10">          
                        <div class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" >ON <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                              <li><a href="#">BC</a></li>
                              <li><a href="#">NW</a></li>
                              <li><a href="#">AL</a></li>
                            </ul>
                          
                    </div>
                  </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-sm-2" for="postal">Postal Code:</label>
                    <div class="col-sm-10">          
                      <input type="text" class="form-control" id="postal" placeholder=" Enter Postal Code" name="postal">
                    </div>
                  </div>

                  <hr class="mb-4">
                <h4 class="mb-3">Payment</h4>
                <div class="d-block my-3">
                    <div class="custom-control custom-radio">
                        <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked="" required="">
                        <label class="custom-control-label" for="credit">Credit card</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required="">
                        <label class="custom-control-label" for="debit">Debit card</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required="">
                        <label class="custom-control-label" for="paypal">PayPal</label>
                    </div>
                </div>
                <div class="row">
                  
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="nameOnCard">Name on the card:</label>
                            <div class="col-sm-10">          
                              <input type="text" class="form-control" id="nameOnCard" placeholder=" Enter Name on the card" name="nameOnCard">
                            </div>
                          </div>
                   
                    
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="creditDebit">Credit/Debit Card Number:</label>
                            <div class="col-sm-10">          
                              <input type="number" class="form-control" id="creditDebit" placeholder=" Enter Credit/Debit Card Number" name="creditDebit">
                            </div>
                          </div>
                  
                </div>
                <div class="row">
                   
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="expiration">Expiration Date:</label>
                            <div class="col-sm-10">          
                              <input type="date" class="form-control" id="expiration" placeholder=" Enter Expiration Date" name="expiration">
                            </div>
                          </div>
                    
                   
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="cvv">CVV:</label>
                            <div class="col-sm-10">          
                              <input type="text" class="form-control" id="cvv" placeholder=" Enter CVV" name="cvv">
                            </div>
                          </div>
                   
                </div>


                
                  <div class="form-group">        
                    <div class="col-sm-offset-2 col-sm-10 checkoutbtn">
                      <button type="submit"  class="btn btn-default">Checkout now</button>
                      <a href="orderConfirm.php">Checkout now</a>
                    </div>
                  </div>
        
               
        
                </form>
            </div>
        </div>
     
    </div>
      
      
       
      <div class="footer">
        <p>Footer</p>
      </div>


 
      
    </body>
</html>


































