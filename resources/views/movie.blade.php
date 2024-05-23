@extends("movielayout")

@section("movie_content")

<h1>{{$movie_id->title}}</h1>

<table >
    <tr>
        <td>
        
        <iframe width="560" height="315" src="https://www.youtube.com/embed/{{$movie_id->link}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </td>
        <td>
        <form action="{{route("comment")}}" method="post">
            <label for="nickname">請輸入暱稱</label>
            <input type="text" name="nickname" id="nickname">
            <label for="commenttext">請輸入評論</label>
            <input type="text" name="commenttext" id="commenttext">
            <input type="hidden" name="number" id="number" value={{$movie_id->id}}>
            <input type="submit" value="新增評論">
            @csrf
        </form>

        <h1>評論區</h1>

        @foreach ($comments_id as $cid )

            <h2>{{$cid["nickname"]}}:</h2> <h3> {{$cid["commenttext"]}}</h3>
        @endforeach
        </td>
    </tr>
</table>
@endsection

