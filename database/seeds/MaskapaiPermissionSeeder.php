<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class MaskapaiPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'Maskapai Create',
            'Maskapai View',
            'Maskapai Update',
            'Maskapai Delete',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
