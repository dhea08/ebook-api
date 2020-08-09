<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
     public function me(){
        return [
            "nis" => 3103118044,
            "name" => "Dhea Fesa Athallah",
            "gender" => "Perempuan",
            "phone" => "+6281215172011",
            "class" => "XII RPL 2"
        ];
    }
}