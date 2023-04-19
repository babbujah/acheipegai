<?php

class Api{

    const API_URL_BASE = URL_BASE.'admin/rest.php';

    private $lojas;
    private $categorias;
    private $produtos;

    public function getLojas(){
        try{
            if( empty($this->lojas) ){
                $response = file_get_contents(self::API_URL_BASE.'?class=LojaRestService&method=handle&order=nome');
                $this->lojas = json_decode($response)->data;
            }
            return $this->lojas;
        }
        catch(Exception $e){
            return [];
        }
    }

    public function getCategorias(){
        try{
            if( empty($this->categorias) ){
                $response = file_get_contents(self::API_URL_BASE.'?class=CategoriaRestService&method=handle&order=nome');
                $this->categorias = json_decode($response)->data;
            }
            return $this->categorias;
        }
        catch(Exception $e){
            return [];
        }
    }

    public function getProdutos(){
        try{
            if( empty($this->produtos) ){
                $response = file_get_contents(self::API_URL_BASE.'?class=ProdutoRestService&method=handle&order=data_criado&direction=desc');
                $this->produtos = json_decode($response)->data;
            }
            return $this->produtos;
        }
        catch(Exception $e){
            return [];
        }
    }

    public function getProduto($id_produto){
        try{
            $response = @file_get_contents(self::API_URL_BASE.'?class=ProdutoRestService&method=handle&id='.$id_produto);
            $return = json_decode($response);
            
            if( empty($return->data) || $return->status == 'error' ){
                throw new Exception('Nenhum dado recebido.');
            }

            return $return->data;            
        }
        catch(Exception $e){
            return null;
        }
    }

}







