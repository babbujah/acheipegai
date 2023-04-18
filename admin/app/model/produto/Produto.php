<?php
/**
 * Produto Active Record
 * @version    1.0
 * @package    model/produto
 * @author     brunosilva
**/
class Produto extends TRecord{
    const TABLENAME = 'produto';
    const PRIMARYKEY = 'id';
    const IDPOLICE = 'serial';
    
    const CREATEDAT = 'data_criado';
    
    /*private $nome;
    private $descricao;
    private $preco;
    private $foto;
    private $link_afiliado;*/
    private $categoria;
    private $loja;
    
    /**
    * Método Construtor 
    **/
    public function __construct($id = NULL, $callObjectLoad = TRUE){
        parent::__construct($id, $callObjectLoad);
        
        parent::addAttribute('nome');
        parent::addAttribute('descricao');
        parent::addAttribute('preco');
        parent::addAttribute('foto');
        parent::addAttribute('link_afiliado');
        parent::addAttribute('id_categoria');
        parent::addAttribute('id_loja');
        parent::addAttribute('data_criado');
    }
    
    public function get_categoria(){
        if(empty($this->categoria)){
            $this->categoria = new Categoria($this->id_categoria);
            
        }
        
        return $this->categoria;
    }
    
    public function get_loja(){
        if(empty($this->loja)){
            $this->loja = new Loja($this->id_loja);
            
        }
        
        return $this->loja;
    }
}
