<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use LucasDotVin\Soulbscription\Models\Feature;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use LucasDotVin\Soulbscription\Enums\PeriodicityType;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Feature::create([
            'consumable'=>true,
            'name'=>'create-gigs-limited',
            'periodicity_type'=>PeriodicityType::Month,
            'periodicity'=>1,
        ]);
        Feature::create([
            'consumable'=>true,
            'name'=>'create-gigs-unlimited',
            'periodicity_type'=>PeriodicityType::Month,
            'periodicity'=>1,
        ]);
      
    }
}
