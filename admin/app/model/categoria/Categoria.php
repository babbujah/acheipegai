<?php
/**
* Categoria Active Record
* @version    1.0
* @package    model/loja
* @author     brunosilva
**/
class Categoria extends TRecord{
    const TABLENAME = 'categoria';
    const PRIMARYKEY = 'id';
    const IDPOLICE = 'serial';
    
    private $nome;
    
    /**
    * Método Construtor
    **/
    public function __construct($id = NULL, $callObjectLoad = TRUE){
        parent::__construct($id, $callObjectLoad);
        
        parent::addAttribute('nome');
    }
}
