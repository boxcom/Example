<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'test',
            'email' => 'test@gmail.com',
            'password' => Hash::make('password'),
            'role' => \App\User::ROLE_OWNER
        ]);

        $this->call(PermissionTableSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserRolesSeeder::class);
    }
}
