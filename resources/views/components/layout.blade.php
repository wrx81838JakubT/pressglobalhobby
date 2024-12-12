<!DOCTYPE html>
<html lang="pl">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="pressglobal hobby">
	<title>Pressglobal.pl</title>
	@vite(['resources/css/app.css'], ['resources/js/app.js'])
	@vite(['resources/css/dropdown.css'])
	@vite(['resources/js/post.js'])
	<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-white flex flex-col">
<div class="sticky top-0 block w-full xl:hidden bg-[#316AC4]  w-full z-10" x-data="{ open:false }">
	<div class="flex flex-row ">
		<div class="mx-4 mt-1.5 mb-1">
			<button @click="open = ! open"><img src="/site-storage/hamburrger.png" alt="burger-menu"></button>
		</div>
		<h2 class="font-bold text-xl text-white py-1 ml-4">PRESSGLOBAL.PL</h2>
	</div>
	<div x-show="open" x-transition @click.outside="open=false" class="w-full">
	<div class="flex flex-col bg-[#316AC4] sticky top-0 w-full text-nowrap text-white">
	<div class="c-dropdown"><button class="h-full py-2 px-2 transition hover:duration-75 hover:text-[#316AC4] hover:bg-white text-sm">FAKTY</button>
		<div class="c-dropdown-content-relative text-sm bg-white text-[#316AC4]">
			<ul><li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Fakty">STRONA GŁÓWNA</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Fakty/Kategorie/274">POLSKA</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Fakty/Kategorie/275">EUROPA</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Fakty/Kategorie/276">ŚWIAT</a></li></ul></div></div>
	<div class="c-dropdown"><button class="h-full py-2 px-2 transition hover:duration-75 hover:text-[#316AC4] hover:bg-white text-sm">BIZNES</button>
		<div class="c-dropdown-content-relative text-sm bg-white text-[#316AC4]">
			<ul><li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Biznes">STRONA GŁÓWNA</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Biznes/Kategorie/204">GOSPODARKA</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Biznes/Kategorie/205">BIZNES</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Biznes/Kategorie/206">PATRIOTYZM GOSPODARCZY</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Biznes/Kategorie/207">LOKALE I NIERUCHOMOŚCI</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Biznes/Kategorie/208">PODATKI</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Biznes/Kategorie/209">PRACA</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Biznes/Kategorie/210">FIRMA</a></li></ul></div></div>
	<div class="c-dropdown"><button class="h-full py-2 px-2 transition hover:duration-75 hover:text-[#316AC4] hover:bg-white text-sm">SPORT</button>
		<div class="c-dropdown-content-relative text-sm bg-white text-[#316AC4]">
			<ul><li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Sport">STRONA GŁÓWNA</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Sport/Kategorie/138">PIŁKA</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Sport/Kategorie/139">LEKKOATLETYKA</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Sport/Kategorie/140">SPORTY WODNE</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Sport/Kategorie/141">SPORTY WALKI</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Sport/Kategorie/142">WIĘCEJ SPORTÓW</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Sport/Kategorie/143">AKTYWNIE</a></li></ul></div></div>
	<div class="c-dropdown"><button class="h-full py-2 px-2 transition hover:duration-75 hover:text-[#316AC4] hover:bg-white text-sm">SALON POLITYCZNY</button>
		<div class="c-dropdown-content-relative text-sm bg-white text-[#316AC4]">
			<ul><li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Salon-Polityczny">STRONA GŁÓWNA</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Salon-Polityczny/Kategorie/277">KOMENTATORZY</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Salon-Polityczny/Kategorie/278">POLITYCZNIE</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Salon-Polityczny/Kategorie/279">INICJATYWA OBYWATELSKA</a></li></ul></div></div>
	<div class="c-dropdown"><button class="h-full py-2 px-2 transition hover:duration-75 hover:text-[#316AC4] hover:bg-white text-sm">KOBIETA, FACET I DZIECKO</button>
		<div class="c-dropdown-content-relative text-sm bg-white text-[#316AC4]">
			<ul><li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Kobieta-Facet-Dziecko">STRONA GŁÓWNA</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Kobieta-Facet-Dziecko/Kategorie/38">KOBIETA</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Kobieta-Facet-Dziecko/Kategorie/39">FACET</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Kobieta-Facet-Dziecko/Kategorie/40">DZIECKO</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Kobieta-Facet-Dziecko/Kategorie/41">DOM</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Kobieta-Facet-Dziecko/Kategorie/42">OGRÓD</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Kobieta-Facet-Dziecko/Kategorie/43">ARCHITEKTURA</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Kobieta-Facet-Dziecko/Kategorie/44">STYL ŻYCIA</a></li></ul></div></div>
	<div class="c-dropdown"><button class="h-full py-2 px-2 transition hover:duration-75 hover:text-[#316AC4] hover:bg-white text-sm">HOBBY</button>
		<div class="c-dropdown-content-relative text-sm bg-white text-[#316AC4]">
			<ul><li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Hobby">STRONA GŁÓWNA</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Hobby/Kategorie/114">ARTYSTYCZNE</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Hobby/Kategorie/115">TECHNICZNE</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Hobby/Kategorie/116">REKREACYJNE</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Hobby/Kategorie/117">INNE TYPOWE</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Hobby/Kategorie/118">MILITARNE</a></li></ul></div></div>
	<div class="c-dropdown"><button class="h-full py-2 px-2 transition hover:duration-75 hover:text-[#316AC4] hover:bg-white text-sm">KULTURA</button>
		<div class="c-dropdown-content-relative text-sm bg-white text-[#316AC4]">
			<ul><li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Kultura">STRONA GŁÓWNA</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Kultura/Kategorie/185">WYDARZENIA</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Kultura/Kategorie/186">WIDOWISKO</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Kultura/Kategorie/187">OBRAZ</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Kultura/Kategorie/188">LITERATURA</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Kultura/Kategorie/283">HOLLYWOOD</a></li></ul></div></div>
	<div class="c-dropdown"><button class="h-full py-2 px-2 transition hover:duration-75 hover:text-[#316AC4] hover:bg-white text-sm">MOTORYZACJA</button>
		<div class="c-dropdown-content-relative text-sm bg-white text-[#316AC4]">
			<ul><li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Motoryzacja">STRONA GŁÓWNA</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Motoryzacja/Kategorie/239">WIADOMOŚCI</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Motoryzacja/Kategorie/240">PORADY I EKSPLOATACJA</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Motoryzacja/Kategorie/241">AUTO</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Motoryzacja/Kategorie/242">MOTOCYKLE</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Motoryzacja/Kategorie/243">SPORTY MOTOROWE</a></li></ul></div></div>
	<div class="c-dropdown"><button class="h-full py-2 px-2 transition hover:duration-75 hover:text-[#316AC4] hover:bg-white text-sm">NAUKA I TECHNOLOGIE</button>
		<div class="c-dropdown-content-relative text-sm bg-white text-[#316AC4]">
			<ul><li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Nauka-I-Technologie">STRONA GŁÓWNA</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Nauka-I-Technologie/Kategorie/1">NAUKA</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Nauka-I-Technologie/Kategorie/2">NAUKI ŚCISŁE</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Nauka-I-Technologie/Kategorie/3">TECHNOLOGIA</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Nauka-I-Technologie/Kategorie/4">GRY</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Nauka-I-Technologie/Kategorie/5">MEDYCYNA</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Nauka-I-Technologie/Kategorie/6">INŻYNIERIA MATERIAŁOWA</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Nauka-I-Technologie/Kategorie/7">INNOWACYJNE TECHNOLOGIE W GOSPODARCE</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Nauka-I-Technologie/Kategorie/8">EDUKACJA</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Nauka-I-Technologie/Kategorie/9">ŚRODOWISKO</a></li></ul></div></div>
	<div class="c-dropdown"><button class="h-full py-2 px-2 transition hover:duration-75 hover:text-[#316AC4] hover:bg-white text-sm">HISTORIA</button>
		<div class="c-dropdown-content-relative text-sm bg-white text-[#316AC4]">
			<ul><li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Historia">STRONA GŁÓWNA</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Historia/Kategorie/90">STAROŻYTNOŚĆ</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Historia/Kategorie/91">śRENIOWIECZE</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Historia/Kategorie/92">NOWOŻYTNOŚĆ</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Historia/Kategorie/93">EOPKA XIX WIEKU</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Historia/Kategorie/94">WSPÓŁCZESNOŚĆ</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Historia/Kategorie/95">HISTORIA POLSKI</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Historia/Kategorie/96">PUBLIKACJE</a></li></ul></div></div>
	<div class="c-dropdown"><button class="h-full py-2 px-2 transition hover:duration-75 hover:text-[#316AC4] hover:bg-white text-sm">SIŁY ZBROJNE</button>
		<div class="c-dropdown-content-relative text-sm bg-white text-[#316AC4]">
			<ul><li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Sily-Zbrojne">STRONA GŁÓWNA</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Sily-Zbrojne?category=80">WIADOMOŚCI</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Sily-Zbrojne/Kategorie/81">SIŁY ZBROJNE</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Sily-Zbrojne/Kategorie/82">TECHNOLOGIE</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Sily-Zbrojne/Kategorie/83">KONFLIKTY</a></li></ul></div></div>
	<div class="c-dropdown"><button class="h-full py-2 px-2 transition hover:duration-75 hover:text-[#316AC4] hover:bg-white text-sm">TURYSTYKA</button>
		<div class="c-dropdown-content-relative text-sm bg-white text-[#316AC4]">
			<ul><li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Turystyka">STRONA GŁÓWNA</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Turystyka/Kategorie/164">WARTO ZOBACZYĆ</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Turystyka/Kategorie/165">MOJE PODRÓŻE</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Turystyka/Kategorie/166">TURYSTYCZNIE</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Turystyka/Kategorie/167">ROWER</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Turystyka/Kategorie/168">TURYSTYKA EKSTREMALNA</a></li></ul></div></div>
	<div class="c-dropdown"><button class="h-full py-2 px-2 transition hover:duration-75 hover:text-[#316AC4] hover:bg-white text-sm">SPOŁECZEŃSTWO</button>
		<div class="c-dropdown-content-relative text-sm bg-white text-[#316AC4]">
			<ul><li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Spoleczenstwo">STRONA GŁÓWNA</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Spoleczenstwo/Kategorie/262">SPOŁECZEŃSTWO</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Spoleczenstwo/Kategorie/263">RELIGIA</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Spoleczenstwo/Kategorie/264">POLONIA</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Spoleczenstwo/Kategorie/265">FILANTROPIA</a></li></ul></div></div>

