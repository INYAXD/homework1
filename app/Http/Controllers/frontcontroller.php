<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Comment;
class frontcontroller extends Controller
{
   //public function add(){return view("add");}
   //public function reduce(){return view("reduce");}
   //public function multiply(){return view("multiply");}
   //public function Divided(){return view("Divided");}

    
    
    public function movie($id=null){
        $movies = Movie::all()->toArray();
        $comments = Comment::all()->toArray();
        //dd($movies); 
        if($id == null){
            
            return view("movielayout", compact("movies"));
        }else{
 
            $movie_id = Movie::findOrFail($id);
            $comments_id = Comment::where("number", $id)->get()->toArray();
            return view("movie", compact("movie_id", "movies", "comments_id"));
        }
    }

    public function add(Request $request){
        Movie::create([
            "title" => $request->get("title"),
            "link" => $request->get("link")
        ]);
        return redirect(route("movie"))->with(["message"=>"新增影片成功!!"]);
    }
    
    public function remove($mid = null ){
        if($mid == null){
            return redirect(route("movie"))->with(["message"=>"請選擇要刪除的影片"]);
        }
        else{
            $movie = Movie::findorfail($mid);
            $movie->delete();
            return redirect(route("movie"))->with(["message"=>"刪除成功"]);
        }
    } 

    public function comment(Request $request){
        Comment::create([
            "nickname" => $request->get("nickname"),
            "commenttext" => $request->get("commenttext"),
            "number" => $request->get("number"),
            
        ]);
        return redirect(route("movie"))->with(["message"=>"新增評論成功!!"]);
    }

}
