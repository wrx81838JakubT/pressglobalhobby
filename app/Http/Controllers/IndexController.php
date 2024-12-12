<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cathegory;
use App\Models\Post;

class IndexController extends Controller
{
    public function index()
    {
		
        $cats = Cathegory::get();
		$posts = Post::get();
		$posts_recent = Post::latest()->get();
		//dd($posts_recent->where('cathegory_name', 'Malarstwo')->first());
		//dd($posts_recent->where('cathegory_name', 'Malarstwo')->skip(1)->take(3));
		//dd($cats);
		return view('index', [
			'cats' => $cats,
			'posts' => $posts,
			'posts_recent' => $posts_recent
		]);
    }
	
	public function latest(){
		
		$posts_recent = Post::latest()->get();
		$cats = Cathegory::get();
		$cathegory = "Brak";
		
		return view('cathegory',[
			'cats' => $cats,
			'posts' => $posts_recent,
			'posts_recent' => $posts_recent,
			'cathegory' => $cathegory
		]);
	}
	
	public function search(Request $request){
		
		$cats = Cathegory::get();
		$posts_recent = Post::latest()->get();
		
		$request->validate([
			'que' => ['max:255']
		]);
		
		$posts = collect([]);
		
		if($request->que == null){
			$posts = $posts->concat($posts_recent->take(1));
		}else{
			$posts = $posts->concat(Post::orderBy('id', 'DESC')->where('title', 'LIKE', '%' . $request->que . '%')->get());
			$posts = $posts->concat(Post::orderBy('id', 'DESC')->where('header', 'LIKE', '%' . $request->que . '%')->get());
			$posts = $posts->concat(Post::orderBy('id', 'DESC')->where('body', 'LIKE', '%' . $request->que . '%')->get());
			$posts = $posts->concat(Post::orderBy('id', 'DESC')->where('author', 'LIKE', '%' . $request->que . '%')->get());
			$posts = $posts->concat(Post::orderBy('id', 'DESC')->where('cathegory_name', 'LIKE', '%' . $request->que . '%')->get());
		
			$posts = $posts->unique();
		}
		
		return view('cathegory', [
			'cathegory' => 'Brak',
			'posts' => $posts,
			'posts_recent' => $posts_recent,
			'cats' => $cats
		]);
	}
}