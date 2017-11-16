<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getHomePage(){
        $name = "KPT";
        $fullname = "khoa pham training";
        $arr = [$name,$fullname];
        //return view('home',['data'=>$name,'fullname'=>$fullname]);
        return view('home',compact('name','fullname','arr'));
    }

    public function getProduct(){
        //return redirect()->route('trangchu');
        $alias = "san-pham-1";
        $id = 1;
        return view('pages.product',compact('alias','id'));
    }

    // public function getProduct2($alias2,$maSP){
    //     echo $alias2;
    //     echo "</br>";
    //     echo $maSP;
    // }
    
    public function getProduct2(Request $request){        
        echo $request->alias;
        echo "</br>";
        echo $request->id;
    }
}
