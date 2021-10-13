<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return ([
            'NIS' => '3103119127',
            'Nama' => 'Mukhammad Haykal Machrus',
            'Gender' => 'Pria',
            'Phone' => '085325507584',
            'Class' => 'XII RPL 4'
        ]);
    }
}
