<?php 
$title = 'Leeds Formula';
$description = 'Welcome to the home page for Leeds Formula';
include 'template/header.php'; 
include 'database/connection.php';
include 'functions/profiles.php';
?>


<?php
$member = member_profile($_GET['id']);
?>
<div class="row profile">
	<div class="col-md-5">
		<?php echo "<img src=\"images/team/".$member['image'].".jpg\" alt=\"".$member['name']."\">"; ?>
	</div>
	<div class="col-md-7">
		<?php echo "<h1>".$member['name']."</h1><h3><span class=\"gray\">Team: </span>".$member['dept']."</h3><h3><span class=\"gray\">Role: </span>".$member['role']."</h3><p>".$member['bio']."</p>"; ?>
	</div>
</div>

<?php include 'template/footer.php' ?>