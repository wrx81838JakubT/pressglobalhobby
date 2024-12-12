<x-dashboard-layout>
<div class="flex flex-row">
<div class="flex flex-col inline-block max-w-1/12 w-1/12 min-w-24 z-10 h-full border-t-[1px] border-gray-100">
	<a href="{{ route('dashboard') }}"><button class="bg-[#316AC4] p-4 transition text-white font-medium hover:duration-200 hover:bg-gray-100 hover:text-[#316AC4] hover:border-b-[1px] hover:border-r-[1px] border-blue-500">
	<span class="mr-2">&#129032;</span>Powrót</button></a>
</div>
<div class="mx-10 my-6">
	<div class="rounded w-full text-white bg-red-500 mb-2">
		@error("name")
			<p class="m-1">{{ $message }}</p>
		@enderror
	</div>
	<div class="mb-4 bg-white shadow-lg p-4">
	<h3 class="mb-2 text-lg font-medium">Edytuj kategorię {{ $cathegory->name }}:</h3>
	<form action="{{ route('cathegory.update', $cathegory) }}" method="POST">
		@csrf
		@method('PUT')
		<label for="name">Nazwa kategorii:</label>
		<input type="text" name="name" value="{{ $cathegory->name }}" class="ml-2 p-2 mr-8 rounded border-[1px] border-gray-500 focus:border-blue-500">
				
		<label for="parent_cathegory">Należy do:</label>
		<select type="optgroup" name="parent_cathegory" value="{{ $cathegory->parent }}" class="ml-2 p-2 mr-8 rounded border-[1px] border-gray-500 focus:outline-none focus:border-blue-500">
			<option value="brak">Brak</option>
				@foreach($cats->whereBetween('id',[1,5])->all() as $cat)
					<option value="{{ $cat->name }}">{{ $cat->name }}</option>
				@endforeach
		</select>
			
		<input type="submit" value="Zapisz" class="cursor-pointer align-middle w-24 text-white rounded p-2 bg-blue-500 hover:transition hover: duration-200 hover:bg-blue-600">
	</form>
	<p class="mt-2 text-sm text-gray-400 font-italic">*Kategoria nienależąca do jednej z głównych kategorii nie będzie się wyświetlać w nawigacji.</p>
	</div>
</div>
</div>
</x-dashboard-layout>