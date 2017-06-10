<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\siswaa;

class SiswaController extends Controller
{
    //
    public function  percobaan($post)
    {
    	$a= siswaa::all();
    	return view('siswaa',compact('a'));

    }
    public function show()
    
    {
    	$a=siswaa::find(1);
    	return $a;
    }

}
