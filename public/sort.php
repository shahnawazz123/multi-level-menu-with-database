<?php 


if(isset($_POST['submit'])){
	require_once 'db.php';

	$updated = update_sorting_order($_POST['id'], $_POST['order']);

	if($updated){
		header('Location: index.php?success');
	}
	else{
		header('Location: index.php?error');
	}
}
else{
	header('Location: index.php');
}