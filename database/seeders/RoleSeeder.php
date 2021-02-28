<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades;
use App\Models\Role;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $roles = new Role();
       $roles->create([
           "name"=>'admin'
       ]);
       $roles->create([
        "name"=>'users'
    ]);
    $roles->create([
        "name"=>'author'
    ]);
    $roles->create([
        "name"=>'nothing'
    ]);
    }
}
