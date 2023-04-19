<?php

$response = file_get_contents(URL_BASE.'admin/rest.php?class=LojaRestService&method=handle&order=nome');
$lojas = json_decode($response)->data;

$response = file_get_contents(URL_BASE.'admin/rest.php?class=CategoriaRestService&method=handle&order=nome');
$categorias = json_decode($response)->data;

$response = file_get_contents(URL_BASE.'admin/rest.php?class=ProdutoRestService&method=handle&order=data_criado&direction=desc');
$produtos = json_decode($response)->data;