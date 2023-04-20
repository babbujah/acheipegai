<?php

class Page {

    protected $title = 'Achei Pegai';
    protected $keywords = 'descontos pechincha preços produtos';
    protected $description = 'Descontos nas melhores lojas';
    protected $author = 'AcheiPegai Development Team';
    protected $metas = [];

    protected $params;
    protected $content;
    protected $api;

    public function __construct($params){
        $this->params = $params;
        $this->api = new Api; 

        $this->loadContent();
    }

    protected function loadContent(){
        $this->content = '';
    }

    protected function addMeta($property, $content){
        $this->metas[$property] = $content;     
    }

    public function set404(){
        $this->content = '
            <section class="http-error">
                <div class="row justify-content-center py-3">
                    <div class="col-md-12 text-center">
                        <div class="http-error-main">
                            <h2>404!</h2>
                            <p>Desculpe-nos! A página que você está buscando não existe.</p>
                        </div>
                    </div>
                </div>
            </section>
        ';
    }

    public function show(){
        $option_lojas = '';
        $menu_categorias = '';
        $list_lojas = '';
        $meta = '';

        foreach($this->api->getLojas() as $loja){
            $option_lojas.= '<option value="'.$loja->nome.'">'.$loja->nome.'</option>';
        }

        foreach( $this->api->getCategorias() as $categoria ){
            $menu_categorias.= '
                <li>
                    <a class="dropdown-item" href="./?categoria='.$categoria->nome.'">
                        '.$categoria->nome.'
                    </a>
                </li>
            ';
        }

        foreach( $this->api->getLojas() as $loja ){
            $list_lojas.= '<li class="list-inline-item"><a href="'.$loja->link_afiliado.'" class="badge badge-dark rounded border border-color-light-3 font-weight-normal text-2 p-2">'.$loja->nome.'</a></li>';
        }

        foreach( $this->metas as $property => $content ){
            $meta.= '<meta property="'.$property.'" content="'.$content.'"/>';
        }
        
        $layout = file_get_contents('layout.html');
        
        // Meta tags & Social
        $layout = str_replace( '{TITLE}', $this->title, $layout );
        $layout = str_replace( '{KEYWORDS}', $this->keywords, $layout );
        $layout = str_replace( '{DESCRIPTION}', $this->description, $layout );
        $layout = str_replace( '{AUTHOR}', $this->author, $layout );
        $layout = str_replace( '{META}', $meta, $layout );
        
        // Conteúdo dinâmico da loja
        $layout = str_replace( '{OPTION_LOJAS}', $option_lojas, $layout );
        $layout = str_replace( '{MENU_CATEGORIAS}', $menu_categorias, $layout );
        $layout = str_replace( '{LIST_LOJAS}', $list_lojas, $layout );
        $layout = str_replace( '{CONTENT}', $this->content, $layout );
        
        echo $layout;
    }

    

}