<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class HasilController extends Controller
{
    public function index(){
        if(Session::get('login') != null){
            return view('v_hasil');
        }else{
            return redirect()->route('landing');
        }
        
    }
}