</div>
	</div>
</div>

<div class="sticky top-0 z-10 hidden block w-full xl:block">
<div class="flex flex-row bg-[#316AC4] text-white items-center align-center align-middle justify-center">
	<div class="c-dropdown"><button class="h-full py-2 px-2 transition hover:duration-75 hover:text-[#316AC4] hover:bg-white text-sm">FAKTY</button>
		<div class="c-dropdown-content text-sm bg-white text-[#316AC4]">
			<ul><li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Fakty">STRONA GŁÓWNA</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Fakty/Kategorie/274">POLSKA</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Fakty/Kategorie/275">EUROPA</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Fakty/Kategorie/276">ŚWIAT</a></li></ul></div></div>
	<div class="c-dropdown"><button class="h-full py-2 px-2 transition hover:duration-75 hover:text-[#316AC4] hover:bg-white text-sm">BIZNES</button>
		<div class="c-dropdown-content text-sm bg-white text-[#316AC4]">
			<ul><li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Biznes">STRONA GŁÓWNA</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Biznes/Kategorie/204">GOSPODARKA</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Biznes/Kategorie/205">BIZNES</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Biznes/Kategorie/206">PATRIOTYZM GOSPODARCZY</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Biznes/Kategorie/207">LOKALE I NIERUCHOMOŚCI</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Biznes/Kategorie/208">PODATKI</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Biznes/Kategorie/209">PRACA</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Biznes/Kategorie/210">FIRMA</a></li></ul></div></div>
	<div class="c-dropdown"><button class="h-full py-2 px-2 transition hover:duration-75 hover:text-[#316AC4] hover:bg-white text-sm">SPORT</button>
		<div class="c-dropdown-content text-sm bg-white text-[#316AC4]">
			<ul><li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Sport">STRONA GŁÓWNA</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Sport/Kategorie/138">PIŁKA</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Sport/Kategorie/139">LEKKOATLETYKA</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Sport/Kategorie/140">SPORTY WODNE</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Sport/Kategorie/141">SPORTY WALKI</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Sport/Kategorie/142">WIĘCEJ SPORTÓW</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Sport/Kategorie/143">AKTYWNIE</a></li></ul></div></div>
	<div class="c-dropdown"><button class="h-full py-2 px-2 transition hover:duration-75 hover:text-[#316AC4] hover:bg-white text-sm">SALON POLITYCZNY</button>
		<div class="c-dropdown-content text-sm bg-white text-[#316AC4]">
			<ul><li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Salon-Polityczny">STRONA GŁÓWNA</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Salon-Polityczny/Kategorie/277">KOMENTATORZY</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Salon-Polityczny/Kategorie/278">POLITYCZNIE</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Salon-Polityczny/Kategorie/279">INICJATYWA OBYWATELSKA</a></li></ul></div></div>
	<div class="c-dropdown"><button class="h-full py-2 px-2 transition hover:duration-75 hover:text-[#316AC4] hover:bg-white text-sm">KOBIETA, FACET I DZIECKO</button>
		<div class="c-dropdown-content text-sm bg-white text-[#316AC4]">
			<ul><li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Kobieta-Facet-Dziecko">STRONA GŁÓWNA</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Kobieta-Facet-Dziecko/Kategorie/38">KOBIETA</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Kobieta-Facet-Dziecko/Kategorie/39">FACET</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Kobieta-Facet-Dziecko/Kategorie/40">DZIECKO</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Kobieta-Facet-Dziecko/Kategorie/41">DOM</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Kobieta-Facet-Dziecko/Kategorie/42">OGRÓD</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Kobieta-Facet-Dziecko/Kategorie/43">ARCHITEKTURA</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Kobieta-Facet-Dziecko/Kategorie/44">STYL ŻYCIA</a></li></ul></div></div>
	<div class="c-dropdown"><button class="h-full py-2 px-2 transition hover:duration-75 hover:text-[#316AC4] hover:bg-white text-sm">HOBBY</button>
		<div class="c-dropdown-content text-sm bg-white text-[#316AC4]">
			<ul><li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Hobby">STRONA GŁÓWNA</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Hobby/Kategorie/114">ARTYSTYCZNE</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Hobby/Kategorie/115">TECHNICZNE</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Hobby/Kategorie/116">REKREACYJNE</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Hobby/Kategorie/117">INNE TYPOWE</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Hobby/Kategorie/118">MILITARNE</a></li></ul></div></div>
	<div class="c-dropdown"><button class="h-full py-2 px-2 transition hover:duration-75 hover:text-[#316AC4] hover:bg-white text-sm">KULTURA</button>
		<div class="c-dropdown-content text-sm bg-white text-[#316AC4]">
			<ul><li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Kultura">STRONA GŁÓWNA</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Kultura/Kategorie/185">WYDARZENIA</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Kultura/Kategorie/186">WIDOWISKO</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Kultura/Kategorie/187">OBRAZ</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Kultura/Kategorie/188">LITERATURA</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Kultura/Kategorie/283">HOLLYWOOD</a></li></ul></div></div>
	<div class="c-dropdown"><button class="h-full py-2 px-2 transition hover:duration-75 hover:text-[#316AC4] hover:bg-white text-sm">MOTORYZACJA</button>
		<div class="c-dropdown-content text-sm bg-white text-[#316AC4]">
			<ul><li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Motoryzacja">STRONA GŁÓWNA</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Motoryzacja/Kategorie/239">WIADOMOŚCI</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Motoryzacja/Kategorie/240">PORADY I EKSPLOATACJA</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Motoryzacja/Kategorie/241">AUTO</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Motoryzacja/Kategorie/242">MOTOCYKLE</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Motoryzacja/Kategorie/243">SPORTY MOTOROWE</a></li></ul></div></div>
	<div class="c-dropdown"><button class="h-full py-2 px-2 transition hover:duration-75 hover:text-[#316AC4] hover:bg-white text-sm">NAUKA I TECHNOLOGIE</button>
		<div class="c-dropdown-content text-sm bg-white text-[#316AC4]">
			<ul><li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Nauka-I-Technologie">STRONA GŁÓWNA</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Nauka-I-Technologie/Kategorie/1">NAUKA</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Nauka-I-Technologie/Kategorie/2">NAUKI ŚCISŁE</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Nauka-I-Technologie/Kategorie/3">TECHNOLOGIA</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Nauka-I-Technologie/Kategorie/4">GRY</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Nauka-I-Technologie/Kategorie/5">MEDYCYNA</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Nauka-I-Technologie/Kategorie/6">INŻYNIERIA MATERIAŁOWA</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Nauka-I-Technologie/Kategorie/7">INNOWACYJNE TECHNOLOGIE W GOSPODARCE</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Nauka-I-Technologie/Kategorie/8">EDUKACJA</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Nauka-I-Technologie/Kategorie/9">ŚRODOWISKO</a></li></ul></div></div>
	<div class="c-dropdown"><button class="h-full py-2 px-2 transition hover:duration-75 hover:text-[#316AC4] hover:bg-white text-sm">HISTORIA</button>
		<div class="c-dropdown-content text-sm bg-white text-[#316AC4]">
			<ul><li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Historia">STRONA GŁÓWNA</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Historia/Kategorie/90">STAROŻYTNOŚĆ</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Historia/Kategorie/91">śRENIOWIECZE</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Historia/Kategorie/92">NOWOŻYTNOŚĆ</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Historia/Kategorie/93">EOPKA XIX WIEKU</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Historia/Kategorie/94">WSPÓŁCZESNOŚĆ</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Historia/Kategorie/95">HISTORIA POLSKI</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Historia/Kategorie/96">PUBLIKACJE</a></li></ul></div></div>
	<div class="c-dropdown"><button class="h-full py-2 px-2 transition hover:duration-75 hover:text-[#316AC4] hover:bg-white text-sm">SIŁY ZBROJNE</button>
		<div class="c-dropdown-content text-sm bg-white text-[#316AC4]">
			<ul><li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Sily-Zbrojne">STRONA GŁÓWNA</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Sily-Zbrojne?category=80">WIADOMOŚCI</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Sily-Zbrojne/Kategorie/81">SIŁY ZBROJNE</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Sily-Zbrojne/Kategorie/82">TECHNOLOGIE</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Sily-Zbrojne/Kategorie/83">KONFLIKTY</a></li></ul></div></div>
	<div class="c-dropdown"><button class="h-full py-2 px-2 transition hover:duration-75 hover:text-[#316AC4] hover:bg-white text-sm">TURYSTYKA</button>
		<div class="c-dropdown-content text-sm bg-white text-[#316AC4]">
			<ul><li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Turystyka">STRONA GŁÓWNA</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Turystyka/Kategorie/164">WARTO ZOBACZYĆ</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Turystyka/Kategorie/165">MOJE PODRÓŻE</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Turystyka/Kategorie/166">TURYSTYCZNIE</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Turystyka/Kategorie/167">ROWER</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Turystyka/Kategorie/168">TURYSTYKA EKSTREMALNA</a></li></ul></div></div>
	<div class="c-dropdown"><button class="h-full py-2 px-2 transition hover:duration-75 hover:text-[#316AC4] hover:bg-white text-sm">SPOŁECZEŃSTWO</button>
		<div class="c-dropdown-content text-sm bg-white text-[#316AC4]">
			<ul><li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Spoleczenstwo">STRONA GŁÓWNA</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Spoleczenstwo/Kategorie/262">SPOŁECZEŃSTWO</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Spoleczenstwo/Kategorie/263">RELIGIA</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Spoleczenstwo/Kategorie/264">POLONIA</a></li>
				<li class="px-4 py-1 border border-[#316AC4] transition hover:duration-75 hover:text-white hover:bg-[#316AC4]"><a href="https://pressglobal.pl/Spoleczenstwo/Kategorie/265">FILANTROPIA</a></li></ul></div></div>
