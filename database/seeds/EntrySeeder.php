<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class EntrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'superadmin',
            'display_name' => 'Superadmin',
            'description' => 'Superadmin',
        ]);

        DB::table('roles')->insert([
            'name' => 'admin',
            'display_name' => 'Admin',
            'description' => 'Admin',
        ]);

        DB::table('roles')->insert([
            'name' => 'user',
            'display_name' => 'User',
            'description' => 'User',
        ]);

        DB::table('role_user')->insert([
            'role_id' => '1',
            'user_id' => '1',
            'user_type' => 'App\User',
        ]);

        DB::table('users')->insert([
            'name' => 'Superadmin',
            'email' => 'superadmin@app.com',
            'password' => '$2y$10$v7UMexqhsg3m.R0/uNHIKuCkVweqN6bLS29N9Rf1TeEmXKaMYMAFC',
        ]);
    }
}
