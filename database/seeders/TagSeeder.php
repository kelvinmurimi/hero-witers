<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
       // $slug=Str::slug()
      DB::table('tags')->insert([
      [
        'name'=>"computer science",
          
        'slug'=>'computer-science',
            'created_at'=>now(),
            'updated_at'=>now(),
        ],
        [
         'name'=>"probability and statics",
         'slug'=>"probability-and-statics",
         'created_at'=>now(),
         'updated_at'=>now(),
        ],
        [
            'name'=>'Physics',
            'slug'=>'Physics',
            'created_at'=>now(),
            'updated_at'=>now(),
        ],
        [
            'name'=>'Biology',
            'slug'=>"Biology",
            'created_at'=>now(),
            'updated_at'=>now(),
        ]

      ]);

    }
}
