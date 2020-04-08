<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Http;

class Melli extends Bank
{

    public function getReferenceID()
    {
        $this->referenceID = Http::get('http://melli.com');
        return $this->referenceID->status();
    }

    public function redirect()
    {
        return 'redirect melli : ' . $this->referenceID;
    }

    public  function verify()
    {
        $verify = Http::get('http://melli.com');
        return $verify->status();
    }

}
