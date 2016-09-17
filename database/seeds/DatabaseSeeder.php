<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Lead;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('LeadsSeeder');
    }
}

class LeadsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */ 
    public function run()
    {
        $faker = Faker::create();
        
        DB::table('leads')->delete();
        DB::table('leads')->create([
           'name'  => $faker->name,
           'email' => $faker->email,
           'date'  => $faker->dateTime
        ]);
    }
}

