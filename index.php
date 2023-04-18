<?php
	require 'env.php';
	
	$response = file_get_contents(URL_BASE.'admin/rest.php?class=LojaRestService&method=handle&order=nome');
	$lojas = json_decode($response)->data;
	
	$response = file_get_contents(URL_BASE.'admin/rest.php?class=CategoriaRestService&method=handle&order=nome');
	$categorias = json_decode($response)->data;

	$response = file_get_contents(URL_BASE.'admin/rest.php?class=ProdutoRestService&method=handle&order=nome');
	$produtos = json_decode($response)->data;

	$page = empty($_GET['page']) ? 'home' : $_GET['page'];

	if( !is_file('pages/'.$page.'.php')  ){
		$page = '404';
	}

	require 'content/header.php';
	require 'pages/'.$page.'.php';
	require 'content/footer.php';
