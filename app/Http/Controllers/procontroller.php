<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class procontroller extends Controller
{
    public function beasiswa(){
        return "Beasiswa - KIP Kuliah";
    }
    public function vaksinasi(){
        return "Vaksinasi - Sinovac";
    }
    public function donordarah(){
        return "Donor darah langsung";
    }
}
