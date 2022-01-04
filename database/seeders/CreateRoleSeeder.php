<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\role;

class CreateRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = [
            [
               'name'=>'Admin',
               'slug'=>'Admin',

            ],
            [
               'name'=>'User',
               'slug'=>'user',
            ],
        ];

        foreach ($role as $key => $value) {
            User::create($value);
        }
    }
}
