<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Http;

class Mellat extends Bank
{

    public function getReferenceID()
    {
        $this->referenceID = Http::get('http://mellat.com');
        return $this->referenceID->status();
    }

    public function redirect()
    {
        return 'redirect mellat : ' . $this->referenceID;
    }

    public  function verify()
    {
        $verify = Http::get('http://mellat.com');
        return $verify->status();
    }

}
