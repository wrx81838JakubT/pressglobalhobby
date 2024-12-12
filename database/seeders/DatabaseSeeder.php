<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Cathegory;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
	 
	/**
	Cathegory::factory()->create([
			'name' => '',
			'cathegory_id' => ,
			'parent' => ''
		]);
	*/
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@example.com',
			'password' => 'zaq1@WSX',
        ]);
		
		//Kategorie główne
		Cathegory::factory()->create([
			'name' => 'Artystyczne',
			'cathegory_id' => null,
			'parent' => 'Brak'
		]);
		
		Cathegory::factory()->create([
			'name' => 'Techniczne',
			'cathegory_id' => null,
			'parent' => 'Brak'
		]);
		
		Cathegory::factory()->create([
			'name' => 'Rekreacyjne',
			'cathegory_id' => null,
			'parent' => 'Brak'
		]);
		
		Cathegory::factory()->create([
			'name' => 'Inne Typowe',
			'cathegory_id' => null,
			'parent' => 'Brak'
		]);
		
		Cathegory::factory()->create([
			'name' => 'Militarne',
			'cathegory_id' => null,
			'parent' => 'Brak'
		]);
		
		//Podkategorie Arystyczne
		Cathegory::factory()->create([
			'name' => 'Malarstwo',
			'cathegory_id' => 1,
			'parent' => 'Artystyczne'
		]);
		
		Cathegory::factory()->create([
			'name' => 'Rysowanie',
			'cathegory_id' => 1,
			'parent' => 'Artystyczne'
		]);
		
		Cathegory::factory()->create([
			'name' => 'Muzyka',
			'cathegory_id' => 1,
			'parent' => 'Artystyczne'
		]);
		
		Cathegory::factory()->create([
			'name' => 'Fotografia',
			'cathegory_id' => 1,
			'parent' => 'Artystyczne'
		]);
		
		Cathegory::factory()->create([
			'name' => 'Taniec',
			'cathegory_id' => 1,
			'parent' => 'Artystyczne'
		]);
		
		Cathegory::factory()->create([
			'name' => 'Śpiew',
			'cathegory_id' => 1,
			'parent' => 'Artystyczne'
		]);
		
		Cathegory::factory()->create([
			'name' => 'Robótki Ręczne',
			'cathegory_id' => 1,
			'parent' => 'Artystyczne'
		]);
		
		//Podkategorie Techniczne
		Cathegory::factory()->create([
			'name' => 'Modelarstwo',
			'cathegory_id' => 2,
			'parent' => 'Techniczne'
		]);
		
		Cathegory::factory()->create([
			'name' => 'Majsterkowanie',
			'cathegory_id' => 2,
			'parent' => 'Techniczne'
		]);
		
		Cathegory::factory()->create([
			'name' => 'Krótkofalarstwo',
			'cathegory_id' => 2,
			'parent' => 'Techniczne'
		]);
		
		//Podkategorie Rekreacyjne
		Cathegory::factory()->create([
			'name' => 'Sport',
			'cathegory_id' => 3,
			'parent' => 'Rekreacyjne'
		]);
		
		Cathegory::factory()->create([
			'name' => 'Łowienie',
			'cathegory_id' => 3,
			'parent' => 'Rekreacyjne'
		]);
		
		Cathegory::factory()->create([
			'name' => 'Grzybobranie',
			'cathegory_id' => 3,
			'parent' => 'Rekreacyjne'
		]);
		
		Cathegory::factory()->create([
			'name' => 'Polowanie',
			'cathegory_id' => 3,
			'parent' => 'Rekreacyjne'
		]);
		
		Cathegory::factory()->create([
			'name' => 'Ogrodnictwo',
			'cathegory_id' => 3,
			'parent' => 'Rekreacyjne'
		]);
		
		//Podkategoria Inne Typowe
		Cathegory::factory()->create([
			'name' => 'Czytanie Książek',
			'cathegory_id' => 4,
			'parent' => 'Inne Typowe'
		]);
		
		Cathegory::factory()->create([
			'name' => 'Kolekcjonerstwo',
			'cathegory_id' => 4,
			'parent' => 'Inne Typowe'
		]);
		
		Cathegory::factory()->create([
			'name' => 'Anime',
			'cathegory_id' => 4,
			'parent' => 'Inne Typowe'
		]);
		
		Cathegory::factory()->create([
			'name' => 'Gry Komputerowe',
			'cathegory_id' => 4,
			'parent' => 'Inne Typowe'
		]);
		
		//Podkategoria Militarne
    }
}
