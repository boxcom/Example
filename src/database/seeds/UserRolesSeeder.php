<?php

use Illuminate\Database\Seeder;

class UserRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = \App\User::where([
            'email' => 'test@gmail.com'
        ])->first();
        $ownerRole = \Spatie\Permission\Models\Role::where([
            'name' => \App\User::ROLE_OWNER
        ])->first();
        $user->assignRole($ownerRole);
    }
}
