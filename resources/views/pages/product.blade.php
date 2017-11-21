@extends('master')
@section('right')

    <h2>Đây là nội dung trang chi tiêt</h2>
    <a href="{{route('trangchu')}}">Home</a>

    <div>
        <a href="{{route('chitiet',[$id,$alias])}}">Thông tin chi tiết sản phẩm</a>
        <a href="{{$alias}}/{{$id}}">Thông tin chi tiết sản phẩm</a>
    </div>
    <div>
        {{$name}}
    </div>

    <?php
    print_r($var)
    ?>
@endsection

@section('content')
 12346
@endsection

@section('title')
 Chi tiết sản phẩm
@endsection
