<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViDuController extends Controller
{
    //
    function vidu2(){
        return view('vidu2');
        }

        function tinhtong(Request $request)
{
    $so_a = $request->input("so_a");
    $so_b = $request->input("so_b");
    $ket_qua = $so_a+$so_b;
    return "Kết quả là: ".$ket_qua;
}

    function vidu(){
        $name = "HUB";
        return view('vidu',compact("name"));
        }
      

function exam(){
$name = "Cac ban nha";
return view('exam',["name"=>$name]);

}
}


