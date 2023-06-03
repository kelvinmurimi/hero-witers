<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\gig\Gig;
use Illuminate\Support\Facades\DB;

class GigsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('gigs')->insert([
               [
                'gig_title'=>'First gig',
                'gig_slug'=>'First-gig',
                'gig_body'=>'body of first gig',
                'created_at'=>now(),
                'updated_at'=>now(),

               ],
        ]);
    }
}
