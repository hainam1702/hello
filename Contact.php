<?php

require "config/constants.php";

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Contact Us</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <script src="js/jquery2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="main.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
    <div class="wait overlay">
        <div class="loader"></div>
    </div>
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse"
                    aria-expanded="false">
                    <span class="sr-only">navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>
            <div class="collapse navbar-collapse" id="collapse">
                <ul class="nav navbar-nav">
                    <li><a href="index.php" class="navbar-brand">Lanie</a></li>
                    <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                    <li><a href="index.php"><span class="glyphicon glyphicon-modal-window"></span> Product</a></li>

                </ul>
            </div>
        </div>
    </div>
    <p><br /></p>
    <p><br /></p>
    <p><br /></p>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8" id="signup_msg">

            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="panel panel-primary">
                    <div class="panel-heading text-center">Contact Us</div>
                    <div class="panel-body">

                        <form id="signup_form" onsubmit="return false">

                            <div class="row">
                                <div class="col-md-12">
                                    <label for="email">Email*</label>
                                    <input type="text" id="email" name="email" class="form-control" required>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-12">
                                    <label for="mobile">Contact Number*</label>
                                    <input type="text" id="mobile" name="mobile" class="form-control" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="address1">Message*</label>
                                    <input type="text" id="address1" name="address1" class="form-control" required>
                                </div>
                            </div>

                            <p><br /></p>
                            <div class="row">
                                <div class="col-md-12">
                                    <input style="width:100%;" value="Submit" type="submit" name="submit_button"
                                        class="btn btn-success btn-lg">
                                </div>
                            </div>

                    </div>
                    </form>
                    <div class="panel-footer"></div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>

    </div>

    <script>
    var CURRENCY = '<?php echo CURRENCY; ?>';
    </script>
</body>

</html>