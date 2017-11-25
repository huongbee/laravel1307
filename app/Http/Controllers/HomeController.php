<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

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
        echo "<hr>";
        echo $request->path();
        echo "<hr>";
        echo $request->url();

        echo "<hr>";
        if($request->is('admin/*')){
            echo "có tồn tại admin/";
        }
        else{
            echo "không tồn tại admin/";
        }

        echo "<hr>";
        if($request->isMethod('put')){
            echo "using method put";
        }
        else{
            echo "not using method put";
        }
        echo "<hr>";

        print_r($request->all());
    }

    function setCookie(Response $res){
        $res->withCookie('username','huonghuong',1);
        echo 'đẫ set cookie';
        return $res;
    }

    function getCookie(Request $req){
        echo $req->cookie('username');
    }

    function setSession(Request $req){
        echo 'wert ';
        return $req->session()->put('password','1234567');
    }

    function getSession(Request $request){
        echo  $request->session()->get('password','2345678943455656');
    }



    public function getFormContact(){
        return view('pages.contact-form');
    }

    public function postFormContact(Request $req){
        //echo $req->fullname;
        echo $req->input('fullname', "Tên người dùng");
        echo "<hr>";

        echo $req->email;
        echo "<hr>";

        echo $req->title;
        echo "<hr>";

        echo $req->message;
        echo "<hr>";

        //$data = $req->all();

        //echo $req->image; //chỉ nhận được file ở thư mục tạm
        if($req->hasFile('image')){
            $file = $req->file('image');

            // echo "<pre>";
            // print_r($file);
            // echo "</pre>";

            //checkFileSize <= 100kb = 102400
            //png/jpg/gif
            $size = $file->getSize();//144677 //87956
            if($size > 102400){
                //return redirect()->back();
                return redirect()->route('contact-form')->with('error','File quá lớn');
            }

            $arrExt = ['png','jpg','gif'];
            $ext = $file->getClientOriginalExtension();
            if(!in_array($ext, $arrExt)){
                return redirect()->route('contact-form')->with([
                    'error'=>'File không được chọn!',
                    'error2'=>'File 2 không được chọn!'
                ]);
            }
            
            $name = $file->getClientOriginalName();
            //$newName = time().'-'.$name;
            $newName = date('Y-m-d').'-'.date('H-i-s').'-'.$name;
            //$ext = $file->extension();

            //$ext_2 = $file->getClientOriginalExtension();
            //echo $ext; 

            
            $file->move('images',$newName);
            echo "Uploaded!";
        }
        else{
            echo "Bạn chưa chọn file";
        }
        
    }   
}
