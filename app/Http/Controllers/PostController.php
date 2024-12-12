<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Cathegory;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
		$cats = Cathegory::get()->sortBy('name');
		
        return view('dashboard.post-create', [
			'cats' => $cats
		]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        $request->validate([
			'title' => ['required', 'max:255'],
			'body' => ['required'],
			'image' => ['required', 'file', 'max:10000', 'mimes:png,jpg,webp'],
			'header' => ['required'],
			'author' => ['required', 'max:255'],
			'image_desc' => ['required'],
			'source' => ['required']
		]);
		
		$path = null;
		if($request->hasFile('image')){
			$path = Storage::disk('public')->put('posts_images', $request->image);
		}
		$cathegory_id = null;
		$temp = Cathegory::where('name', $request->cathegory)->get();
		foreach($temp as $tem){
			$cathegory_id = $tem->id;
		}
		
		Post::create([
			'title' => $request->title,
			'body' => $request->body,
			'image' => $path,
			'cathegory_id' => $cathegory_id,
			'cathegory_name' => $request->cathegory,
			'header' => $request->header,
			'author' => $request->author,
			'image_desc' => $request->image_desc,
			'source' => $request->source
		]);
		
		return redirect(route('dashboard'))->with('success', 'Your post was created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
		$cats = Cathegory::get();
		$posts_recent = Post::latest()->get()->take(10);
		
        return view('post', [
			'post' => $post,
			'cats' => $cats,
			'posts_recent' => $posts_recent
		]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
		$cats = Cathegory::get();
		
		return view('dashboard.post-edit', [
			'post' => $post,
			'cats' => $cats,
		]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        $request->validate([
			'title' => ['required', 'max:255'],
			'body' => ['required'],
			'image' => ['required', 'file', 'max:10000', 'mimes:png,jpg,webp'],
			'header' => ['required'],
			'author' => ['required', 'max:255'],
			'image_desc' => ['required'],
			'source' => ['required']
		]);
		
		$path = $post->image ?? null;
		if($request->hasFile('image')){
			if($post->image){
				Storage::disk('public')->delete($post->image);
			}
			$path = Storage::disk('public')->put('posts_images', $request->image);
		}
		
		$cathegory_id = null;
		$temp = Cathegory::where('name', $request->cathegory)->get();
		foreach($temp as $tem){
			$cathegory_id = $tem->id;
		}
		
		$post->update([
			'title' => $request->title,
			'body' => $request->body,
			'image' => $path,
			'cathegory_id' => $cathegory_id,
			'cathegory_name' => $request->cathegory,
			'header' => $request->header,
			'author' => $request->author,
			'image_desc' => $request->image_desc,
			'source' => $request->source
		]);
		
		return redirect(route('dashboard'))->with('success', 'Your post was updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {		
		Storage::disk('public')->delete($post->image);
		
        $post->delete();
		
		return back()->with('success', 'Post został usunięty');
    }
}
