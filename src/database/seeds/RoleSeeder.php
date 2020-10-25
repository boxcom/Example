<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use \Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $d = \Spatie\Permission\Models\Permission::findByName('dashboard-view');
        $r = \Spatie\Permission\Models\Permission::findByName('reports-view');
        $c = \Spatie\Permission\Models\Permission::findByName('configuration-view');

        $all = Permission::all();
        Role::create(['name' => \App\User::ROLE_OWNER])
            ->permissions()
            ->attach($all);

        Role::create(['name' => \App\User::ROLE_ADMIN])
            ->permissions()
            ->attach([$d->id, $c->id]);

        Role::create(['name' => \App\User::ROLE_EMPLOYEE])
            ->permissions()
            ->attach([$d->id, $r->id]);
    }
}
