<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    //Admin  to login 
    public function run(): void
    {
        //
         $user = User::Create([
          'name' => 'Admin',
          'email' => 'admin@gmail.com',
          'password' => bcrypt('12345678'),
          'role' => 'admin',
         ]);
    }
}
