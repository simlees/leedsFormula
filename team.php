<?php 
$title = 'Leeds Formula Team';
$description = 'Meet the people working on the team';
$styles = 'styles/team.css';
include 'template/header.php'; 

include 'misc/teammembers.php';

?>

<h1>Meet The Team</h1>

<ul id="team-thumbs">
<?php
	foreach($teammembers as $member){
		echo '
			<li>
				<img src="images/team/'.$member['picture'].'" alt="picture">
				<h2>'.$member['name'].'</h2>
			</li>
		';
	}
?>
</ul>

<ul id="team-bios">
	<li>
		<p>Joe Foo works on the engine. He likes it real powerful. Blah blah blah</p>
	</li>
	<li>
		<p>Some shit</p>
	</li>
	<li>
		<p>More shit</p>
	</li>
</ul>



<?php include 'template/footer.php' ?>