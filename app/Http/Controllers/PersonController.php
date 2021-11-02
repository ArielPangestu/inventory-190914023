<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function show($param){
        //Mengambilkan nilai Attribute name
        $this->name = $param;     
        return $this->name;
    }
}
