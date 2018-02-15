<?php
  include 'includes/db.class.php';
  include 'includes/user.class.php';
  include 'includes/work.class.php';
  include 'includes/study.class.php';
  include 'includes/contact.class.php';
  include 'includes/language.class.php';
?>

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
    <link rel="stylesheet" href="fonts/font-awesome-4.6.3/css/font-awesome.min.css">
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
    <h1><a href="index.php">CV Online</a></h1>
    <h4>Tagline goes here.</h4>
    <h5>Find the perfect candidate for your company.</h5>

    <?php 

    $id = $_GET["id"];

    $user = new User();
    $user = $user->getUser($id);

    $work = new Work();
    $works = $work->getUserWorks($id);

    $study = new Study();
    $studies = $study->getUserStudies($id);

    $contact = new Contact();
    $contacts = $contact->getUserContacts($id);

    $language = new Language();
    $languages = $language->getUserLanguages($id);


    ?>
    <div class="container">
      <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
          <div class="col-sm-3">
            <?php echo '<a href="details.php"><img class="img-responsive photo" src="img/photo'.$id.'.jpg" alt="Personal photo"></a>'; ?>
          </div>
          <div class="col-sm-9">
            <h2 class="about-title">Hi, I'm <?php echo $user['name']; ?>.</h2>
            <hr>
            <p><?php echo end($works)['position_held']; ?></p>
            <p class="about-content">
              Pra esent dictum purus sed turpis ultrices tempus. Aenean non consectetur nulla, in iaculis arcu. Vestibulum leo nulla, posuere eget urna non, faucibus ullamcorper mauris. Sed tincidunt, nisl ut bibendum egestas, augue felis efficitur augue, vel dictum justo mi nec felis. Suspendisse tincidunt libero in lorem sodales volutpat.
            </p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
          <div class="col-sm-3"></div>
          <div class="col-sm-9">
            <h2 class="title">Profile</h2>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
          <div class="col-sm-3">
            <i class="fa fa-dot-circle-o fa-3x p-icon" aria-hidden="true"></i>
          </div>
          <div class="col-sm-9">
            <h4 class="item-title">Full Name</h4>
            <hr>
            <p><?php echo $user['name'].' '.$user['surname']; ?></p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
          <div class="col-sm-3">
            <i class="fa fa-dot-circle-o fa-3x p-icon" aria-hidden="true"></i>
          </div>
          <div class="col-sm-9">
            <h4 class="item-title">Born</h4>
            <hr>
            <p><?php echo $user['year_of_birth'].' - '.end($contacts)['city']; ?></p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
          <div class="col-sm-3">
            <i class="fa fa-dot-circle-o fa-3x p-icon" aria-hidden="true"></i>
          </div>
          <div class="col-sm-9">
            <h4 class="item-title">Email</h4>
            <hr>
            <p><?php echo end($contacts)['email']; ?></p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
          <div class="col-sm-3">
            <i class="fa fa-dot-circle-o fa-3x p-icon" aria-hidden="true"></i>
          </div>
          <div class="col-sm-9">
            <h4 class="item-title">Find me on</h4>
            <hr>
            <i class="fa fa-facebook-square social-icon fa-2x" aria-hidden="true"></i>
            <i class="fa fa-twitter-square social-icon fa-2x" aria-hidden="true"></i>
            <i class="fa fa-google-plus-square social-icon fa-2x" aria-hidden="true"></i>
            <i class="fa fa-linkedin-square social-icon fa-2x" aria-hidden="true"></i>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
          <div class="col-sm-3"></div>
          <div class="col-sm-9">
            <h2 class="title">Education</h2>
          </div>
        </div>
      </div>

       <?php 
        foreach ($studies as $study) {
          echo '<div class="row">';
            echo '<div class="col-sm-10 col-sm-offset-1">';
              echo '<div class="col-sm-3">';
                echo '<i class="fa fa-dot-circle-o fa-3x p-icon" aria-hidden="true"></i>';
              echo '</div>';
              echo '<div class="col-sm-9">';
                echo '<h4 class="item-title">'.$study['organisation'].'</h4>'; 
                echo '<hr>';
                echo '<p>'.$study['specialization'].' <i>'.$study['from'].' - '.$study['to'].'</i></p>';
                echo '<p>';
                  echo 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean viverra dignissim rutrum. Nullam elementum sagittis lacus, sed eleifend tortor vulputate in.';
                echo '</p>';
                echo '<p><b>'.$study['title_of_qualification'].'</b></p>';
              echo '</div>';
            echo '</div>';
          echo '</div>';
        }
      ?>

      <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
          <div class="col-sm-3"></div>
          <div class="col-sm-9">
            <h2 class="title">Experience</h2>
          </div>
        </div>
      </div>

       <?php 
       foreach ($works as $work) {
          echo '<div class="row">';
            echo '<div class="col-sm-10 col-sm-offset-1">';
              echo '<div class="col-sm-3">';
                echo '<i class="fa fa-dot-circle-o fa-3x p-icon" aria-hidden="true"></i>';
              echo '</div>';
              echo '<div class="col-sm-9">';
                echo '<h4 class="item-title">'.$work['employer'].'</h4>'; 
                echo '<hr>';
                echo '<p>'.$work['position_held'].' <i>'.$work['from'].' - '.$work['to'].'</i></p>';
                echo '<p>';
                  echo 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean viverra dignissim rutrum. Nullam elementum sagittis lacus, sed eleifend tortor vulputate in.';
                echo '</p>';
              echo '</div>';
            echo '</div>';
          echo '</div>';
        }
      ?>

      <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
          <div class="col-sm-3"></div>
          <div class="col-sm-9">
            <h2 class="title">Languages</h2>
          </div>
        </div>
      </div>

      <?php
        foreach ($languages as $language) {
          echo '<div class="row">';
            echo '<div class="col-sm-10 col-sm-offset-1">';
              echo '<div class="col-sm-3">';
                echo '<i class="fa fa-dot-circle-o fa-3x p-icon" aria-hidden="true"></i>';
              echo '</div>';
              echo '<div class="col-sm-9">';
                echo '<h4 class="item-title">'.$language['language'].'</h4>';
                echo '<hr>';
                echo '<p><i>'.$language['type'].' language</i></p>';
              echo '</div>';
            echo '</div>';
          echo '</div>';
        }
      ?>


    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
  </body>
</html>
