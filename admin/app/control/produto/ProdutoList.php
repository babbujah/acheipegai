<?php
/**
 * ProdutoList Listing
 * @version    1.0
 * @package    control/produto
 * @author     brunosilva
 */
class ProdutoList extends TPage
{
    protected $form;     // registration form
    protected $datagrid; // listing
    protected $pageNavigation;
    
    use Adianti\base\AdiantiStandardListTrait;
    
    /**
     * Page constructor
     */
    public function __construct()
    {
        parent::__construct();
        
        $this->setDatabase('acheipegai');            // defines the database
        $this->setActiveRecord('Produto');   // defines the active record
        $this->setDefaultOrder('id', 'asc');         // defines the default order
        $this->setLimit(10);
        // $this->setCriteria($criteria) // define a standard filter

        $this->addFilterField('id', '=', 'id'); // filterField, operator, formField
        $this->addFilterField('nome', 'like', 'nome'); // filterField, operator, formField
        $this->addFilterField('descricao', 'like', 'descricao'); // filterField, operator, formField
        $this->addFilterField('preco', 'like', 'preco'); // filterField, operator, formField
        $this->addFilterField('foto', 'like', 'foto'); // filterField, operator, formField
        $this->addFilterField('link_afiliado', 'like', 'link_afiliado'); // filterField, operator, formField
        $this->addFilterField('data_criado', 'like', 'data_criado'); // filterField, operator, formField
        $this->addFilterField('id_categoria', '=', 'id_categoria'); // filterField, operator, formField
        $this->addFilterField('id_loja', '=', 'id_loja'); // filterField, operator, formField

        $this->form = new TForm('form_search_Produto');
        
        $id = new TEntry('id');
        $nome = new TEntry('nome');
        $descricao = new TEntry('descricao');
        $preco = new TEntry('preco');
        $foto = new TEntry('foto');
        $link_afiliado = new TEntry('link_afiliado');
        $data_criado = new TEntry('data_criado');
        $id_categoria = new TDBUniqueSearch('id_categoria', 'acheipegai', 'Categoria', 'id', 'nome');
        $id_loja = new TDBUniqueSearch('id_loja', 'acheipegai', 'Loja', 'id', 'nome');

        $id->exitOnEnter();
        $nome->exitOnEnter();
        $descricao->exitOnEnter();
        $preco->exitOnEnter();
        $foto->exitOnEnter();
        $link_afiliado->exitOnEnter();
        $data_criado->exitOnEnter();

        $id->setSize('100%');
        $nome->setSize('100%');
        $descricao->setSize('100%');
        $preco->setSize('100%');
        $foto->setSize('100%');
        $link_afiliado->setSize('100%');
        $data_criado->setSize('100%');
        $id_categoria->setSize('100%');
        $id_loja->setSize('100%');

        $id->tabindex = -1;
        $nome->tabindex = -1;
        $descricao->tabindex = -1;
        $preco->tabindex = -1;
        $foto->tabindex = -1;
        $link_afiliado->tabindex = -1;
        $data_criado->tabindex = -1;
        $id_categoria->tabindex = -1;
        $id_loja->tabindex = -1;

        $id->setExitAction( new TAction([$this, 'onSearch'], ['static'=>'1']) );
        $nome->setExitAction( new TAction([$this, 'onSearch'], ['static'=>'1']) );
        $descricao->setExitAction( new TAction([$this, 'onSearch'], ['static'=>'1']) );
        $preco->setExitAction( new TAction([$this, 'onSearch'], ['static'=>'1']) );
        $foto->setExitAction( new TAction([$this, 'onSearch'], ['static'=>'1']) );
        $link_afiliado->setExitAction( new TAction([$this, 'onSearch'], ['static'=>'1']) );
        $data_criado->setExitAction( new TAction([$this, 'onSearch'], ['static'=>'1']) );
        $id_categoria->setChangeAction( new TAction([$this, 'onSearch'], ['static'=>'1']) );
        $id_loja->setChangeAction( new TAction([$this, 'onSearch'], ['static'=>'1']) );
        
        // creates a DataGrid
        $this->datagrid = new BootstrapDatagridWrapper(new TDataGrid);
        $this->datagrid->style = 'width: 100%';
        // $this->datagrid->enablePopover('Popover', 'Hi <b> {name} </b>');
        

        // creates the datagrid columns
        $column_id = new TDataGridColumn('id', 'Id', 'left');
        $column_nome = new TDataGridColumn('nome', 'Nome', 'left');
        $column_descricao = new TDataGridColumn('descricao', 'Descricao', 'left');
        $column_preco = new TDataGridColumn('preco', 'Preco', 'left');
        $column_foto = new TDataGridColumn('foto', 'Foto', 'left');
        $column_link_afiliado = new TDataGridColumn('link_afiliado', 'Link Afiliado', 'left');
        $column_data_criado = new TDataGridColumn('data_criado', 'Data Criado', 'left');
        $column_id_categoria = new TDataGridColumn('categoria->nome', 'Categoria', 'left');
        $column_id_loja = new TDataGridColumn('loja->nome', 'Loja', 'left');


        // add the columns to the DataGrid
        $this->datagrid->addColumn($column_id);
        $this->datagrid->addColumn($column_nome);
        $this->datagrid->addColumn($column_descricao);
        $this->datagrid->addColumn($column_preco);
        $this->datagrid->addColumn($column_foto);
        $this->datagrid->addColumn($column_link_afiliado);
        $this->datagrid->addColumn($column_data_criado);
        $this->datagrid->addColumn($column_id_categoria);
        $this->datagrid->addColumn($column_id_loja);

        
        $action1 = new TDataGridAction(['ProdutoForm', 'onEdit'], ['id'=>'{id}']);
        $action2 = new TDataGridAction([$this, 'onDelete'], ['id'=>'{id}']);
        
        $this->datagrid->addAction($action1, _t('Edit'),   'far:edit blue');
        $this->datagrid->addAction($action2 ,_t('Delete'), 'far:trash-alt red');
        
        // create the datagrid model
        $this->datagrid->createModel();
        
        // add datagrid inside form
        $this->form->add($this->datagrid);
        
        // create row with search inputs
        $tr = new TElement('tr');
        $this->datagrid->prependRow($tr);
        
        $tr->add( TElement::tag('td', ''));
        $tr->add( TElement::tag('td', ''));
        $tr->add( TElement::tag('td', $id));
        $tr->add( TElement::tag('td', $nome));
        $tr->add( TElement::tag('td', $descricao));
        $tr->add( TElement::tag('td', $preco));
        $tr->add( TElement::tag('td', $foto));
        $tr->add( TElement::tag('td', $link_afiliado));
        $tr->add( TElement::tag('td', $data_criado));
        $tr->add( TElement::tag('td', $id_categoria));
        $tr->add( TElement::tag('td', $id_loja));

        $this->form->addField($id);
        $this->form->addField($nome);
        $this->form->addField($descricao);
        $this->form->addField($preco);
        $this->form->addField($foto);
        $this->form->addField($link_afiliado);
        $this->form->addField($data_criado);
        $this->form->addField($id_categoria);
        $this->form->addField($id_loja);

        // keep form filled
        $this->form->setData( TSession::getValue(__CLASS__.'_filter_data'));
        
        // create the page navigation
        $this->pageNavigation = new TPageNavigation;
        $this->pageNavigation->setAction(new TAction([$this, 'onReload']));
        
        $panel = new TPanelGroup('Produto');
        $panel->add($this->form);
        $panel->addFooter($this->pageNavigation);
        
        // header actions
        $dropdown = new TDropDown(_t('Export'), 'fa:list');
        $dropdown->setPullSide('right');
        $dropdown->setButtonClass('btn btn-default waves-effect dropdown-toggle');
        $dropdown->addAction( _t('Save as CSV'), new TAction([$this, 'onExportCSV'], ['register_state' => 'false', 'static'=>'1']), 'fa:table blue' );
        $dropdown->addAction( _t('Save as PDF'), new TAction([$this, 'onExportPDF'], ['register_state' => 'false', 'static'=>'1']), 'far:file-pdf red' );
        $panel->addHeaderWidget( $dropdown );
        
        $panel->addHeaderActionLink( _t('New'),  new TAction(['ProdutoForm', 'onEdit'], ['register_state' => 'false']), 'fa:plus green' );
        
        // vertical box container
        $container = new TVBox;
        $container->style = 'width: 100%';
        // $container->add(new TXMLBreadCrumb('menu.xml', __CLASS__));
        $container->add($panel);
        
        parent::add($container);
    }
}
