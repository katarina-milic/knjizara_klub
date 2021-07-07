<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StraniceController extends Controller
{
    public function loginStranica(){
        return view('login');    
    }
    public function registracijaStranica(){
        return view('register');    
    }
    public function iznajmljivanjeKnjiga(){
        return view('iznajmljivanje');    
    }
    public function adminPanelStranica(){
        return view('admin-panel');    
    }
}
