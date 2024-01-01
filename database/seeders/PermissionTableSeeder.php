<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $authorities = config("permission.authorities");

        $listPermission = []; 
        $adminPermission = [];
        $nocPermission = [];
        $teknisiPermission = [];

        foreach ($authorities as $label => $permissions) {
            foreach ($permissions as $permission) {
                $listPermission[] = [
                    'name' => $permission,
                    'guard_name' => 'web',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ];
                
                //admin
                $adminPermission[] = $permission;
                //noc/teknisi
                if (in_array($label, ['manage_inventories'])) {
                    $nocPermission[] = $permission;
                    $teknisiPermission[] = $permission;
                }
            }
        }
        //Insert Permissions
        Permission::insert($listPermission);

        //insert roles
        $admin = Role::create([
            'name' => "admin",
            'guard_name' => "web",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        $noc = Role::create([
            'name' => "noc",
            'guard_name' => "web",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        $teknisi = Role::create([
            'name' => "teknisi",
            'guard_name' => "web",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        $admin->givePermissionTo($adminPermission);
        $noc->givePermissionTo($nocPermission);
        $teknisi->givePermissionTo($teknisiPermission);

        $userAdmin = User::find(1)->assignRole("admin");
    }
}
