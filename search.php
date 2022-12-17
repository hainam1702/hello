<?php
require "config/constants.php";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Lanie</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <script src="js/jquery2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="main.js"></script>
    <style>
    @media screen and (max-width:480px) {
        #search {
            width: 80%;
        }

        #search_btn {
            width: 30%;
            float: right;
            margin-top: -32px;
            margin-right: 10px;
        }
    }
    </style>
</head>

<body>
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse"
                    aria-expanded="false">
                    <span class="sr-only"> navigation toggle</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand">Lanie</a>
            </div>
            <div class="collapse navbar-collapse" id="collapse">
                <ul class="nav navbar-nav">
                    <li><a href="profile.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                    <li><a href="profile_product.php"><span class="glyphicon glyphicon-modal-window"></span> Product</a>
                    </li>
                    <li><a href="Contact.php"><span class="glyphicon glyphicon-modal-window"></span> Contact Us</a></li>

                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span
                                class="glyphicon glyphicon-shopping-cart"></span> Cart <span class="badge">0</span></a>
                        <div class="dropdown-menu" style="width:400px;">
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-md-3">Sl.No</div>
                                        <div class="col-md-3">Product Image</div>
                                        <div class="col-md-3">Product Name</div>
                                        <div class="col-md-3">Price in <?php echo CURRENCY; ?></div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div id="cart_product">

                                    </div>
                                </div>
                                <div class="panel-footer"></div>
                            </div>
                        </div>
                    </li>
                    <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span
                                class="glyphicon glyphicon-user"></span> Login/Register</a>
                        <ul class="dropdown-menu">
                            <div style="width:300px;">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">Login</div>
                                    <div class="panel-heading">
                                        <form onsubmit="return false" id="login">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" name="email" id="email" required />
                                            <label for="email">Password</label>
                                            <input type="password" class="form-control" name="password" id="password"
                                                required />
                                            <p><br /></p>
                                            <input type="submit" class="btn btn-warning" value="Login">
                                            <a href="customer_registration.php?register=1"
                                                style="color:white; text-decoration:none;">Create Account Now</a>
                                        </form>
                                    </div>
                                    <div class="panel-footer" id="e_msg"></div>
                                </div>
                            </div>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <p><br /></p>
    <p><br /></p>
    <p><br /></p>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1"></div>

            <div class="col-md-2 col-xs-12">
                <div id="get_category">
                </div>

                <div id="get_brand">
                </div>
            </div>
            <div class="col-md-8 col-xs-12">
                <div class="row">
                    <div class="col-md-12 col-xs-12" id="product_msg">
                    </div>
                </div>
                <div class="panel panel-info">
                    <div class="panel-heading">Products</div>
                    <div class="panel-body">
                        <div id="get_product">

                        </div>

                    </div>
                    <div class="panel-footer">&copy; <?php echo date("Y"); ?></div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <center>
                    <ul class="pagination" id="pageno">
                        <li><a href="#">1</a></li>
                    </ul>
                </center>
            </div>
        </div>
    </div>
</body>

</html>