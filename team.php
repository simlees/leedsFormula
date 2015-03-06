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
			foreach($teammembers as $member){
				echo '
					<li>
						<img src="images/team/'.$member['picture'].'" alt="'.$i.'">
						<h3>'.$member['name'].'</h3>
					</li>
				';
				$i++;
			}
		?>
	</ul>
</div>


<?php include 'template/footer.php' ?>