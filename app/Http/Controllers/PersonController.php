<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{   
    private $code = "190914023";
    private $name = "Ariel Pangestu";

    public function sendData() {
        $code = $this->code;
        $name = $this->name;

        return view("person.sendData", compact('code', 'name'));
    }

    //Membuat Method Baru
    public function show($param) {
        //Merubah Attribute Name
        $this->name = $param;
        return $this->name;
    }

    //Membuat Method Index
    public function index() {
        return view("person.index");
    }
}