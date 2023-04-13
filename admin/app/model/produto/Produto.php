<?php
/**
* Produto Active Record
**/
class Produto extends TRecord{
    const TABLENAME = 'produto';
    const PRIMARYKEY = 'id';
    const IDPOLICE = 'serial';
    
    const CREATEDAT = 'data_criado';
    
    private $nome;
    private $descricao;
    private $preco;
    private $foto;
    private $link_afiliado;
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
        parent::addAttribute('categoria_id');
        parent::addAttribute('loja_id');
        parent::addAttribute('data_criacao');
    }
    
    public function get_categoria(){
        if(empty($this->categoria)){
            $this->categoria = new Categoria($this->categoria_id);
            
        }
        
        return $this->categoria;
    }
    
    public function get_loja(){
        if(empty($this->loja)){
            $this->loja = new Loja($this->loja_id);
            
        }
        
        return $this->loja;
    }
}
