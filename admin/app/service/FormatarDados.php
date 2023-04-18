<?php
/**
 * FormatarDados classe de apoio para formatação de dados
 * @version    1.0
 * @package    service
 * @author     brunosilva
**/
class FormatarDados{
    /**
     * Função para formatação de moeda.
     * @param $valor valor a ser formatado.
     * @param $object objeto de dados completo vindo do formulário.
     * @param $row linha do formulário.
     * @author brunosilva 
    **/
    public static function formatarMoeda( $valor, $object, $row ){
        $valorFormatado = number_format( $valor, 2, ',', '.' );
        
        $valorFormatado = "R$ ". $valorFormatado;
        
        return $valorFormatado;
    }
    
    /**
     * Função para formatação de imagem.
     * @param $imagem path da imagem a ser formatada.
     * @param $object objeto de dados completo vindo do formulário.
     * @param $row linha do formulário.
     * @author brunosilva 
    **/
    public static function formatarImagem( $imagem, $object, $row ){
        
        if( empty($imagem) ){
            return "";
            
        }
        
        $imagemFormatada = new TImage( URL_BASE.$imagem );
        $imagemFormatada->style = 'max-width: 140px';
        $imagemFormatada->onerror = "this.onerror=null;this.src='app/images/noimage.png';";
        
        return $imagemFormatada;
    }
    
    /**
     * Função para formatação de link de acesso
     * @param $url link de acesso ao objeto selecionado
     * @param $object objeto de dados completo vindo do formulário.
     * @param $row linha do formulário.
     * @author brunosilva 
    **/
    public static function formatarLink( $url, $object, $row ){
        
        return TElement::tag( 'a', 'Clique para acessar', ['href' => $url ] );
    }
}
