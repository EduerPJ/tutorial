<?php

namespace App\Models;
class Paypal {
    private $id;
    private $secret;

    public function __construct($id, $secret)
    {
        $this->id = $id;
        $this->secret = $secret;
    }

    public function  doSomething(){
        return 'Esto es un Services Prividers - Services Container ' . $this->id . ' | ' . $this->secret;
    }
}