<?php 
$title = 'Leeds Formula Team';
$description = 'Meet the people working on the team';
include 'template/header.php'; 

include 'misc/teammembers.php';

include 'database/connection.php';

?>

<h1>Meet The Team</h1>

<div id="team-box">
	
		<div class="row">
			<div class="col-md-4">
				<h2>Chassis and Suspension</h2>
			</div>
			<div class="col-md-8 team">
				<ul class="team-thumbs">
					<?php
						GLOBAL $db;

						
						$query = "SELECT * FROM team WHERE dept = 'Chassis and Suspension'";
						$result = mysqli_query($db, $query);
						while ($member=mysqli_fetch_assoc($result)) { 
							echo "<li><a href=\"profile.php?id=".$member['id']."\">
									<img src=\"images/team/thumbs/".$member['image'].".jpg\" alt=\"".$member['name']."\">
									<h3>".$member['name']."</h3>
								</a></li>";
						}
						
						
					?>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<h2>Driveline and Brakes</h2>
			</div>
			<div class="col-md-8 team">
				<ul class="team-thumbs">
					<?php
						GLOBAL $db;

						
						$query = "SELECT * FROM team WHERE dept = 'Driveline and Brakes'";
						$result = mysqli_query($db, $query);
						while ($member=mysqli_fetch_assoc($result)) { 
							echo "<li><a href=\"profile.php?id=".$member['id']."\">
									<img src=\"images/team/thumbs/".$member['image'].".jpg\" alt=\"".$member['name']."\">
									<h3>".$member['name']."</h3>
								</a></li>";
						}
						
						
					?>
				</ul>
			</div>
		</div>
	
	
</div>


<?php include 'template/footer.php' ?>