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
        <script type="text/javascript" src="js/bootstrap.js"></script>
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="brand" href="#">Easy Support System</a>
                    <ul class="nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">Tickets</a></li>
                        <li><a href="#">Wiki</a></li>
                        <li><a href="#">Forum</a></li>
                        <li><a href="#">Login</a></li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="container">
            <div class="hero-unit">
                <h1>Easy Support System</h1>
            </div>
        </div>
        
        <div class="container">
            
        </div>
    </body>
</html>