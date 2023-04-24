<?php
/**
 * ShareTemplateForm Form
 * @author  <your name here>
 */
class ShareTemplateForm extends TPage
{
    protected $datagrid;
    protected $form; // form
    
    /**
     * Form constructor
     * @param $param Request
     */
    public function __construct( $param )
    {
        parent::__construct();
        
        $col_tag = new TDataGridColumn( 'tag', 'TAG', 'left', '10%' );
        $col_descricao = new TDataGridColumn( 'descricao', 'Descrição', 'left' );
        
        $this->datagrid = new BootstrapDatagridWrapper( new TDataGrid() );
        $this->datagrid->width = '100%';
        
        $this->datagrid->addColumn($col_tag);
        $this->datagrid->addColumn($col_descricao);
        
        $this->datagrid->createModel();
        
        
        
        /*$tr = new TElement('tr');
        $tr->add( TElement::tag('td', '{NOME}') );
        $tr->add( TElement::tag('td', 'Nome do produto') );
        $this->datagrid->prependRow( $tr );
        
        $tr = new TElement('tr');
        $tr->add( TElement::tag('td', '{DESCRICAO}') );
        $tr->add( TElement::tag('td', 'Descrição do produto') );
        $this->datagrid->prependRow( $tr );*/
        
        // creates the form
        $this->form = new BootstrapFormBuilder('form_ShareTemplate');
        $this->form->setFormTitle('Novo Template de Compartilhamento');        

        // create the form fields
        $id = new THidden('id');
        $content = new THtmlEditor('content');
        $content->setSize('100%', 200);
        $content->setOption('placeholder', 'Digite aqui ...');

        // add the fields
        $this->form->addFields( [ $id ] );
        $this->form->addFields( [ new TLabel('Content') ], [ $content ] );

        // set sizes
        $id->setSize('100%');
        $content->setSize('100%');

        if (!empty($id))
        {
            $id->setEditable(FALSE);
        }
        
        /** samples
         $fieldX->addValidation( 'Field X', new TRequiredValidator ); // add validation
         $fieldX->setSize( '100%' ); // set size
         **/
         
        // create the form actions
        $btn = $this->form->addAction(_t('Save'), new TAction([$this, 'onSave']), 'fa:save');
        $btn->class = 'btn btn-sm btn-primary';
        $this->form->addActionLink(_t('New'),  new TAction([$this, 'onEdit']), 'fa:eraser red');
        
        // vertical box container
        $container = new TVBox;
        $container->style = 'width: 100%';
        // $container->add(new TXMLBreadCrumb('menu.xml', __CLASS__));
        $container->add($this->datagrid);
        $container->add($this->form);
        
        parent::add($container);
    }
    
    public function show(){
        $this->onReload();
        parent::show();
    }
    
    public function onReload(){
        $this->datagrid->clear();
        
        $item = new stdClass;
        $item->tag = '{NOME}';
        $item->descricao = 'Nome do produto';
        $this->datagrid->addItem($item);
                
        $item = new stdClass;
        $item->tag = '{PRECO}';
        $item->descricao = 'Valor do produto';
        $this->datagrid->addItem($item);
        
        $item = new stdClass;
        $item->tag = '{DESCRICAO}';
        $item->descricao = 'Descrição do produto';
        $this->datagrid->addItem($item);
        
        $item = new stdClass;
        $item->tag = '{URL}';
        $item->descricao = 'Endereço de acesso ao produto';
        $this->datagrid->addItem($item);       
        
        $item = new stdClass;
        $item->tag = 'MODELO';
        $item->descricao = 'O {NOME} está com o preço {PRECO}. Ele é {DESCRICAO} e pode ser acessado através do link {URL}.
                            As tags devem ser escritas dessa mesma forma escrita para que os dados possam sem devidamente substituídos.';
        $this->datagrid->addItem($item);
        
        /*$modelo_template = 'O {NOME} está com o preço {PRECO}. Ele é {DESCRICAO} e pode ser acessado através do link {URL}<BR>
                            As tags devem ser escritas dessa mesma forma escrita para que os dados possam sem devidamente substituídos.';
        $tr = new TElement('tr');
        $tr->add( TElement::tag('td', $modelo_template) );
        //$row->layout = [''];
        $this->datagrid->prependRow($tr);*/
    }

    /**
     * Save form data
     * @param $param Request
     */
    public function onSave( $param )
    {
        try
        {
            TTransaction::open('acheipegai'); // open a transaction
            
            /**
            // Enable Debug logger for SQL operations inside the transaction
            TTransaction::setLogger(new TLoggerSTD); // standard output
            TTransaction::setLogger(new TLoggerTXT('log.txt')); // file
            **/
            
            $this->form->validate(); // validate form data
            $data = $this->form->getData(); // get form data as array
            
            $object = new ShareTemplate;  // create an empty object
            $object->fromArray( (array) $data); // load the object with data
            $object->store(); // save the object
            
            // get the generated id
            $data->id = $object->id;
            
            $this->form->setData($data); // fill form data
            TTransaction::close(); // close the transaction
            
            new TMessage('info', AdiantiCoreTranslator::translate('Record saved'));
        }
        catch (Exception $e) // in case of exception
        {
            new TMessage('error', $e->getMessage()); // shows the exception error message
            $this->form->setData( $this->form->getData() ); // keep form data
            TTransaction::rollback(); // undo all pending operations
        }
    }
    
    /**
     * Clear form data
     * @param $param Request
     */
    public function onClear( $param )
    {
        $this->form->clear(TRUE);
    }
    
    /**
     * Load object to form data
     * @param $param Request
     */
    public function onEdit( $param )
    {
        try
        {
            if (isset($param['key']))
            {
                $key = $param['key'];  // get the parameter $key
                TTransaction::open('acheipegai'); // open a transaction
                $object = new ShareTemplate($key); // instantiates the Active Record
                $this->form->setData($object); // fill the form
                TTransaction::close(); // close the transaction
            }
            else
            {
                $this->form->clear(TRUE);
            }
        }
        catch (Exception $e) // in case of exception
        {
            new TMessage('error', $e->getMessage()); // shows the exception error message
            TTransaction::rollback(); // undo all pending operations
        }
    }
}
