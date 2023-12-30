<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Permission;
use App\Models\RolePermission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            ['name' => 'Create Language', 'slug' => 'create-language' ],
            ['name' => 'Edit Language', 'slug' => 'edit-language' ],
            ['name' => 'Delete Language', 'slug' => 'delete-language' ],
            ['name' => 'Update Language', 'slug' => 'update-language' ],

            ['name' => 'Create Role', 'slug' => 'create-role' ],
            ['name' => 'Edit Role', 'slug' => 'edit-role' ],
            ['name' => 'Delete Role', 'slug' => 'delete-role' ],
            ['name' => 'Update Role', 'slug' => 'update-role' ],

            ['name' => 'Create Page', 'slug' => 'create-page' ],
            ['name' => 'Edit Page', 'slug' => 'edit-page' ],
            ['name' => 'Delete Page', 'slug' => 'delete-page' ],
            ['name' => 'Update Page', 'slug' => 'update-page' ],
        ];

        foreach($permissions as $permission){
            Permission::query()->create($permission);
        }

        $permissions = Permission::all();

        foreach($permissions as $permission){
            $roleId = 1;
            RolePermission::query()->create([
                'role_id' => $roleId,
                'permission_id' => $permission->id
            ]);
        }
    }
}
