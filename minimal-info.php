<?php
	include 'includes/db.class.php';
	include 'includes/user.class.php';
	include 'includes/work.class.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>

		<?php
			$user = new User();
			$users = $user->getAllUsers();

			foreach ($users as $user) {
				$id = $user['id_person'];
				$work = new Work();
				$work = $work->getUserWorks($id);
				echo '<ul class="list">';
					echo '<li>';
						echo '<div class="col-sm-4">';
				      		echo '<div class="col-sm-6">';
				      			//Show profile picture
				      			echo '<a href="details.php?id='.$id.'"><img class="img-responsive photo" src="img/photo'.$id.'.jpg" alt="Personal photo"></a>';
							echo '</div>';
				      		echo '<div class="col-sm-6 infoinfos">';
				      			//show user's name
				      			echo '<a href="details.php?id='.$user['id_person'].'"><h5 class="name">'.$user['name'].' '.$user['surname'].'</h5></a>';
				      			$age=date("Y")-$user['year_of_birth']; //transform year of birth to age
				      			echo '<p><i class="fa fa-user icon" aria-hidden="true"></i> Age: '.$age.'</p>'; //show user's age
				      			echo '<p><i class="fa fa-briefcase icon" aria-hidden="true"></i>'.end($work)['position_held'].'</p>'; // show the last job only
				      		echo '</div>';
				    	echo '</div>';
			    	echo '</li>';
				echo '</ul>';						     
			}
		?>
	</body>
</html>
