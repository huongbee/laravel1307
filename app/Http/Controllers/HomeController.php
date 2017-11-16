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
        return view('pages.product');
    }
}
