<?
include '../../include.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?echo $title ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="brand">My impressions of hiking and traveling</div>
   

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="../index.php">Adventure blog</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Main</a>
                    </li>
                    <li>
                        <a href="#">Articles</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">

        <div class="row">
            <div class="box">
                
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/odin.jpg" alt="">
                    
                    <p> Climbing Mount Kilimanjaro is an enormous undertaking that comes with a chance to see one of the most enchanting sunrises in the world.</p>
                    <a href="odin/index.php" class="btn btn-default btn-lg">Read more</a>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/dva.jpg" alt="">
                   
                    <p>Driving a fair distance to check out a pile of rocks may not sound that tempting. The Remarkable Rocks, located in Flinders Chase National Park on the south-east fringe of the island. </p>
                    <a href="dva/index.php" class="btn btn-default btn-lg">Read more</a>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/rostbif.jpg" alt="">
                    
                    <p> Located a short distance off the coast of South Australia, near Adelaide, Kangaroo Island, known locally as KI, is home to powder-white beaches, a multitude of exotic wildlife.</p>
                    <a href="tri/index.php" class="btn btn-default btn-lg">Read more</a>
                    <hr>
                </div>
                
            </div>
        </div>

    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                   <p><?echo $copyrights ?></p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
