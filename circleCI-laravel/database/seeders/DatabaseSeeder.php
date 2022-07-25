<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\App;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        if (App::environment('local')){
            $this->call(DogsTableSeeder::class);
            $this->call(AreasTableSeeder::class);
        }
        elseif (App::environment('testing')) {
            $this->call(DogsTestTableSeeder::class);
            $this->call(AreasTestTableSeeder::class);
        }
        elseif (App::environment('production')) {
            $this->call(DogsProductTableSeeder::class);
            $this->call(AreasProductTableSeeder::class);
        }
    }
}
