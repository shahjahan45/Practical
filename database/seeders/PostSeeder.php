<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;



class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=1; $i<=25; $i++){
            DB::table('posts')->insert([
                'title'=>str::random(20),
                'description'=>Str::random(),
                'status'=>1,
                'publish_date'=>Date('y-m-d'),
                'user_id'=>1,
    
            ]);
        }
        
    }
}
