@extends("calculator")

@section("content")


@if(Request::get("n1") != null )
    @if(Request::get("n2") != null)
        <hr>
        <h5>{{ Request::get("n1") * Request::get("n2") }}</h5>
    @else
       <hr>
       <h5>計算錯誤，第二個數字不能為空白</h5>
    @endif
@else
    <hr>
     <h5>計算錯誤，第一個數字不能為空白</h5>
@endif
     
    

@endsection