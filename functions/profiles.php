<?php

//RETURN ARRAY OF TEAM MEMBER DETAILS
function member_profile ($id) {
	global $db;
	$result = $db->query("SELECT * FROM team
						  WHERE id = ".$id);
	return $result->fetch_assoc();
}

?>