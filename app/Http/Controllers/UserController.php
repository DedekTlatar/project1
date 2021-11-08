<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
   public function index()
    {
       
        echo '1';
        //s
    }
    public function show($halaman)
    {
        if($halaman=="ok"){
            echo "Tampil Sesuai data";
        }
        else{
            echo "Not Found";
        }
    }
}

