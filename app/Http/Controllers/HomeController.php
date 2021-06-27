<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class HomeController extends Controller
{

    
    public function login()
    {
        return view('v_login');
    }

    public function index()
    {
        if(Session::get('login') != null){
            return view('v_home');
        }else{
            return redirect()->route('landing');
        }
        
    }

    public function about($id){
        return 'Ini halaman about  <br>'. $id;
    }
    
}