<?php

namespace Ipsp\Resources;

use Ipsp\Resource;

/**
 * Class PaymentUrl
 */
class Checkout extends Resource
{
    protected $path   = '/checkout/url';
    protected $fields = array(
        'merchant_id'=>array(
            'type'    => 'string',
            'required'=>TRUE
        ),
        'order_id'=>array(
            'type'    => 'string',
            'required'=>TRUE
        ),
        'order_desc'=>array(
            'type' => 'string',
            'required'=>TRUE
        ),
        'currency' => array(
            'type' => 'string',
            'required'=>TRUE
        ),
        'amount' => array(
            'type' => 'integer',
            'required'=>TRUE
        ),
        'signature' => array(
            'type' => 'string',
            'required'=>TRUE
        )
    );
    public function redirectToCheckout(){
        $this->getResponse()->redirectTo('checkout_url');
    }
}