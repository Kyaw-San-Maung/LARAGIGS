<?php

namespace Database\Seeders;

use App\Models\Listing;
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
        // User::factory(5)->create();


        $user = User::factory()->create([
            'name' => 'Freddy',
            'email' => 'freddy123@gmail.com',
        ]);

        Listing::factory(6)->create([
            'user_id' => $user->id
        ]);



        // Listing::create([
        //     'title' => 'Laravel Junior Developer',
        //     'tags' => 'laravel, javascript',
        //     'company' => 'Acme Crop',
        //     'location' => 'Yangon, Myanmar',
        //     'email' => 'test@gmail.com',
        //     'website' => 'https://www.acme.com',
        //     'description' => 'This is description for testing.'
        // ]);
    }
}
