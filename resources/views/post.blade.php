<x-layout>
	<x-hobby-nav :cats="$cats">
	</x-hobby-nav>
	
	<div class="flex flex-col lg:grid lg:grid-cols-8 mb-4">
		<div class="grid col-span-6 p-2 w-full">
			<div>
				<div class="m-2">{{ $post->created_at }}</div>
				<h1 class="text-4xl font-bold text-center mb-8">{{ $post->title }}</h1>
				<div class="font-medium text-lg">{{ $post->header }}</div><br>
				<div class="flex flex-col justify-center max-h-[500px]"><img src="{{ asset('storage/' . $post->image) }}" class="max-h-[500px] object-contain overflow-hidden">
				<p class="text-sm italic">{{ $post->image_desc }}</p></div><br>
				<div class="mb-4">{{ $post->body }}</div>
				
				<div>
					<p class="mb-4"><span class="font-bold">Dział: </span>{{ $post->cathegory_name }}</p>
					<p class="mb-4"><span class="font-bold">Autor: </span>{{ $post->author }}</p>
					<p class="mb-4"><span class="font-bold">Źródło: </span>{{ $post->source }}</p>
				</div>
			</div>
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