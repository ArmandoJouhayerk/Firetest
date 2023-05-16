<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash; 
use Illuminate\Database\Seeder;
use App\Models\User;  

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jose = new User; 
        $jose->name="Armando"; 
        $jose->email="armando@gmail.com";
        $jose->password = Hash::make("Pass123");
        $jose->save();            
    }
}
