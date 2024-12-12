@props(['cats'])

<div class="bg-no-repeat h-[60px] md:h-[120px] bg-center flex flex-row" style="background-size: 100%; background-image: url('/site-storage/hobbynav.png');">
		<a href="https://pressglobal.pl/" class="w-1/2 h-full"></a>
		<a href="{{ route('index') }}" class="w-1/2 h-full"></a>
	</div>
	
	{{-- Wyszukiwanie --}}
	<div class="flex flex-row mt-4 mb-2">
		@auth
			<a href="{{ route('dashboard') }}"><button class="bg-[#316AC4] text-nowrap text-white py-1 px-2 cursor-pointer border border-[#316AC4] transition duration-200 hover:bg-white hover:text-[#316AC4]">Panel Administratora</button></a>
		@endauth
		<form action="{{ route('search') }}" method="GET" class="w-full flex items-end justify-end ">
			@csrf
			<input type="text" name="que" class="border border-gray-500 rounded-sm p-1 mr-2">
			<input type="submit" value="Szukaj" class="bg-[#316AC4] text-white border-[2px] border-gray-700 py-1 px-2 cursor-pointer">
		</form>
	</div>
	
	{{-- Navbar --}}
	<div class="hidden md:block ">
	<div class="flex flex-row w-full items-center text-nowrap align-middle justify-center align-center bg-[#316AC4] text-white">
		<a href="{{ route('index') }}"><button class="h-full py-2 px-2 font-bold transition hover:duration-75 hover:text-[#316AC4] hover:bg-white text-sm">STRONA GŁÓWNA</button></a>

		@foreach($cats->whereBetween('id',[1,5])->all() as $catsSpec)
		<div class="c-dropdown"><a href="{{ route('cathegory.show', $catsSpec) }}"><button class="h-full py-2 px-2 text-sm transition hover:duration-75 hover:text-[#316AC4] text-center hover:bg-white">{{ $catsSpec->name }}</button></a>
			<div class="c-dropdown-content text-sm bg-white text-[#316AC4]">
				<ul>
					<a href="{{ route('cathegory.show', $catsSpec) }}"><li class="text-center px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]">{{ $catsSpec->name }}</li></a>
					@foreach($cats->where('parent', $catsSpec->name)->all() as $cat)
						<a href="{{ route('cathegory.show', $cat) }}"><li class="text-center px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]">{{ $cat->name }}</li></a>
					@endforeach
				</ul>
			</div>
		</div>
		@endforeach
	</div>
	</div>
	<div class="block md:hidden" x-data="{ open:false }">
	
		<div class="flex flex-row w-full mt-6 items-left text-nowrap align-middle align-center bg-[#316AC4] text-white">
			<div class="flex flex-row bg-[#316AC4] sticky top-0 w-full">
				<div class="mx-4 mt-1.5 mb-1">
					<button @click="open = ! open"><img src="/site-storage/hamburrger.png" alt="burger-menu"></button>
				</div>
				<h2 class="font-bold text-xl text-white py-1 ml-4">Kategorie</h2>
			</div>
		</div>
		<div x-show="open" x-transition @click.outside="open=false" class="w-full">
			<div class="flex flex-col">
			<a href="{{ route('index') }}"><button class="w-full h-full py-2 px-2 font-bold transition hover:duration-75 hover:text-[#316AC4] text-left pl-4 bg-[#316AC4] hover:bg-white text-white text-sm">STRONA GŁÓWNA</button></a>

		@foreach($cats->whereBetween('id',[1,5])->all() as $catsSpec)
		<div class="c-dropdown"><a href="{{ route('cathegory.show', $catsSpec) }}"><button class="w-full h-full py-2 px-2 text-sm transition hover:duration-75 text-white hover:text-[#316AC4] bg-[#316AC4] text-left hover:bg-white pl-4">{{ $catsSpec->name }}</button></a>
			<div class="c-dropdown-content-relative text-sm bg-white text-[#316AC4] w-full">
				<ul class="w-full">
					<a href="{{ route('cathegory.show', $catsSpec) }}"><li class="w-full text-center px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]">{{ $catsSpec->name }}</li></a>
					@foreach($cats->where('parent', $catsSpec->name)->all() as $cat)
						<a href="{{ route('cathegory.show', $cat) }}"><li class="w-full text-center px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]">{{ $cat->name }}</li></a>
					@endforeach
				</ul>
			</div>
		</div>
		@endforeach
		</div>
		</div>
	</div>
</div>