<?php

if (isset($_GET['p'])) {
	$page = $_GET['p'];
}else{
	$page = 'article';
}

if(file_exists('/controller/'.$page.'_controller.php')){
	require '/controller/'.$page.'_controller.php';
}else{
	require '/controller/'.$page.'_controller.php';
}

?>