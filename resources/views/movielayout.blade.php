

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>movieslist</title>
</head>
<body>
    @if(Session::has("message"))
        <p style="color: chartreuse;">{{Session::get("message")}}</p>
    @endif
    <h1>播放清單</h1>
    <div class="content">
        @yield("movie_content")
    </div> 
<hr>


<form action="{{route("movieadd")}}" method="post">
    <label for="link">請輸入影片連結</label>
    <input type="text" name="link" id="link">
    <label for="title">請輸入影片標題</label>
    <input type="text" name="title" id="title">
    <input type="submit" value="新增影片">
    @csrf
</form>

@foreach ($movies as $mid )

    <ul>
        <li>
            <a href="{{route("movie", $mid)}}">{{$mid["title"]}}</a>  <a href="{{route("movieremove", $mid)}}">刪除</a> 
        </li>
    </ul>
@endforeach  


</body>
</html>