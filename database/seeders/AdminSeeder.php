<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
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
         
        $role = Role::create(['name' => 'admin']);
       
        $permissions = Permission::pluck('id','id')->all();
     
        $role->syncPermissions($permissions);
       
        $user->assignRole([$role->id]);
// role = user
$user = User::Create([
    'name' => 'kinana',
    'email' => 'k@1111.com',
    'password' => bcrypt('11111111'),
    'role' => 'user',
   ]);
        $role = Role::create(['name' => 'user']);
       
        $permissions = Permission::pluck('id','id')->all();
     
        $role->syncPermissions($permissions);
       
        $user->assignRole([$role->id]);
    }
}
