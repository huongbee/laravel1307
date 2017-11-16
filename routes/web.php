<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/{name}/{id?}.html',function($ten,$id="123457"){
//     echo "Hello World! 12345";
//     echo "</br>";
//     //echo $_GET['name'];

//     echo $ten;
//     echo $id;
// });


// Route::get('/hello/{name?}/{id}',function($ten="sdsd",$id="2222"){
//     echo $ten;
//     echo "<hr>";
//     echo $id;
// })->where([
//     'name'=>'[a-zA-Z]*',
//     'id'=>'[0-9]{0,5}'
// ])->name('chao');

// Route::get("call-route-{name}",function($name){
//     //return redirect()->route('chao',['name'=>"huong",'id'=>1212]);
//     return redirect()->route('chao_2',$name);
// });


// Route::get('say-hello-{name}',function($name){
//     echo "Chào bạn ".$name;
// })->where('name','[a-zA-Z]*')
// ->name('chao_2');


// Route::group(['prefix'=>"admin"],function(){
//     //admin
//     Route::get('/', function () {
//         echo "Chào admin";
//     });

//     //admin/danh-sach
//     Route::get('/danh-sach', function () {
//         echo "danh sách";
//     });
// });

// Route::get('/',function(){
//     return view('home');
// });


Route::get('/',[
    'uses'=>'HomeController@getHomePage',
    'as'=>'trangchu'
]);

Route::get('san-pham',[
    'uses'=>'HomeController@getProduct',
])->name('sanpham');

// Route::get('{alias}/{id}.html',[
//     'uses'=>'HomeController@getProduct2',
//     'as'=>'chitiet'
// ]);


Route::get('{id}/{alias}.html',[
    'uses'=>'HomeController@getProduct2',
    'as'=>'chitiet'
]);
