<?php

use Illuminate\Database\Seeder;
use company\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
        		['name' => 'Admin'],
        		['name' => 'User'],
        		['name' => 'Category'],
        		['name' => 'Product'],
        ];
        Role::insert($data);
    }
}
