<?php

namespace App\Helpers;

class Bank
{
    public $referenceID;

    public function getReferenceID()
    {
        $this->referenceID = $this->uniqid();
        return $this->referenceID;
    }

    public function redirect()
    {
        return 'redirect : ' . $this->referenceID;
    }

    public  function verify()
    {
        return true;
    }

}
