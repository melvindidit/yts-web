<?php require_once('includes/config.php');
$rel = $_POST['iid'];
//echo $rel;
$updateQuery = mysql_query("UPDATE `other_service` SET `flag`='0' WHERE `id` = '$rel' ");
//echo mysql_error();
if($updateQuery)
{
	echo 1;
}
?>