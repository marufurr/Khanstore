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
                    <a class="nav-link" href="index.php"><i class="fas fa-home"></i>Home </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fab fa-product-hunt"></i>Product</a>
                </li>
            </ul>
        </div>
    </nav>
   
    
    <div class="container-fluid">
        <div class="row">
                <div class="row">
                    <div class="col-md-2"></div>
                 <div class="col-md-8" id="signup_msg">
        
                     <!--Alert from signup form -->
                    </div>
                    <div class="row"></div>
             <div class="col-md-2"></div>

                   </div>
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        Customer SignUp Form
                    </div>
                    <div class="panel-body">
                    
                        <form method="POST" action="">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="first_name">First Name</label>
                                    <input type="text" class="form-control" id="first_name">
                                </div>
                                <div class="col-md-6">
                                    <label for="last_name">Last Name</label>
                                    <input type="text" class="form-control" id="last_name">
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <label for="password">Re-enter Password</label>
                                    <input type="password" class="form-control" id="re_password" name="re_password">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <label for="mobile">Mobile</label>
                                    <input type="text" class="form-control" id="mobile" name="mobile">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="address1">Address Line 1</label>
                                    <input type="text" class="form-control" id="address1" name="address1">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <label for="address2">Address Line 2</label>
                                    <input type="text" class="form-control" id="address2" name="address2">
                                </div>
                            </div>

                            <br>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12">
                                        <button class="form-control btn btn-block btn-primary" id="signup" name="signup">SignUp</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="panel-footer">reg</div>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
     </div>
    </div>


   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>