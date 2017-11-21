@extends('master')

@section('title')
 {{--  Home  --}}
@endsection

@section('content')
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
@endsection

@section('right')

    @foreach($arr as $item)
        {{$item}}
        <br>
    @endforeach

    </p>

    <a href="{{route('sanpham')}}">Sản Phẩm</a> | <a href="san-pham">Sản Phẩm </a>


    @if(1>2)
        một lớn hơn hai

    @elseif(1==2)
        1 = 2
    @else
       <div> một bé hơn hai </div>
       {{'một bé hơn hai'}}
    @endif
    <div>
        <?php
         $arr = ['PHP','iOS','NodeJS']; 
           //$arr = [];
        ?>
        {{--  @if(empty($arr))
            mảng rỗng
        @else
            @foreach($arr as $item)
                {{$item}}
            @endforeach
        @endif  --}}


        @forelse($arr as $pt)
            {{$pt}}
            @break($pt=="iOS") 
            {{--  
            //c2
            @if($pt=="iOS")
                @break
            @endif  --}}
        @empty 
            mảng rỗng        
        @endforelse
    </div>
@endsection