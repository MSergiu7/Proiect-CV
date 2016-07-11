<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php
			include 'conexiune.php';
			
			$info="SELECT id_person,name,surname,year_of_birth from Personal_data";
			$result=mysqli_query($conexiune,$info) or die (mysqli_error($conexiune));
			while ($row = mysqli_fetch_array($result))  {
				$id=$row['id_person'];
				echo '<ul class="list">';
	      			echo '<li>';
						echo '<div class="col-sm-4">';
				      		echo '<div class="col-sm-6">';
				        		switch ($id) {
				        			case 1:
				        				echo '<a href="details.php?id='.$row['id_person'].'"><img class="img-responsive photo" src="img/photo1.jpg" alt="Personal photo"></a>';
				        				break;
							    	case 2:
							        	echo '<a href="details.php?id='.$row['id_person'].'"><img class="img-responsive photo" src="img/photo2.jpg" alt="Personal photo"></a>';
							        	break;
							    	case 3:
							        	echo '<a href="details.php?id='.$row['id_person'].'"><img class="img-responsive photo" src="img/photo3.jpg" alt="Personal photo"></a>';
							        	break;
				        			case 4:
				        				echo '<a href="details.php?id='.$row['id_person'].'"><img class="img-responsive photo" src="img/photo4.jpg" alt="Personal photo"></a>';
				        				break;
							    	case 5:
							        	echo '<a href="details.php?id='.$row['id_person'].'"><img class="img-responsive photo" src="img/photo5.jpg" alt="Personal photo"></a>';
							        	break;
							    	case 6:
							        	echo '<a href="details.php?id='.$row['id_person'].'"><img class="img-responsive photo" src="img/photo6.jpg" alt="Personal photo"></a>';
							        	break;
							    	default:
							        	echo '<a href="details.php?id='.$row['id_person'].'"><img class="img-responsive photo" src="http://placehold.it/350x250" alt="Personal photo"></a>';
							        }
				      		echo '</div>';
				      		echo '<div class="col-sm-6 infoinfos">';
				        		echo '<a href="details.php?id='.$row['id_person'].'"><h5 class="name">'.$row['name'].' '.$row['surname'].'</h5></a>';
				        		$age=date("Y")-$row['year_of_birth'];
				        		echo '<p><i class="fa fa-user icon" aria-hidden="true"></i> Age: '.$age.'</p>';

				        		$info2="select position_held from Work_experience where id_person=$id";
								$result2=mysqli_query($conexiune,$info2) or die (mysqli_error($conexiune));
								$row2 = mysqli_fetch_array($result2);
				        		echo '<p><i class="fa fa-briefcase icon" aria-hidden="true"></i>'.$row2['position_held'].'</p>';
				      		echo '</div>';
				    	echo '</div>';
			    	echo '</li>';
    			echo '</ul>';
			}
		?>
	</body>
</html>
