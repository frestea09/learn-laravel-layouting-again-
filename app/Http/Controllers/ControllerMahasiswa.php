<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerMahasiswa extends Controller
{
    public function index(){
        return view('home');
    }
    public function passingBanyak(){
        $dataParsing = [
            'nim'=>'10112299',
            'name'=>'ilman',
            'nilai'=>'A'
        ];
        return view('passing',$dataParsing);
    }
}