</div>
</div>

<div class="mt-4 sm:mx-10">
<div class="flex flex-col max-w-6xl" style="margin: 0 auto;">
	
	<div class="w-full">
		{{ $slot }}
	</div>
	
</div>
</div>
<div class="px-32 w-full grid grid-cols-3 gap-8 text-center border-t border-black bg-[#316AC4] text-white">
		<div class="py-10 grid-col col-span-1 items-center align-middle justify-center align-center">
			<p><a href="#" class="hover:text-gray-500">Redakcja</a> |
			<a href="#" class="hover:text-gray-500">Regulamin</a> |
			<a href="#" class="hover:text-gray-500">O portalu</a> |
			<a href="#" class="hover:text-gray-500">Zgłoś naruszenie</a> |
			<a href="#" class="hover:text-gray-500">Wydawca</a></p>
		</div>
		<div class="py-10 grid-col col-span-1 items-center align-middle justify-center align-center">
			<h3 class="font-bold">Kontakt</h3>
				<a href="mailto:redakcja@pressglobal.pl" class="hover:text-gray-500">redakcja@pressglobal.pl</a><br>
				<a href="mailto:kontakt@pressglobal.pl" class="hover:text-gray-500">kontakt@pressglobal.pl</a>
		</div>
		<div class="py-10 grid-col col-span-1 align-middle justify-center align-center">
			<p>Developed by Fundacja na <a href="https://fundacjaglosmlodych.org/" class="underline hover:text-gray-500">Rzecz Promocji i Rozwoju „Głos Młodych”</a> and 
			Marcin Larek &#169; 2022 <a href="https://pressglobal.pl/" class="underline hover:text-gray-500 font-bold">Pressglobal.pl</a> Wszelkie prawa zastrzeżone.</p>
		</div>
	</div>
</body>
</html>