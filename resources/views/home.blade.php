<h1>WELCOME CLASS</h1>
<p>Chào các bạn</p>
  <p><?php //echo $data?></p>
{{--
<p>{{$data}}</p> --}}

<p>{{$name.$name}}</p>
<p>{{$fullname}}</p>

<p>
<?php 
    //print_r($arr);
    foreach($arr as $item){
        echo $item;
        echo "<br>";
    }
?>
</p>