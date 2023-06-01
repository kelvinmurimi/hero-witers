<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('categories')->insert(
           [
            [
                'name'=>'top writers',
                'slug'=>"top-writers",
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'name'=>'Entertainment',
                'slug'=>"entertainment",
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'name'=>'Editors Choice',
                'slug'=>"editors choice",
                'created_at'=>now(),
                'updated_at'=>now(),
            ]
           ]
            );
    }
}
