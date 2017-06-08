<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    //passing data basic
    public function percobaan()
    {
    	$a = "ahmad";
    	return "nama saya adalah ".$a;
    }


    //passing data view
    public function percobaan2()
    {
   return view('about');
      }
//passing data  variable to view
    public function percobaan3()
    {
   $b ="ahmad";
   return view('latihan.saya',compact('b'));
     }

//passing data  variable to view
    public function percobaan4()
    {
   $c ="AHMAD DIDIK" ;
   $d    ="XII RPL2"    ;
   $e   ="SMK assalaam";
   return view('latihan2.nama',compact('c','d','e'));
}

 public function percobaan5()
    {
   $f ="1" ;
   $g    ="2"    ;
   $h   ="3";
   return view('seleksi',compact('f','g','h'));
}
  public function buah8($id)
    {
    $id=['mangga','jeruk','apel','anggur','manggis'];
    

    return view('buahb',compact('id' ));
}

     }