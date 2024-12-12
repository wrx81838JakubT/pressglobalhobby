@props(['cat','cats_recent','posts','images'])

@if($posts)
{{-- Sekcja: Posty --}}
	<div x-show="open_post" class="w-full">
		<div class="flex items-middle justify-end mb-4 bg-white shadow-lg p-4">
			<a href="{{ route('post.create') }}"><button class="mr-4 p-2 font-medium bg-blue-500 text-white rounded hover:bg-blue-600 min-w-16">
				Dodaj nowy post &#129034;</button></a>
		</div>
		<div class="grid grid-cols-3 bg-white shadow-lg p-4">
		
		</div>
	</div>

@endif

@if($cat)
	{{-- Sekcja: Kategorie --}}
	<div x-show="open_cat" class="w-full">
		<div class="mb-4 bg-white shadow-lg p-4">
		<h3 class="mb-2 text-lg font-medium">Dodaj nową kategorię:</h3>
		{{-- dodanie kategorii --}}
		<form action="{{ route('cathegory.store') }}" method="POST">
			@csrf
			<label for="name">Nazwa kategorii:</label>
			<input type="text" name="name" placeholder="Nazwa kategorii" class="ml-2 p-2 mr-8 rounded border-[1px] border-gray-500 focus:border-blue-500">
			
			<label for="parent_cathegory">Podkategoria:</label>
			<select type="optgroup" name="parent_cathegory" placeholder="Wybierz kategorię" class="ml-2 p-2 mr-8 rounded border-[1px] border-gray-500 focus:outline-none focus:border-blue-500">>
					<option value="brak">Brak</option>
				@foreach($cats as $cat)
					<option value="{{ $cat->name }}">{{ $cat->name }}</option>
				@endforeach
			</select>
			
			<input type="submit" value="Stwórz" class="cursor-pointer align-middle w-24 text-white rounded p-2 bg-blue-500 hover:transition hover: duration-200 hover:bg-blue-600">
		</form>
		</div>
		<div class="bg-white shadow-lg p-4">
			@foreach($cats_recent as $cat)
				<div class="grid grid-cols-4 p-2 border-t-[1px] border-blue-500">
					<div>Nazwa: {{ $cat->name }}</div>
					<div>Podkategoria: {{ $cat->parent }}</div>
					<div>Stworzono: {{ $cat->created_at }}</div>
					<div class="flex flex-row w-full items-middle justify-end">
						<a href="{{ route('cathegory.edit', $cat) }}"><button class="mr-4 py-1 bg-blue-500 text-white rounded hover:bg-blue-600 min-w-16">
							Edytuj</button></a>
						<form action="{{ route('cathegory.destroy', $cat) }}" method="POST">
							@csrf
							@method('DELETE')
							<button class="py-1 bg-red-600 rounded hover:bg-red-300 min-w-16 hover:text-red-800">Usuń</button>
						</form>
					</div>
				</div>
			@endforeach
		</div>
	</div>

@endif

@if($images)

	{{-- Sekcja Obrazy --}}
	<div x-show="open_img" class="w-full">
		<div class="mb-4 bg-white shadow-lg p-4">
			<h3 class="mb-2 text-lg font-medium">Dodaj nowy obraz:</h3>
			<form action="{{}}" method="POST" enctype="multipart/form-data">
				@csrf
				<label for="image" class="mr-2">Dodaj obraz:</label>
				<input type="file" name="image" class="mb-4"><br>
			
				<input type="submit" value="Dodaj obraz" class="cursor-pointer align-middle w-28 text-white rounded p-2 bg-blue-500 hover:transition hover: duration-200 hover:bg-blue-600">
			</form>
		</div>
		<div class="mb-4 bg-white shadow-lg p-4">
			<div class="grid grid-cols-4">
				
			</div>
		</div>
	</div>

@endif