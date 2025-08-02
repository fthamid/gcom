<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
     
        
        User::factory()->create([
            'name' => 'badr',
            'email' => 'badr@unimatel.ma',
        ]);
        User::factory(200)->create();
        
        Client::factory()->create([
            'nom' => 'Les comptoirs Unimatel',
            'email' => 'unimatel@unimatel.ma',
            'telephone' => '+212 6 61 36 65 25',
            'ville' => 'Oujda', 'pays' => 'Maroc',
            'code_postal' => '60000','is_client' => true,
            'idf' => '05300960', 'ice' => '008090123456789',
        ]);
        Client::factory(300)->create();
    
    }
}
