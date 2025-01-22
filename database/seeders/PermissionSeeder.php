<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'create-application', 
            'edit-application', 
            'show-application', 
            'delete-application',
            'create-role', 
            'edit-role', 
            'delete-role', 
            'set-userRole', 
            'create-user', 
            'show-user',
            'delete-user',
            'update-general-setting', 
            'update-email-setting', 
            'cache-clear',
            'admin-panel',
            'admin-profile-edit',
            'admin-profile-update',
            'admin-profile-delete',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        $superAdminRole = Role::where('name', 'super_admin')->firstOrFail();
        $superAdminRole->givePermissionTo($permissions);

        $adminRole = Role::where('name', 'admin')->firstOrFail();
        $adminRole->givePermissionTo([
            'admin-panel',
            'create-application', 
            'edit-application', 
            'show-application', 
            'delete-application',
            'admin-profile-edit',
            'admin-profile-update',
            'admin-profile-delete',
        ]);

    }
}
