<x-layout>
	<x-hobby-nav :cats="$cats">
	</x-hobby-nav>
	
	{{-- Najnowsze --}}
	<div class="w-full">
		<div class="flex flex-row border-b-[2px] border-b-[#316AC4] mb-4">
			<h3 class="text-xl text-nowrap font-medium text-[#316AC4] px-4 pt-4 mb-2">NAJNOWSZE</h3>
			<div class="flex w-full align-middle justify-end text-[#316AC4] px-2 pt-8">
				<a href="{{ route('latest') }}">ZOBACZ WSZYSTKO</a>
			</div>
		</div>
		<div class="flex flex-col lg:grid lg:grid-cols-5 w-full px-4 pb-6">
			<div class="grid col-span-3 relative w-full">
				<div class="slideshow-container grid col-span-3 w-full">
					@foreach($posts_recent->take(4) as $post)
						<div class="mySlides w-full fade">
							<img src="{{ asset('storage/' . $post->image) }}" class="max-h-[350px] w-full object-cover overflow-hidden">
							<div class="absolute bottom-16 w-3/4 text-white p-1 text-wrap text-lg font-medium" style="left: 12.5%;">
								<div style="text-align:center; background-color: rgb(0,0,0,0.5);">{{$post->title}}</div>
								
							</div>
						</div>
					@endforeach
					<div id="imgnav" class="flex flex-row justify-center absolute bottom-0 w-3/4 mt-4" style="left: 12.5%;">
						@foreach($posts_recent->take(1) as $post)
							<img id="1" onclick="currentSlide(this.id)" src="{{ asset('storage/' . $post->image) }}" class="max-h-14 mr-2 mb-1" style="opacity: 0.5">
						@endforeach
						@foreach($posts_recent->skip(1)->take(1) as $post)
							<img id="2" onclick="currentSlide(this.id)" src="{{ asset('storage/' . $post->image) }}" class="max-h-14 mr-2 mb-1" style="opacity: 0.5">
						@endforeach
						@foreach($posts_recent->skip(2)->take(1) as $post)
							<img id="3" onclick="currentSlide(this.id)" src="{{ asset('storage/' . $post->image) }}" class="max-h-14 mr-2 mb-1" style="opacity: 0.5">
						@endforeach
						@foreach($posts_recent->skip(3)->take(1) as $post)
							<img id="4" onclick="currentSlide(this.id)" src="{{ asset('storage/' . $post->image) }}" class="max-h-14 mr-2 mb-1" style="opacity: 0.5">
						@endforeach
					</div>
				<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
				<a class="next" onclick="plusSlides(1)">&#10095;</a>
				</div>
			</div>
			<div class="grid col-span-2 w-full">
				<div class="flex flex-col">
					@foreach($posts_recent->skip(4)->take(2) as $post)
						<div class="flex flex-col lg:grid grid-cols-6 mb-2">
							<div class="flex flex-row lg:grid col-span-2 w-full lg:max-w-full max-h-[150px] px-2 mr-4 lg:gap-6">
								<img src="{{ asset('storage/' . $post->image) }}" class="w-full lg:max-w-full max-h-[100px] overflow-hidden object-cover">
							</div>
							<div class="grid col-span-4 break-words break-all max-h-[100px] overflow-hidden">
								<a href="{{ route('post.show', $post) }}"><span class="font-bold text-[#316AC4]">{{ $post->title }}</span></a>
								<span class="text-wrap">{{ Str::words($post->header, 25-Str::wordCount($post->title)) }}</span>
							</div>
						</div>
					@endforeach
					<ul class="w-full text-[#316AC4] list-disc p-2 pl-8">
					@foreach($posts_recent->skip(6)->take(4) as $post)
						<li class="mb-2"><a href="{{ route('post.show', $post) }}"><span class="text-[#316AC4]">{{ $post->title }}</span></a></li>
					@endforeach
					</ul>
				</div>
			</div>
		</div>
	</div>

	{{-- Artystyczne --}}
	<div>
		<div class="flex flex-row border-b-[2px] border-b-[#316AC4]">
			<h3 class="text-xl text-nowrap font-medium text-[#316AC4] px-4 pt-4 mb-2">ARTYSTYCZNE</h3>
			<div class="flex w-full align-middle justify-end text-[#316AC4] px-2 pt-8">
				<a href="{{ route('cathegory.show', $cats->sole('name', 'Artystyczne')) }}">ZOBACZ WSZYSTKO</a>
			</div>
		</div>
		<div id="Artystyczne_buttons" class="flex flex-row text-nowrap mt-2 w-full">
			@foreach($cats->where('parent', 'Artystyczne')->all() as $cat)
				<button id="{{ $cat->name }}" onclick="tabClicked(this.id, 'Artystyczne', 'Artystyczne_buttons');" 
					class="px-4 py-2 transition duration-300 @if($cat->name == 'Malarstwo') c-active-tab @else c-inactive-tab @endif ">
					{{ $cat->name }}</button>
			@endforeach
			<div class="px-4 py-2 w-full border-b-[1px] border-gray-300"></div>
		</div>
		<div id="Artystyczne">
		@foreach($cats->where('parent', 'Artystyczne')->all() as $cat)
			<div id="{{ $cat->name }}" class="flex flex-col lg:grid lg:grid-cols-5 w-full pb-6 px-4 w-full" @if($cat->name == 'Malarstwo') style="display: grid;" @else style="display: none;" @endif">
				@if($posts_recent->where('cathegory_name', $cat->name)->first() != null)
				<div class="grid col-span-3 w-full relative inline-block z-0" style="margin: 0 auto;">
						<a href="{{ route('post.show', $posts_recent->where('cathegory_name', $cat->name)->first()) }}">
						<img src="{{ asset('storage/' . $posts_recent->where('cathegory_name', $cat->name)->first()->image)}}" class="max-h-[350px] w-full object-cover overflow-hidden">
						<p class="absolute bottom-0 bg-[#316AC4] w-full text-white p-1 text-wrap text-lg font-medium">
							{{$posts_recent->where('cathegory_name', $cat->name)->first()->title}}</p></a>
				</div>
				<div class="grid col-span-2 w-full">
					<div class="flex flex-col pl-4">
						@foreach($posts_recent->where('cathegory_name', $cat->name)->skip(1)->take(3) as $post)
							<div class="flex flex-col lg:grid grid-cols-6 mb-4 max-w-1/2">
								<div class="flex flex-row lg:grid col-span-2 w-full lg:max-w-full max-h-[150px] px-2 mr-6 lg:gap-6">
									<img src="{{ asset('storage/' . $post->image) }}" class="w-full lg:max-w-full max-h-[100px] overflow-hidden object-cover">
								</div>
								<div class="grid col-span-4 break-words break-all max-h-[100px] overflow-hidden">
									<a href="{{ route('post.show', $post) }}"><span class="font-bold text-[#316AC4]">{{ $post->title }}</span></a>
									<span class="text-wrap">{{ Str::words($post->header, 25-Str::wordCount($post->title)) }}</span>
								</div>
							</div>
						@endforeach
					</div>
				</div>
				@endif
			</div>
		@endforeach
		</div>
	</div>
	
	{{-- Techniczne --}}
	<div>
		<div class="flex flex-row border-b-[2px] border-b-[#316AC4]">
			<h3 class="text-xl text-nowrap font-medium text-[#316AC4] px-4 pt-4 mb-2">TECHNICZNE</h3>
			<div class="flex w-full align-middle justify-end text-[#316AC4] px-2 pt-8">
				<a href="{{ route('cathegory.show', $cats->sole('name', 'Techniczne')) }}">ZOBACZ WSZYSTKO</a>
			</div>
		</div>
		<div id="Techniczne_buttons" class="flex flex-row text-nowrap mt-2 w-full">
			@foreach($cats->where('parent', 'Techniczne')->all() as $cat)
				<button id="{{ $cat->name }}" onclick="tabClicked(this.id, 'Techniczne', 'Techniczne_buttons');" 
					class="px-4 py-2 transition duration-300 @if($cat->name == 'Modelarstwo') c-active-tab @else c-inactive-tab @endif ">
					{{ $cat->name }}</button>
			@endforeach
			<div class="px-4 py-2 w-full border-b-[1px] border-gray-300"></div>
		</div>
		<div id="Techniczne">
		@foreach($cats->where('parent', 'Techniczne')->all() as $cat)
			<div id="{{ $cat->name }}" class="flex flex-col lg:grid lg:grid-cols-5 w-full pb-6 px-4 w-full" @if($cat->name == 'Modelarstwo') style="display: grid;" @else style="display: none;" @endif">
				@if($posts_recent->where('cathegory_name', $cat->name)->first() != null)
				<div class="grid col-span-3 w-full relative inline-block z-0" style="margin: 0 auto;">
						<a href="{{ route('post.show', $posts_recent->where('cathegory_name', $cat->name)->first()) }}">
						<img src="{{ asset('storage/' . $posts_recent->where('cathegory_name', $cat->name)->first()->image)}}" class="max-h-[350px] w-full object-cover overflow-hidden">
						<p class="absolute bottom-0 bg-[#316AC4] w-full text-white p-1 text-wrap text-lg font-medium">
							{{$posts_recent->where('cathegory_name', $cat->name)->first()->title}}</p></a>
				</div>
				<div class="grid col-span-2 w-full">
					<div class="flex flex-col pl-4">
						@foreach($posts_recent->where('cathegory_name', $cat->name)->skip(1)->take(3) as $post)
							<div class="flex flex-col lg:grid grid-cols-6 mb-4 max-w-1/2">
								<div class="flex flex-row lg:grid col-span-2 w-full lg:max-w-full max-h-[150px] px-2 mr-6 lg:gap-6">
									<img src="{{ asset('storage/' . $post->image) }}" class="w-full lg:max-w-full max-h-[100px] overflow-hidden object-cover">
								</div>
								<div class="grid col-span-4 break-words break-all max-h-[100px] overflow-hidden">
									<a href="{{ route('post.show', $post) }}"><span class="font-bold text-[#316AC4]">{{ $post->title }}</span></a>
									<span class="text-wrap">{{ Str::words($post->header, 25-Str::wordCount($post->title)) }}</span>
								</div>
							</div>
						@endforeach
					</div>
				</div>
				@endif
			</div>
		@endforeach
		</div>
	</div>
	
	{{-- Rekreacyjne --}}
	<div>
		<div class="flex flex-row border-b-[2px] border-b-[#316AC4]">
			<h3 class="text-xl text-nowrap font-medium text-[#316AC4] px-4 pt-4 mb-2">REKREACYJNE</h3>
			<div class="flex w-full align-middle justify-end text-[#316AC4] px-2 pt-8">
				<a href="{{ route('cathegory.show', $cats->sole('name', 'Rekreacyjne')) }}">ZOBACZ WSZYSTKO</a>
			</div>
		</div>
		<div id="Rekreacyjne_buttons" class="flex flex-row text-nowrap mt-2 w-full">
			@foreach($cats->where('parent', 'Rekreacyjne')->all() as $cat)
				<button id="{{ $cat->name }}" onclick="tabClicked(this.id, 'Rekreacyjne', 'Rekreacyjne_buttons');" 
					class="px-4 py-2 transition duration-300 @if($cat->name == 'Sport') c-active-tab @else c-inactive-tab @endif ">
					{{ $cat->name }}</button>
			@endforeach
			<div class="px-4 py-2 w-full border-b-[1px] border-gray-300"></div>
		</div>
		<div id="Rekreacyjne">
		@foreach($cats->where('parent', 'Rekreacyjne')->all() as $cat)
			<div id="{{ $cat->name }}" class="flex flex-col lg:grid lg:grid-cols-5 w-full pb-6 px-4 w-full" @if($cat->name == 'Sport') style="display: grid;" @else style="display: none;" @endif">
				@if($posts_recent->where('cathegory_name', $cat->name)->first() != null)
				<div class="grid col-span-3 w-full relative inline-block z-0" style="margin: 0 auto;">
						<a href="{{ route('post.show', $posts_recent->where('cathegory_name', $cat->name)->first()) }}">
						<img src="{{ asset('storage/' . $posts_recent->where('cathegory_name', $cat->name)->first()->image)}}" class="max-h-[350px] w-full object-cover overflow-hidden">
						<p class="absolute bottom-0 bg-[#316AC4] w-full text-white p-1 text-wrap text-lg font-medium">
							{{$posts_recent->where('cathegory_name', $cat->name)->first()->title}}</p></a>
				</div>
				<div class="grid col-span-2 w-full">
					<div class="flex flex-col pl-4">
						@foreach($posts_recent->where('cathegory_name', $cat->name)->skip(1)->take(3) as $post)
							<div class="flex flex-col lg:grid grid-cols-6 mb-4 max-w-1/2">
								<div class="flex flex-row lg:grid col-span-2 w-full lg:max-w-full max-h-[150px] px-2 mr-6 lg:gap-6">
									<img src="{{ asset('storage/' . $post->image) }}" class="w-full lg:max-w-full max-h-[100px] overflow-hidden object-cover">
								</div>
								<div class="grid col-span-4 break-words break-all max-h-[100px] overflow-hidden">
									<a href="{{ route('post.show', $post) }}"><span class="font-bold text-[#316AC4]">{{ $post->title }}</span></a>
									<span class="text-wrap">{{ Str::words($post->header, 25-Str::wordCount($post->title)) }}</span>
								</div>
							</div>
						@endforeach
					</div>
				</div>
				@endif
			</div>
		@endforeach
		</div>
	</div>
	
	{{-- Inne Typowe --}}
	<div>
		<div class="flex flex-row border-b-[2px] border-b-[#316AC4]">
			<h3 class="text-xl text-nowrap font-medium text-[#316AC4] px-4 pt-4 mb-2">INNE TYPOWE</h3>
			<div class="flex w-full align-middle justify-end text-[#316AC4] px-2 pt-8">
				<a href="{{ route('cathegory.show', $cats->sole('name', 'Inne Typowe')) }}">ZOBACZ WSZYSTKO</a>
			</div>
		</div>
		<div id="Inne_Typowe_buttons" class="flex flex-row text-nowrap mt-2 w-full">
			@foreach($cats->where('parent', 'Inne Typowe')->all() as $cat)
				<button id="{{ $cat->name }}" onclick="tabClicked(this.id, 'Inne Typowe', 'Inne_Typowe_buttons');" 
					class="px-4 py-2 transition duration-300 @if($cat->name == 'Czytanie Książek') c-active-tab @else c-inactive-tab @endif ">
					{{ $cat->name }}</button>
			@endforeach
			<div class="px-4 py-2 w-full border-b-[1px] border-gray-300"></div>
		</div>
		<div id="Inne Typowe">
		@foreach($cats->where('parent', 'Inne Typowe')->all() as $cat)
			<div id="{{ $cat->name }}" class="flex flex-col lg:grid lg:grid-cols-3 w-full pb-6 px-4 w-full" @if($cat->name == 'Czytanie Książek') style="display: grid;" @else style="display: none;" @endif">
				@if($posts_recent->where('cathegory_name', $cat->name)->first() != null)
					@foreach($posts_recent->where('cathegory_name', $cat->name)->take(3) as $post)
						<div class="grid col-span-1 w-full">
							<div class="relative inline-block z-0" style="margin: 0 auto;">
								<a href="{{ route('post.show', $posts_recent->where('cathegory_name', $cat->name)->first()) }}">
								<img src="{{ asset('storage/' . $posts_recent->where('cathegory_name', $cat->name)->first()->image)}}" class="max-h-[350px] object-cover overflow-hidden">
								<p class="absolute bottom-0 bg-[#316AC4] w-full text-white p-1 text-wrap text-lg font-bold">
									{{ $posts_recent->where('cathegory_name', $cat->name)->first()->title }}<br>
									<span class="font-normal">{{ Str::words($posts_recent->where('cathegory_name', $cat->name)->first()->header, 10) }}</span>
									</p></a>
							</div>
						</div>
					@endforeach
				@endif
			</div>
		@endforeach
		</div>
	</div>
	
	{{-- Militarne --}}
	<div>
		<div class="flex flex-row border-b-[2px] border-b-[#316AC4]">
			<h3 class="text-xl text-nowrap font-medium text-[#316AC4] px-4 pt-4 mb-2">MILITARNE</h3>
			<div class="flex w-full align-middle justify-end text-[#316AC4] px-2 pt-8">
				<a href="{{ route('cathegory.show', $cats->sole('name', 'Militarne')) }}">ZOBACZ WSZYSTKO</a>
			</div>
		</div>
		<div id="Militarne_buttons" class="flex flex-row text-nowrap mt-2 w-full">
			@foreach($cats->where('parent', 'Militarne')->all() as $cat)
				<button id="{{ $cat->name }}" onclick="tabClicked(this.id, 'Militarne', 'Militarne_buttons');" 
					class="px-4 py-2 transition duration-300 @if($cat->name == 'Militarne') c-active-tab @else c-inactive-tab @endif ">
					{{ $cat->name }}</button>
			@endforeach
			<div class="px-4 py-2 w-full border-b-[1px] border-gray-300"></div>
		</div>
		<div id="Militarne">
		@foreach($cats->where('parent', 'Militarne')->all() as $cat)
			<div id="{{ $cat->name }}" class="flex flex-col lg:grid lg:grid-cols-5 w-full pb-6 px-4 w-full" @if($cat->name == 'Militarne') style="display: grid;" @else style="display: none;" @endif">
				@if($posts_recent->where('cathegory_name', $cat->name)->first() != null)
				<div class="grid col-span-3 w-full">
					<div class="relative inline-block z-0" style="margin: 0 auto;">
						<a href="{{ route('post.show', $posts_recent->where('cathegory_name', $cat->name)->first()) }}">
						<img src="{{ asset('storage/' . $posts_recent->where('cathegory_name', $cat->name)->first()->image)}}" class="max-h-[350px] object-cover overflow-hidden">
						<p class="absolute bottom-0 bg-[#316AC4] w-full text-white p-1 text-wrap text-lg font-medium">
							{{$posts_recent->where('cathegory_name', $cat->name)->first()->title}}</p></a>
					</div>
				</div>
				<div class="grid col-span-2 w-full">
					<div class="flex flex-col pl-4">
						@foreach($posts_recent->where('cathegory_name', $cat->name)->skip(1)->take(3) as $post)
							<div class="flex flex-col lg:grid grid-cols-6 mb-4 max-w-1/2">
								<div class="flex flex-row lg:grid col-span-2 w-full lg:max-w-full max-h-[150px] px-2 mr-6 lg:gap-6">
									<img src="{{ asset('storage/' . $post->image) }}" class="w-full lg:max-w-full max-h-[100px] overflow-hidden object-cover">
								</div>
								<div class="grid col-span-4 break-words break-all max-h-[100px] overflow-hidden">
									<a href="{{ route('post.show', $post) }}"><span class="font-bold text-[#316AC4]">{{ $post->title }}</span></a>
									<span class="text-wrap">{{ Str::words($post->header, 25-Str::wordCount($post->title)) }}</span>
								</div>
							</div>
						@endforeach
					</div>
				</div>
				@endif
			</div>
		@endforeach
		</div>
	</div>
	
</div>
</x-layout>