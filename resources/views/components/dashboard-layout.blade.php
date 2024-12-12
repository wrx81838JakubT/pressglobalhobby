<!DOCTYPE html>
<html lang="pl">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="pressglobal hobby">
	<title>Pressglobal.pl</title>
	@vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/post.js'])
	<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-gray-100">
<div class="flex flex-row w-full absolute sticky top-0 bg-[#316AC4] z-50">
	<div>
		<a href="{{ route('index') }}"><button class="flex px-6 py-4 transition text-white font-medium hover:duration-200 hover:bg-gray-100 hover:text-[#316AC4]">
			<span class="mr-2">&#129032;</span>Hobby</button></a>
	</div>
	<h3 class="text-nowrap ml-8 flex px-6 py-4 text-white font-medium">Panel Administratora</h3>
	<div class="w-full flex items-middle justify-end">
		<form action="{{ route('logout') }}" method="post">
			@csrf
			<input type="submit" value="Wyloguj" class="cursor-pointer px-6 py-4 transition text-white font-medium hover:duration-200 hover:bg-gray-100 hover:text-[#316AC4]">
		</form>
	</div>
</div>
<div>
	{{ $slot }}
</div>
</body>
</html>

