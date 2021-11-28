<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class AuthController extends Controller
{
    public function me()
    {
        return ([
            'NIS' => '3103119119',
            'Nama' => 'Mohammad Verda Zhafif Zulfandy',
            'Gender' => 'Pria',
            'Phone' => '081391480917',
            'Class' => 'XII RPL 4'
        ]);
    }
}


