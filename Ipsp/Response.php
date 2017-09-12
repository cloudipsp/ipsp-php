<?php

/**
 * Class Ipsp_Response
 */
class Ipsp_Response {
    private $data = array();
    public function __construct($data = array()){
		
        array_walk_recursive($data, function($value, $key){
            $this->data[$key] = $value;
        });
    }
    /**
     * @param $name
     * @return null
     */
    public function __get($name){
        return isset($this->data[$name]) ? $this->data[$name] : NULL ;
    }
    /**
     * @return string
     */
    public function __toString(){
        return json_encode($this->data,JSON_PRETTY_PRINT);
    }
    /**
     * @return array
     */
    public function getData(){
        return $this->data;
    }
    public function isSuccess(){
        return $this->response_status=='success';
    }
    public function isFailure(){
        return $this->response_status=='failure';
    }
    public function redirectTo($prop=''){
        if($this->$prop){
            header(sprintf('Location: %s',$this->$prop));
        }
    }
	public function redirectToCheckout(){
        $this->redirectTo('checkout_url');
    }
	public function isCaptured()
    {
        return $this->data['capture_status'] != 'captured' ? false : true;
    }
}