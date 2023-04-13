<?php
/**
 * Loja REST service
 */
class LojaRestService extends AdiantiRecordService
{
    const DATABASE      = 'acheipegai';
    const ACTIVE_RECORD = 'Loja';
    const ATTRIBUTES    = ['id', 'nome', 'link_afiliado', 'logo'];

	public function load($param)
    {
        $database     = static::DATABASE;
        $activeRecord = static::ACTIVE_RECORD;
        
        TTransaction::open($database);
        
        $object = new $activeRecord($param['id'], FALSE);
        
        TTransaction::close();
        $attributes = defined('static::ATTRIBUTES') ? static::ATTRIBUTES : null;
        return $object->toArray( $attributes );
    }
    
    /**
     * Delete an Active Record object from the database
     * @param [$id]     HTTP parameter
     */
    public function delete($param)
    {
        throw new Exception('Falha ao executar');
    }
    
    /**
     * Store the objects into the database
     * @param $param HTTP parameter
     */
    public function store($param)
    {
        throw new Exception('Falha ao executar');
    }
    
    /**
     * List the Active Records by the filter
     * @return The Active Record list as array
     * @param $param HTTP parameter
     */
    public function loadAll($param)
    {
        $database     = static::DATABASE;
        $activeRecord = static::ACTIVE_RECORD;
        
        TTransaction::open($database);
        
        $criteria = new TCriteria;
        if (isset($param['offset']))
        {
            $criteria->setProperty('offset', $param['offset']);
        }
        if (isset($param['limit']))
        {
            $criteria->setProperty('limit', $param['limit']);
        }
        if (isset($param['order']))
        {
            $criteria->setProperty('order', $param['order']);
        }
        if (isset($param['direction']))
        {
            $criteria->setProperty('direction', $param['direction']);
        }
        if (isset($param['filters']))
        {
            foreach ($param['filters'] as $filter)
            {
                $criteria->add(new TFilter($filter[0], $filter[1], $filter[2]));
            }
        }
        
        $repository = new TRepository($activeRecord);
        $objects = $repository->load($criteria, FALSE);
        $attributes = defined('static::ATTRIBUTES') ? static::ATTRIBUTES : null;
        
        $return = [];
        if ($objects)
        {
            foreach ($objects as $object)
            {
                $return[] = $object->toArray( $attributes );
            }
        }
        TTransaction::close();
        return $return;
    }
    
    /**
     * Delete the Active Records by the filter
     * @return The result of operation
     * @param $param HTTP parameter
     */
    public function deleteAll($param)
    {
        throw new Exception('Falha ao executar');
    }

    /**
     * Find the count Records by the filter
     * @return The Active Record list as array
     * @param $param HTTP parameter
     */
    public function countAll($param)
    {
        throw new Exception('Falha ao executar');
    }
    
    /**
     * Handle HTTP Request and dispatch
     * @param $param HTTP POST and php input vars
     */
    public function handle($param)
    {
        $method = strtoupper($_SERVER['REQUEST_METHOD']);
        
        unset($param['class']);
        unset($param['method']);
        $param['data'] = $param;
        
        switch( $method )
        {
            case 'GET':
                if (!empty($param['id']))
                {
                    return self::load($param);
                }
                else
                {
                    return self::loadAll($param);
                }
                break;   
			
			default:
				throw new Exception('Falha ao executar');
        }
    }
}
