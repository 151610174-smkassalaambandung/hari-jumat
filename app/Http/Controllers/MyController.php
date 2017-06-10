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
 public function latihan ($data,$data2=null)
    {
      $array= array ('binatang' => ['kucing'=>['persia','anggora'],
                                 'hamster'=>['hamstaro','hamtaris'],
                                 'kelinci'=>['anggora','persia']],

                  'buah' => ['mangga'=>['haromanis','marijan'],
                             'alpukat'=>['hijau','hitam'],
                             'apel'=>['hijau','merah']],

                  'leptop' =>['samsung'=>['254ur','29'],
                              'asus'=>['4156','4165'],
                              'acer'=>['630','7780']]
                              );
      if ($data){
        $query=(array_keys($array[$data]));
      }
      if($data2){
        $query=($array[$data][$data2]);
      }
      
      return view ('buahb', compact('query','data','data2'));
    }

     }

