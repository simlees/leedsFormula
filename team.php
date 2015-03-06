<?php 
$title = 'Leeds Formula Team';
$description = 'Meet the people working on the team';
include 'template/header.php'; 

include 'misc/teammembers.php';

?>

<h1>Meet The Team</h1>

<div id="team-box">
	<ul id="team-thumbs">
		<?php
			$i = 0;
			/*
			foreach($teammembers as $member){
				echo '
					<li>
						<img src="images/team/'.$member['picture'].'" alt="'.$i.'">
						<h3>'.$member['name'].'</h3>
					</li>
				';
				$i++;
			}
			*/
			for($i=1;$i<=20;$i++){
				echo '
					<li>
						<img src="images/team/thumbs/'.$i.'.jpg" alt="'.$i.'">
						<h3>Name</h3>
					</li>
				';
			}
		?>
	</ul>
</div>


<?php include 'template/footer.php' ?>