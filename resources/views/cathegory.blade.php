<x-layout>
	<x-hobby-nav :cats="$cats">
	</x-hobby-nav>
	
	<div>
		<p class="mb-2 pl-2 pt-4 pb-2 text-[#316AC4] text-lg font-medium border-b-[2px] border-b-[#316AC4] ">Hobby @if($cathegory == 'Brak') @else >> {{ $cathegory->name}} @endif</p>
	</div>
	<div class="flex flex-col lg:grid lg:grid-cols-8 mb-4">
	<div class="grid col-span-6 grid-cols-2 p-2">
		@foreach($posts as $post)
			<div class="flex flex-col lg:grid grid-cols-6 p-2 max-w-1/2 lg:max-h-[150px] mb-2">
				<div class="flex flex-row lg:grid col-span-2 w-full lg:max-w-full max-h-[150px] p-2">
					<img src="{{ asset('storage/' . $post->image) }}" class="w-full lg:max-w-full h-[150px] overflow-hidden object-cover">
				</div>
				<div class="grid col-span-4 break-words break-all overflow-hidden">
					<span class="text-sm text-gray-500">Opublikowano: {{ $post->created_at->format('Y/m/d') }}</span>
					<a href="{{ route('post.show', $post) }}"><span class="font-medium">{{ $post->title }}</span></a>
					<span class="text-wrap">{{ Str::words($post->header, 25-Str::wordCount($post->title)) }}</span>
				</div>
			</div>
		@endforeach
	</div>
	<div class="grid col-span-2">
	<div>
		<h3 class="text-2xl text-nowrap font-medium text-[#316AC4] px-8 pt-4 justify-center mb-2">INNE WIADOMOŚCI</h3>
		<div class="w-full border-t-[2px] border-t-[#316AC4]">
			<ul class="w-full text-[#316AC4] list-disc p-2 pl-8">
				@foreach($posts_recent as $post)
					<a href="{{ route('post.show', $post) }}"><li class="w-full">{{ $post->title }}</li></a>
				@endforeach
			</ul>
		</div>
	</div>
	</div>
	</div>
</x-layout>