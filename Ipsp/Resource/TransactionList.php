<?php
/**
 * Class Ipsp_Transaction_List
 */
class Ipsp_Resource_TransactionList extends Ipsp_Resource
{

    protected $path = '/transaction_list';
    protected $fields = array(
        'order_id' => array(
            'type' => 'string',
            'required' => TRUE
        ),
        'merchant_id' => array(
            'type' => 'int',
            'required' => TRUE
        ),
        'signature' => array(
            'type' => 'string',
            'required' => TRUE
        )
    );
}