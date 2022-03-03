<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pcontroller extends Controller
{
    public function laptop(){
        return "Laptop - Asus";
    }
    public function keyboard(){
        return "Keyboard - Rexus";
    }
    public function handphone(){
        return "Handphone - Oppo A5 2020";
    }
    public function flashdisk(){
        return "flashdisk - sandisk";
    }
    public function mouse(){
        return "Mouse - Rexus";
    }
}
