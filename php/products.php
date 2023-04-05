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
      
        
      <div class="container">
        <div class="container mt-3">
            <h2>Choose your Products.</h2>
           

                <div class="form-group">
                    <label class="control-label col-sm-1" for="searchProducts">Search: </label>
                    <div class="col-sm-4">
                      <input type="searchProducts" class="form-control" id="searchProducts" placeholder="Search Products here" name="searchProducts">
                    </div>
                  </div>


                  <div class="form-group">
                    <label class="control-label col-sm-2" for="searchProducts">Filter Here: </label>
                    <div class="col-sm-4">
                        <div class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Products <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                              <li><a href="#">Helmets</a></li>
                              <li><a href="#">Jackets</a></li>
                              <li><a href="#">Gears</a></li>
                            </ul>
                        </div>
                    </div>
                  </div>
           
          </div>

          <div class="container-fluid mt-3 allProducts">
            <div class="row">
              <div class="col-sm-3 p-3  products">
                <div class="card">
                    <img class="card-img-top" src="https://dainese-cdn.thron.com/delivery/public/image/dainese/bdfb3ee8-636a-445e-9d26-856d5fa6b73d/ramfdh/std/1230x1230/k3-sv-e2205-top-rossi-misano-2015.jpg" alt="Card image"  >
                    <div class="card-body">
                      <h4 class="card-title">John Doe</h4>
                      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                      <a href="cart.php" class="btn   cart"> Add to cart</a>
                    </div>
                </div>
              </div>

              <div class="col-sm-3 p-3   products">
                <div class="card"  >
                    <img class="card-img-top" src="https://dainese-cdn.thron.com/delivery/public/image/dainese/2590199c-5afc-4a25-98d1-28192d4713ad/ramfdh/std/1230x1230/k3-sv-e2205-top-rossi-mugello-2017.jpg" alt="Card image"  >
                    <div class="card-body">
                      <h4 class="card-title">John Doe</h4>
                      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                      <a href="cart.php" class="btn   cart"> Add to cart</a>
                    </div>
                </div>
              </div>

              <div class="col-sm-3 p-3   products">
                <div class="card"  >
                    <img class="card-img-top" src="https://dainese-cdn.thron.com/delivery/public/image/dainese/7c0da18a-0ad7-4645-be60-565d67b284f4/ramfdh/std/1230x1230/k3-sv-e2205-top-tartaruga.jpg" alt="Card image"  >
                    <div class="card-body">
                      <h4 class="card-title">John Doe</h4>
                      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                      <a href="cart.php" class="btn   cart"> Add to cart</a>
                    </div>
                </div>
              </div>

            </div>

            <div class="row">
                <div class="col-sm-3 p-3  products">
                  <div class="card">
                      <img class="card-img-top" src="https://dainese-cdn.thron.com/delivery/public/image/dainese/70f7bdec-e00a-482d-99f6-f4f0e6e06b69/ramfdh/std/615x615/racing-4-leather-jacket-lava-red-black.jpg" alt="Card image"  >
                      <div class="card-body">
                        <h4 class="card-title">John Doe</h4>
                        <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                        <a href="cart.php" class="btn   cart" > Add to cart</a>
                      </div>
                  </div>
                </div>
  
                <div class="col-sm-3 p-3   products">
                  <div class="card"  >
                      <img class="card-img-top" src="https://dainese-cdn.thron.com/delivery/public/image/dainese/a5f6b1ec-f2c4-45f9-9e65-17a912ac3bc1/ramfdh/std/1230x1230/tempest-3-d-dry-jacket-glacier-gray-black-lava-red.jpg" alt="Card image"  >
                      <div class="card-body">
                        <h4 class="card-title">John Doe</h4>
                        <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                        <a href="cart.php" class="btn   cart"> Add to cart</a>
                      </div>
                  </div>
                </div>
  
                <div class="col-sm-3 p-3   products">
                  <div class="card"  >
                      <img class="card-img-top" src="https://cdn.shopify.com/s/files/1/0258/9160/2490/products/3100122-1231-fr_missile-v2-leather-jacket-web_1360x1360.jpg?v=1630008238" alt="Card image"  >
                      <div class="card-body">
                        <h4 class="card-title">John Doe</h4>
                        <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                        <a href="cart.php" class="btn   cart"> Add to cart</a>
                      </div>
                  </div>
                </div>
  
              </div>

              <div class="row">
                <div class="col-sm-3 p-3  products">
                  <div class="card">
                      <img class="card-img-top" src="https://cdn.shopify.com/s/files/1/0258/9160/2490/products/3100222-12-fr_missile-v2-ignition-leather-jacket-web_2000x2000.jpg?v=1664807196" alt="Card image"  >
                      <div class="card-body">
                        <h4 class="card-title">John Doe</h4>
                        <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                        <a href="cart.php" class="btn   cart"> Add to cart</a>
                      </div>
                  </div>
                </div>
  
                <div class="col-sm-3 p-3   products">
                  <div class="card"  >
                      <img class="card-img-top" src="https://cdn.shopify.com/s/files/1/0258/9160/2490/products/3100321-1030-ba_gp-plus-r-v3-rideknit-jacket-web_be257c5c-ddc6-413f-a531-762b3132de27_2000x2000.jpg?v=1652393548" alt="Card image"  >
                      <div class="card-body">
                        <h4 class="card-title">John Doe</h4>
                        <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                        <a href="cart.php" class="btn   cart"> Add to cart</a>
                      </div>
                  </div>
                </div>
  
                <div class="col-sm-3 p-3   products">
                  <div class="card"  >
                      <img class="card-img-top" src="https://dainese-cdn.thron.com/delivery/public/image/dainese/7878050f-74ef-4931-b74d-c5795454d5e9/ramfdh/std/615x615/mugello-rr-d-air-perf-suit-white-fluo-red.jpg" alt="Card image"  >
                      <div class="card-body">
                        <h4 class="card-title">John Doe</h4>
                        <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                        <a href="cart.php" class="btn   cart"> Add to cart</a>
                      </div>
                  </div>
                </div>
  
              </div>

          </div>
      </div>
      
       
      <div class="footer">
        <p>Footer</p>
      </div>
      
    </body>
</html>


































