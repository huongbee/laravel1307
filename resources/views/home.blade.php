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

<?php foreach($arr as $item): ?>
        <?=$item;?>
    
       <br>
<?php  endforeach ?>

@foreach($arr as $item)
    {{$item}}
    <br>
@endforeach

</p>

<a href="{{route('sanpham')}}">Sản Phẩm</a> | <a href="san-pham">Sản Phẩm </a>