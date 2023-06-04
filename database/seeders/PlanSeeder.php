<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use LucasDotVin\Soulbscription\Models\Plan;
use LucasDotVin\Soulbscription\Enums\PeriodicityType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use LucasDotVin\Soulbscription\Models\Feature;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $goldmonthly=  Plan::create([
          
            'name'=>'Gold Monthly',
            'periodicity_type'=>PeriodicityType::Month,
            'periodicity'=>1,
        ]);
        $goldyearly=  Plan::create([
          
            'name'=>'Gold Yearly',
            'periodicity_type'=>PeriodicityType::Year,
            'periodicity'=>1,
        ]);
        $silvermonthly=  Plan::create([
          
            'name'=>'Silver Monthly',
            'periodicity_type'=>PeriodicityType::Month,
            'periodicity'=>1,
        ]);
        $silveryearly=  Plan::create([
          
            'name'=>'Silver Yearly',
            'periodicity_type'=>PeriodicityType::Year,
            'periodicity'=>1,
        ]);
        $trialplan=  Plan::create([
          
            'name'=>'Trial Plan',
            'periodicity_type'=>PeriodicityType::Week,
            'periodicity'=>2,
        ]);

        $limitedplanfeature=Feature::where('name','create-gigs-limited')->first();
        $unlimitedplanfeature=Feature::where('name','create-gigs-unlimited')->first();

       
        $silvermonthly->features()->attach($limitedplanfeature,['charges'=>10]);
        $silveryearly->features()->attach($unlimitedplanfeature);
        
        $goldmonthly->features()->attach($limitedplanfeature,['charges'=>10]);
         $goldyearly->features()->attach($unlimitedplanfeature);

        $trialplan->features()->attach($limitedplanfeature,['charges'=>3]);

        
    }
}
