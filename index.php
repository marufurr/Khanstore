<!DOCTYPE html>
<html>

<head>
    <title>Khan Store</title>
    <style type="text/css">
        li>a {
            font-size: 14px;
            font-weight: bold;
            font-family: Verdana, Geneva, sans-serif;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawsome.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Khan Store</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#"><i class="fas fa-home"></i>Home </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fab fa-product-hunt"></i>Product</a>
                </li>

                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-success" type="submit" id="search_btn">Search</button>
                </form>

            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class="nav-item">
                    <a href="" class="nav-link" data-toggle="modal" data-target="#exampleModal1"><i class="far fa-credit-card"></i>Cart</a></li>

                <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                      
                            <div class="modal-body">

                                <div class="panel panel-success">
                                    <div class="panel-heading"></div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-3">SL. No</div>
                                            <div class="col-md-3">Product Image</div>
                                            <div class="col-md-3">Product Name</div>
                                            <div class="col-md-3">Price in $</div>
                                        </div>
                                    </div>
                                    <div class="panel-footer"></div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>

                        </div>

                    </div>
                </div>

                <li class="nav-item">
                    <a href="" class="nav-link" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-sign-in-alt"></i>SignIn</a></li>

                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                
                            </div>
                            <div class="modal-body">

                                <div style="width:300px">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <p style="text-align: center;">Login Here</p>
                                        </div>
                                        <div class="panel-heading">
                                            <label>Email</label>
                                            <input type="email" id="email" class="form-control" required>

                                            <label>Password</label>
                                            <input type="password" id="password" class="form-control" required>
                                            <p>
                                                <br>
                                            </p>
                                            <a href="" style="color: white; list-style-type: none;">Forgotten Password</a>
                                            <input type="submit" class="btn btn-success pull-right" id="login" value="Login">
                                        </div>
                                        <div class="panel-footer" id="e_msg"></div>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>

                <li class="nav-item">
                    <a href="user_registration.php" class="nav-link"><i class="fas fa-user"></i>SignUp</a>
                </li>

            </ul>
        </div>
    </nav>

   
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-2">
                <div id="get_category">
                    
                </div>
             <!-- <ul class="nav nav-pills nav-stacked">
                    <li class="nav-item active"><a href="" class="nav-link"><h4>Categories</h4></a></li>
                    <li class="nav-item"><a href="" class="nav-link">Categories</a></li>
                    <li class="nav-item"><a href="" class="nav-link">Categories</a></li>
                    <li class="nav-item"><a href="" class="nav-link">Categories</a></li>
                    <li class="nav-item"><a href="" class="nav-link">Categories</a></li>
                </ul> -->
<ul id="get_brand">
                    
                </ul>
         <!--      <ul class="nav nav-pills nav-stacked">
                    <li class="nav-item active"><a href="" class="nav-link"><h4>Brand</h4></a></li>
                    <li class="nav-item"><a href="" class="nav-link">Categories</a></li>
                    <li class="nav-item"><a href="" class="nav-link">Categories</a></li>
                    <li class="nav-item"><a href="" class="nav-link">Categories</a></li>
                    <li class="nav-item"><a href="" class="nav-link">Categories</a></li>
                </ul> 
 -->                
            </div>
            <div class="col-md-8 mr-5">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Products
                    </div>
                    <div class="panel-body">
                        <div id="get_product">
                              <!--Here We get product Jquery Ajax Request -->
                        </div>

                       <!--  <div class="col-md-4">
                            <div class="panel panel-info">
                                <div class="panel-heading">Samesung Galaxy</div>
                                <div class="panel-body">
                                    <img src="images/m3.jpg">
                                </div>
                                <div class="panel-heading">$.500.00
                                    <button class="btn btn-danger btn-xs pull-right">Add Cart</button>
                                </div>
                            </div>
                        </div> -->
                       
                    <div class="panel-footer">&copy; 2019</div>
                </div>
            </div>

        </div>
        <div class="col-md-1"></div>
    </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>