<x-dashboard-layout>

<div class="flex flex-row" x-data="{ open_cat: false, open_post: true, toggle_cat(){this.open_cat = true; this.open_post = false;}, toggle_post(){this.open_post = true; this.open_cat = false;}}">
<div class="flex flex-col inline-block max-w-1/12 w-1/12 min-w-24 bg-[#316AC4] z-10 h-full border-t-[1px] border-gray-100">
	<button @click="toggle_post()" class="p-4 transition text-white font-medium hover:duration-200 hover:bg-gray-100 hover:text-[#316AC4]">Artykuły</button>
	<button @click="toggle_cat()" class="p-4 transition text-white font-medium hover:duration-200 hover:bg-gray-100 hover:text-[#316AC4] hover:border-b-[1px] border-blue-500">Kategorie</button>
</div>
<div class="mx-10 my-6 w-full">

	@if(session('success'))
		<div class="rounded w-full text-white bg-green-500 mb-2 p-1">{{ session('success') }}</div>
	@endif
	<div class="rounded w-full text-white bg-red-500 mb-2">
		@error("name")
			<p class="m-1">{{ $message }}</p>
		@enderror
	</div>
	
	{{-- Sekcja: Posty --}}
	<div x-show="open_post" class="w-full">
		<div class="flex items-middle justify-end mb-4 bg-white shadow-lg p-4">
			<a href="{{ route('post.create') }}"><button class="mr-4 p-2 font-medium bg-blue-500 text-white rounded hover:bg-blue-600 min-w-16">
				Dodaj nowy artykuł &#129034;</button></a>
		</div>
		<div class="bg-white shadow-lg p-4">
			<div class="flex flex-row">
				<h3 class="text-lg font-medium my-2">Artykuły:</h3>
				<form action="{{ route('getPosts') }}" method="get" class="flex w-full justify-end">
					<label for="parent_cathegory" class="text-lg font-medium my-2">Wybierz kategorię:</label>
					<select type="optgroup" name="parent_cathegory" placeholder="Wybierz kategorię" class="mb-2 ml-2 p-2 mr-2 rounded border-[1px] border-gray-500 focus:outline-none focus:border-blue-500">>
						<option value="wszystkie">Wszystkie</option>
						<option value="brak">Brak</option>
							@foreach($cats as $cat)
								<option value="{{ $cat->name }}">{{ $cat->name }}</option>
							@endforeach
					</select>
					
					<button type="submit" class="px-2 bg-blue-500 text-white rounded hover:bg-blue-600 mr-8 max-h-10">Wyszukaj</button>
				</form>
			</div>
			@if($posts->isEmpty())
				<p class="text-sm text-gray-500">Nic tu jeszcze nie ma</p>
			@endif
			<div class="grid grid-cols-2 gap-4">
			@foreach($posts as $post)
				<div class="grid grid-cols-5 p-2 max-w-1/2 border-t-[1px] border-blue-500 shadow-lg">
					<div class="max-w-[200px] max-h-[200px] object-cover p-2">
						<img src="{{ asset('storage/' . $post->image) }}" class="shadow">
					</div>
					<div class="grid col-span-3 break-words break-all overflow-hidden">
						<div><p class="font-medium">{{ Str::words($post->title, 5) }}</p></div>
						<p class="text-sm text-gray-500">Kategoria: {{ $post->cathegory_name }} |
						Opublikowano: {{ $post->created_at->format('Y/m/d') }}</p>
						<p class="text-wrap">{{ Str::words($post->body, 10) }}</p>
					</div>
					<div class="flex flex-col w-full items-center align-middle justify-center">
						<a href="{{ route('post.edit', $post) }}"><button class="mb-4 py-1 bg-blue-500 text-white rounded hover:bg-blue-600 min-w-16">
							Edytuj</button></a>
						<form action="{{ route('post.destroy', $post) }}" method="POST">
							@csrf
							@method('DELETE')
							<button class="py-1 bg-red-600 rounded hover:bg-red-300 min-w-16 hover:text-red-800">Usuń</button>
						</form>
					</div>
				</div>
			@endforeach
			</div>
		</div>
	</div>
	
	{{-- Sekcja: Kategorie --}}
	<div x-show="open_cat" class="w-full">
		<div class="mb-4 bg-white shadow-lg p-4">
		<h3 class="mb-2 text-lg font-medium">Dodaj nową kategorię:</h3>
		{{-- dodanie kategorii --}}
		<form action="{{ route('cathegory.store') }}" method="POST">
			@csrf
			<label for="name">Nazwa kategorii:</label>
			<input type="text" name="name" placeholder="Nazwa kategorii" class="ml-2 p-2 mr-8 rounded border-[1px] border-gray-500 focus:border-blue-500">
			
			<label for="parent_cathegory">Należy do:</label>
			<select type="optgroup" name="parent_cathegory" placeholder="Wybierz kategorię" class="ml-2 p-2 mr-8 rounded border-[1px] border-gray-500 focus:outline-none focus:border-blue-500">>
					<option value="brak">Brak</option>
				@foreach($cats->whereBetween('id',[1,5])->all() as $cat)
					<option value="{{ $cat->name }}">{{ $cat->name }}</option>
				@endforeach
			</select>
			
			<input type="submit" value="Stwórz" class="cursor-pointer align-middle w-24 text-white rounded p-2 bg-blue-500 hover:transition hover: duration-200 hover:bg-blue-600">
		</form>
		<p class="mt-2 text-sm text-gray-400 font-italic">*Kategoria nienależąca do jednej z głównych kategorii nie będzie się wyświetlać w nawigacji.</p>
		</div>
		<div class="bg-white shadow-lg p-4">
			<h3 class="text-lg font-medium mb-2">Kategorie:</h3>
			@if($cats->isEmpty())
				<p class="text-sm text-gray-500">Nic tu jeszcze nie ma</p>
			@endif
			@foreach($cats_recent as $cat)
				<div class="grid grid-cols-4 p-2 border-t-[1px] border-blue-500">
					<div>Nazwa: {{ $cat->name }}</div>
					<div>Należy do: {{ $cat->parent }}</div>
					<div>Stworzono: {{ $cat->created_at }}</div>
					@if(collect([1,2,3,4,5,6])->has($cat->id) )
						<div class="flex flex-row w-full items-middle justify-end">
							<span class="text-center mr-4 py-1 bg-gray-300 text-gray-500 rounded w-16">
								Edytuj</span>
							<span class="text-center py-1 bg-gray-300 text-gray-500 rounded w-16">Usuń</span>
						</div>
					@else
					<div class="flex flex-row w-full items-middle justify-end">
						<a href="{{ route('cathegory.edit', $cat) }}"><button class="mr-4 py-1 bg-blue-500 text-white rounded hover:bg-blue-600 min-w-16">
							Edytuj</button></a>
						<form action="{{ route('cathegory.destroy', $cat) }}" method="POST">
							@csrf
							@method('DELETE')
							<button class="py-1 bg-red-600 rounded hover:bg-red-300 min-w-16 hover:text-red-800">Usuń</button>
						</form>
					</div>
					@endif
				</div>
			@endforeach
		</div>
	</div>
	
</div>
</div>

</x-dashboard-layout>