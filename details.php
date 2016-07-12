<!DOCTYPE html>
<?php include 'conexiune.php'; ?>
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

    $details="SELECT p.name,p.surname,p.year_of_birth,c.city,c.email,w.position_held from Personal_data p left join Contacts c on p.id_person=c.id_person left join Work_experience w on p.id_person=w.id_person where p.id_person=$id";
    $result1=mysqli_query($conexiune,$details) or die (mysqli_error($conexiune));
    $row1 = mysqli_fetch_array($result1);
    ?>
    <div class="container">
      <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
          <div class="col-sm-3">
            <?php switch ($id) {
                  case 1:
                    echo '<a href="details.php"><img class="img-responsive photo" src="img/photo1.jpg" alt="Personal photo"></a>';
                    break;
                case 2:
                    echo '<a href="details.php"><img class="img-responsive photo" src="img/photo2.jpg" alt="Personal photo"></a>';
                    break;
                case 3:
                    echo '<a href="details.php"><img class="img-responsive photo" src="img/photo3.jpg" alt="Personal photo"></a>';
                    break;
                  case 4:
                    echo '<a href="details.php"><img class="img-responsive photo" src="img/photo4.jpg" alt="Personal photo"></a>';
                    break;
                case 5:
                    echo '<a href="details.php"><img class="img-responsive photo" src="img/photo5.jpg" alt="Personal photo"></a>';
                    break;
                case 6:
                    echo '<a href="details.php"><img class="img-responsive photo" src="img/photo6.jpg" alt="Personal photo"></a>';
                    break;
                default:
                    echo '<a href="details.php"><img class="img-responsive photo" src="http://placehold.it/350x250" alt="Personal photo"></a>';
                  } ?>
          </div>
          <div class="col-sm-9">
            <h2 class="about-title">Hi, I'm <?php echo $row1['name']; ?>.</h2>
            <hr>
            <p><?php echo $row1['position_held']; ?></p>
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
            <p><?php echo $row1['name'].' '.$row1['surname']; ?></p>
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
            <p><?php echo $row1['year_of_birth'].' - '.$row1['city']; ?></p>
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
            <p><?php echo $row1['email']; ?></p>
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
        $studies="SELECT s.organisation,s.specialization,s.title_of_qualification,s.from,s.to from Studies s where s.id_person=$id";
        $result2=mysqli_query($conexiune,$studies) or die (mysqli_error($conexiune));
        while($row2 = mysqli_fetch_array($result2)){
          echo '<div class="row">';
            echo '<div class="col-sm-10 col-sm-offset-1">';
              echo '<div class="col-sm-3">';
                echo '<i class="fa fa-dot-circle-o fa-3x p-icon" aria-hidden="true"></i>';
              echo '</div>';
              echo '<div class="col-sm-9">';
                echo '<h4 class="item-title">'.$row2['organisation'].'</h4>'; 
                echo '<hr>';
                echo '<p>'.$row2['specialization'].' <i>'.$row2['from'].' - '.$row2['to'].'</i></p>';
                echo '<p>';
                  echo 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean viverra dignissim rutrum. Nullam elementum sagittis lacus, sed eleifend tortor vulputate in.';
                echo '</p>';
                echo '<p><b>'.$row2['title_of_qualification'].'</b></p>';
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
        $work="SELECT w.employer,w.position_held,w.from,w.to from Work_experience w where w.id_person=$id";
        $result3=mysqli_query($conexiune,$work) or die (mysqli_error($conexiune));
        while($row3 = mysqli_fetch_array($result3)){
          echo '<div class="row">';
            echo '<div class="col-sm-10 col-sm-offset-1">';
              echo '<div class="col-sm-3">';
                echo '<i class="fa fa-dot-circle-o fa-3x p-icon" aria-hidden="true"></i>';
              echo '</div>';
              echo '<div class="col-sm-9">';
                echo '<h4 class="item-title">'.$row3['employer'].'</h4>'; 
                echo '<hr>';
                echo '<p>'.$row3['position_held'].' <i>'.$row3['from'].' - '.$row3['to'].'</i></p>';
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
        $language="SELECT l.language,l.type from Languages l where l.id_person=$id";
        $result4=mysqli_query($conexiune,$language) or die (mysqli_error($conexiune));
        while($row4 = mysqli_fetch_array($result4)){
          echo '<div class="row">';
            echo '<div class="col-sm-10 col-sm-offset-1">';
              echo '<div class="col-sm-3">';
                echo '<i class="fa fa-dot-circle-o fa-3x p-icon" aria-hidden="true"></i>';
              echo '</div>';
              echo '<div class="col-sm-9">';
                echo '<h4 class="item-title">'.$row4['language'].'</h4>';
                echo '<hr>';
                echo '<p><i>'.$row4['type'].' language</i></p>';
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
