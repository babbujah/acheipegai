<?php
/**
 * LojaForm Form
 * @author  <your name here>
 */
class LojaForm extends TPage
{
    protected $form; // form
    
    /**
     * Form constructor
     * @param $param Request
     */
    public function __construct( $param )
    {
        parent::__construct();
        
        
        // creates the form
        $this->form = new BootstrapFormBuilder('form_Loja');
        $this->form->setFormTitle('Loja');
        

        // create the form fields
        $id = new TEntry('id');
        $nome = new TEntry('nome');
        $link_afiliado = new TEntry('link_afiliado');
        //$logo = new TEntry('logo');
        $logo_nova = new TFile('logo_nova');
        $logo_nova->setAllowedExtensions(['png', 'jpg']);
        
        // add the fields
        $this->form->addFields( [ new TLabel('Id') ], [ $id ] );
        $this->form->addFields( [ new TLabel('Nome') ], [ $nome ] );
        $this->form->addFields( [ new TLabel('Link Afiliado') ], [ $link_afiliado ] );
        $this->form->addFields( [ new TLabel('Logo') ], [ $logo_nova ] );



        // set sizes
        $id->setSize('100%');
        $nome->setSize('100%');
        $link_afiliado->setSize('100%');
        $logo_nova->setSize('100%');



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
        $container->add($this->form);
        
        parent::add($container);
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
            
            //var_dump($data->logo);
            //die;
            
            $object = new Loja;  // create an empty object
            $object->fromArray( (array) $data); // load the object with data
            //$object->logo = ./img/lojas/'.$data->nome.'.png';
            $object->store(); // save the object
            
            if(!empty($data->logo_nova)){
                rename('tmp/'.$data->logo_nova, '../img/lojas/'.$object->id.'.png');
                $object->logo = './img/lojas/'.$object->id.'.png';
                $object->store();
                unset($data->logo_nova);            
            }
            
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
                $object = new Loja($key); // instantiates the Active Record
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
