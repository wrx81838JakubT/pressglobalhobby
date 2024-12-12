<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cathegory;
use App\Models\Post;

class DashboardController extends Controller
{
    public function getPosts(Request $request){
		$posts = Post::where('cathegory_name',$request->parent_cathegory)->get();
		$cats = Cathegory::get()->sortBy('name');
		$cats_recent = Cathegory::latest()->get();
		
		if($request->parent_cathegory == "wszystkie"){
			$posts = Post::latest()->get();
		}else{
			$posts = Post::where('cathegory_name',$request->parent_cathegory)->get();
		}
		
		return view('dashboard.dashboard', [
			'cats' => $cats,
			'cats_recent' => $cats_recent,
			'posts' => $posts
			]);
	}
}
