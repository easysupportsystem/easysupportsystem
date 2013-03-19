<?php
// see if the user is logged in
if (isset($_SESSION['username'])){
    header ("Location: loggedin.php");
}
?>
<html>
    <head>
        <title>Easy Support System</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <div class="brand">
                        Easy Support System
                    </div>
                    <div class="nav">
                        <ul class="nav nav-collapse">
                            <li class="active">Home</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>