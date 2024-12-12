<?php

namespace App\Http\Controllers;

use App\Models\Cathegory;
use App\Models\Post;
use App\Http\Requests\StoreCathegoryRequest;
use App\Http\Requests\UpdateCathegoryRequest;
use Illuminate\Validation\Rule;

class CathegoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cats = Cathegory::get()->sortBy('name');
		$cats_recent = Cathegory::latest()->get();
		$posts = Post::latest()->get();
		
		
		return view('dashboard.dashboard', [
			'cats' => $cats,
			'cats_recent' => $cats_recent,
			'posts' => $posts
			]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCathegoryRequest $request)
    {
		
		$cathegory_id = null;
        $request->validate([
			'name' => ['required', 'max:255', 'unique:cathegories'],
			'parent_cathegory' => ['nullable']
		]);
		
		if ($request->parent_cathegory == 'brak'){
			$cathegory_id = null;
		}else{
			$temp = Cathegory::where('name', $request->parent_cathegory)->get();
			foreach($temp as $tem){
				$cathegory_id = $tem->id;
			}
		}
		Cathegory::create([
			'name' => $request->name,
			'cathegory_id' => $cathegory_id,
			'parent' => $request->parent_cathegory
		]);
		
		return back()->with('success', 'Kategoria została stworzona.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cathegory $cathegory)
    {
		$cats = Cathegory::get();
		
		if($cathegory->parent == 'Brak'){
			$posts = Post::where('cathegory_name',$cathegory->name)->get();
			$postsCatted = Cathegory::where('parent', $cathegory->name)->with('posts')->get();
			foreach($postsCatted as $cat){
				$posts = $posts->concat($cat->posts);
			}
		}else{
			$posts = Post::where('cathegory_name',$cathegory->name)->get();
		}
		$posts_recent = Post::latest()->get()->take(10);
		
		return view('cathegory', [
			'posts' => $posts, 
			'cats' => $cats, 
			'cathegory' => $cathegory,
			'posts_recent' => $posts_recent
			]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cathegory $cathegory)
    {
		$cats = Cathegory::get()->sortBy('name');
		return view('dashboard.cathegory-edit', [
			'cathegory' => $cathegory,
			'cats' => $cats,
			]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCathegoryRequest $request, Cathegory $cathegory)
    {
		//dd($request);
        $cathegory_id = null;
        $request->validate([
			'name' => ['required', 'max:255', Rule::unique('cathegories')->ignore($cathegory->id)],
			'parent_cathegory' => ['nullable']
		]);
		
		if ($request->parent_cathegory == 'brak'){
			$cathegory_id = null;
		}else{
			$temp = Cathegory::where('name', $request->parent_cathegory)->get();
			foreach($temp as $tem){
				$cathegory_id = $tem->id;
			}
		}
		$cathegory->update([
			'name' => $request->name,
			'cathegory_id' => $cathegory_id,
			'parent' => $request->parent_cathegory
		]);
		
		return redirect()->route('dashboard')->with('success', 'Zmiany zostały zapisane.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cathegory $cathegory)
    {
        $cathegory->delete();
		
		return back()->with('success', 'Kategoria została usunięta');
    }
}
