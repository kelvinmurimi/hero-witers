<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Seeders\TagSeeder;
use Illuminate\Database\Seeder;
use Database\Seeders\CategorySeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(TagSeeder::class);
        $this->call(CategorySeeder::class);


      
      
      
        //seed features
        $this->call(FeatureSeeder::class);
        //seed plans
        $this->call(PlanSeeder::class);

        $this->call(GigsTableSeeder::class);

    }
}
