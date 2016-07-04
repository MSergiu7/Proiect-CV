<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Proiect Practica - Morar Sergiu, Grosu Ovidiu</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <div class="search"><input class="pull-right search-input" type="text" name="search-cv" placeholder="find a cv..."></div>
      <i class="fa fa-search fa-lg pull-right" aria-hidden="true"></i>
    </div>
    <h1>CV Online</h1>
    <h4>Tagline goes here.</h4>
    <h5>Find the perfect candidate for your company.</h5>
    <div class="container navi">
      <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li class="active"><a href="index.php">Home</a></li>
              <li><a href="about-us.php">About Us</a></li>
              <li><a href="submit-cv.php">Submit your CV</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
    </div>


    <div class="container">
      <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
          <div class="col-sm-3">
            <a href="#"><img class="img-responsive" src="http://placehold.it/250x250"></a>
          </div>
          <div class="col-sm-9">
            <h2 class="about-title">We are having fun coding this website!</h2>
            <p class="about-content">
              Pra esent dictum purus sed turpis ultrices tempus. Aenean non consectetur nulla, in iaculis arcu. Vestibulum leo nulla, posuere eget urna non, faucibus ullamcorper mauris. Sed tincidunt, nisl ut bibendum egestas, augue felis efficitur augue, vel dictum justo mi nec felis. Suspendisse tincidunt libero in lorem sodales volutpat.
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-10 col-sm-offset-1">

          <h3 class="contact-p">Get in touch with us.</h3>
          <form class="contact-form" action="index.html" method="post">
            <label for="name">Name: </label><br>
            <input type="text" name="name" value=""><br>
            <label for="email">Email: </label><br>
            <input type="text" name="email" value=""><br>
            <label for="sub">Subject: </label><br>
            <input type="text" name="sub" value=""><br>
            <label for="msj">Message: </label><br>
            <textarea name="msj" rows="8" cols="40"></textarea><br>
            <input class="submit-btn" type="button" name="name" value="Submit">
          </form>
        </div>
      </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
  </body>
</html>
