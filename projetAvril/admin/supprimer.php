<?php
require 'database.php';
if (isset($_GET)) {
	$id = $_GET['id'];
    $db = Database::connect();
	$delete = $db->query('DELETE FROM projet WHERE id = '.$id);
	header('location:../admin.php');
	
}

?>