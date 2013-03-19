<?php
// see if the user is logged in
if (isset($_SESSION['username'])){
    $loggedin = $_SESSION['username'];
}
 else {
     $loggedin = "no";
}
?>
<html>
    <head>
        <title>Easy Support System</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style type="text/css">
            body {
                padding-top: 60px;
                padding-bottom: 40px;
            }
    </style>
    </head>
    <body>
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="brand" href="#">Easy Support System</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <li class="active"><a href="#">Home</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tickets<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">View</a></li>
                                    <li><a href="#">New</a></li>
                                </ul>
                            </li>
                            <li><a href="#about">Wiki</a></li>
                            <li><a href="#contact">Forums</a></li>
                        </ul>
                        <?php
                        if($loggedin == "no"){
                            ?>
                            <form class="navbar-form pull-right">
                                <input class="span2" type="text" placeholder="Email">
                                <input class="span2" type="password" placeholder="Password">
                                <button type="submit" class="btn">Sign in</button>
                            </form>
                            <?php
                        }
                        else{
                            ?>
                            <div class="pull-right">
                                <p>Hello, <?php echo $loggedin ?></p>
                            </div>
                            <?php
                        }
                        ?>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>

        <div class="container">
            <!-- Main hero unit for a primary marketing message or call to action -->
            <div class="hero-unit">
                <h1>Heading Text</h1>
                 <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
                 <p><a href="#" class="btn btn-primary btn-large">Learn more &raquo;</a></p>
            </div>

            <!-- Example row of columns -->
            <div class="row-fluid">
                <div class="span4">
                    <h2>Heading</h2>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                    <p><a class="btn" href="#">View details &raquo;</a></p>
                </div>
                <div class="span4">
                    <h2>Heading</h2>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                    <p><a class="btn" href="#">View details &raquo;</a></p>
                </div>
                <div class="span4">
                    <h2>Heading</h2>
                    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                    <p><a class="btn" href="#">View details &raquo;</a></p>
                </div>
            </div>

            <hr>

            <footer>
                <p>&copy; Hann Web Design 2013</p>
            </footer>

        </div> <!-- /container -->
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap-transition.js"></script>
        <script src="js/bootstrap-alert.js"></script>
        <script src="js/bootstrap-modal.js"></script>
        <script src="js/bootstrap-dropdown.js"></script>
        <script src="js/bootstrap-scrollspy.js"></script>
        <script src="js/bootstrap-tab.js"></script>
        <script src="js/bootstrap-tooltip.js"></script>
        <script src="js/bootstrap-popover.js"></script>
        <script src="js/bootstrap-button.js"></script>
        <script src="js/bootstrap-collapse.js"></script>
        <script src="js/bootstrap-carousel.js"></script>
        <script src="js/bootstrap-typeahead.js"></script>
    </body>
</html>