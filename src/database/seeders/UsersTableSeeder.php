<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            'name' => 'test1',
            'email' => 'xxx@xxx',
            'pass' => '1234'
        ];
        DB::table('users')->insert($users);
    }
}
