<x-dashboard-layout>
<div class="flex flex-row">
<div class="flex flex-col inline-block max-w-1/12 w-1/12 min-w-24 z-10 h-full border-t-[1px] border-gray-100">
	<a href="{{ route('dashboard') }}"><button class="bg-[#316AC4] p-4 transition text-white font-medium hover:duration-200 hover:bg-gray-100 hover:text-[#316AC4] hover:border-b-[1px] hover:border-r-[1px] border-blue-500">
	<span class="mr-2">&#129032;</span>Powrót</button></a>
</div>
<div class="mx-10 my-6 w-full gap-4">
	<div class="grid bg-white shadow-lg col-span-8 md:col-span-6 p-4 mb-2">
		<form action="{{ route('post.update', $post) }}" method="POST" enctype="multipart/form-data" class="flex flex-col">
			@csrf
			@method('PUT')
			<label for="title" class="mb-2 font-bold">Tytuł artykułu:</label>
			<input type="text" name="title" value="{{ $post->title }}" class="rounded border border-black p-2 border-[2px] mb-2" placeholder="Tytuł posta:">
			
			<label for="header" class="mb-2 font-bold">Nagłówek:</label>
			<textarea name="header" rows="3" placeholder="Nagłowek" class="rounded border border-black border-[2px] p-2 mb-4">{{ $post->header }}</textarea>
			
			<label for="cathegory" class="mb-2 font-bold">Kategoria:</label>
			<select type="optgroup" name="cathegory" value="{{ $post->cathegory_name }}" placeholder="Wybierz kategorię" class="rounded border-[1px] border-black p-2 border-[2px] mb-2">
				@foreach($cats as $cat)
					<option value="{{ $cat->name }}">{{ $cat->name }}</option>
				@endforeach
			</select>
			<label for="image" class="mb-2 font-bold">Dodaj obraz:</label>
			<input type="file" name="image" class="mb-4">
			
			<label for="image_desc" class="mb-2 font-bold">Podpis obrazu:</label>
			<input type="text" name="image_desc" value="{{ $post->source }}" class="rounded border border-black p-2 border-[2px] mb-2" placeholder="Podpis obrazu">
			
			<label for="body" class="mb-2 font-bold">Zawartość:</label>
			<textarea name="body" rows="10" placeholder="Zawartość" class="rounded border border-black border-[2px] p-2 mb-4">{{ $post->body }}</textarea>
			
			<label for="author" class="mb-2 font-bold">Autor:</label>
			<input type="text" name="author" value="{{ $post->author }}" class="rounded border border-black p-2 border-[2px] mb-2" placeholder="Autor artykułu">
			
			<label for="source" class="mb-2 font-bold">Źródło:</label>
			<input type="text" name="source" value="{{ $post->source }}" class="rounded border border-black p-2 border-[2px] mb-2" placeholder="Źródło">
			
			
			<input type="submit" value="Zapisz" class="cursor-pointer align-middle w-24 text-white rounded p-2 bg-blue-500 hover:transition hover: duration-200 hover:bg-blue-600">
		</form>
	</div>

</div>
</div>
</x-dashboard-layout>