<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return[
            'nis'=>3103119127,
            'name'=>'Haykal',
            'phone'=>'085325507584',
            'class'=>'XII RPL 4'
        ];
    }
}
