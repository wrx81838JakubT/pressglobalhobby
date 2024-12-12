<x-layout>
<div class="">
	<h1 class="text-4xl font-medium mb-6 pb-6 border-b-[1px] border-gray-500">Logowanie</h1>
	
	@error("failed")
		<div class="bg-red-100 p-4 border border-red-200 rounded text-pink-900">{{ $message }}</div>
	@enderror
	
	<div class="w-1/2 py-6 px-10" style="margin: 0 auto;">
		<form action="{{ route('sign-in') }}" method="post" class="flex flex-col">
			@csrf
			{{-- User name --}}
			<label for="name">Nazwa użytkownika</label>
			<input type="text" name="name" placeholder="Nazwa użytkownika" class="p-2 mb-2 rounded border-[1px] border-gray-500 focus:transition focus:ring-4 focus:duration-200 focus:ease-in-out focus:outline-none focus:border-blue-500">
			
			
			{{-- Password --}}
			<label for="password">Hasło</label>
			<input type="password" name="password" placeholder="Hasło" class="p-2 rounded border-[1px] border-gray-500 focus:transition focus:ring-4 focus:duration-200 focus:ease-in-out focus:outline-none focus:border-blue-500">
			
			<input type="submit" value="Zaloguj" class="align-middle my-8 max-w-24 text-white rounded p-2 bg-blue-500 hover:transition hover: duration-200 hover:bg-blue-600">
		</form>
	</div>
</div>
</x-layout>