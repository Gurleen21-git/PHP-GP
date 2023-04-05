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
                  <li class="active"><a href="product.php">Home</a></li>
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
          
      
        
          <section class="h-100 h-custom orderConfirm" >
            <div class="container py-5 h-100">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-8 col-xl-6">
                  <div class="card border-top border-bottom border-3" >
                    <h3> Thank you for ordering from us!</h3>
                    <div class="card-body p-5">
          
                      <p class="lead fw-bold mb-5 purchase" >Purchase Reciept</p>
          
                      <div class="row">
                        <div class="col mb-3">
                          <p class="small text-muted mb-1">Date</p>
                          <p>10 April 2021</p>
                        </div>
                        <div class="col mb-3">
                          <p class="small text-muted mb-1">Order No.</p>
                          <p>012j1gvs356c</p>
                        </div>
                      </div>
          
                      <div class="mx-n5 px-5 py-4" >
                        <div class="row">
                          <div class="col-md-8 col-lg-9">
                            <p>BEATS Solo 3 Wireless Headphones</p>
                          </div>
                          <div class="col-md-4 col-lg-3">
                            <p>£299.99</p>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-8 col-lg-9">
                            <p class="mb-0">Shipping</p>
                          </div>
                          <div class="col-md-4 col-lg-3">
                            <p class="mb-0">£33.00</p>
                          </div>
                        </div>
                      </div>
          
                      <div class="row my-4">
                        <div class="col-md-4 offset-md-8 col-lg-3 offset-lg-9">
                          <p class="lead fw-bold mb-0" style="color: #f37a27;">£262.99</p>
                        </div>
                      </div>
          
               
          
                   
          
                      <p class="mt-4 pt-2 mb-0">Want any help? <a href="#!" style="color: #f37a27;">Please contact
                          us</a></p>
          
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
      
       
      <div class="footer">
        <p>Footer</p>
      </div>
      
    </body>
</html>


































