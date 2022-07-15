<?php

namespace Database\Seeders;

use App\Models\Auteurs;
use App\Models\User;
use App\Models\Livres;
use Database\Factories\LivresFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        User::factory()
        ->count(50)
        ->create();
        Auteurs::factory()
        ->count(5)
        ->create();
        Livres::factory()
        ->count(10)
        ->create();
    }
        
    
}
