<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
   public function index()
    {
       
        echo '1';
        //
    }
    public function show($halaman)
    {
        if($halaman=="ok"){
            echo "showwwww";
        }
        else{
            echo "Not Found";
        }
    }
}

