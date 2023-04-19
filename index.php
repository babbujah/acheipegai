<?php
	require 'env.php';
	require 'api.php';	

	$page = empty($_GET['page']) ? 'home' : $_GET['page'];

	if( !is_file('pages/'.$page.'.php')  ){
		$page = '404';
	}

	require 'content/header.php';
	require 'pages/'.$page.'.php';
	require 'content/footer.php';
