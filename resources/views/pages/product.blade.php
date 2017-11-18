<a href="{{route('trangchu')}}">Home</a>

<div>
    <a href="{{route('chitiet',[$id,$alias])}}">Thông tin chi tiết sản phẩm</a>
    <a href="{{$alias.'/'.$id}}">Thông tin chi tiết sản phẩm</a>
</div>
<div>
    {{$name}}
</div>

{{$var}}