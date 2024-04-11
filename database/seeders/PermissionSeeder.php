<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            //dashborad
            'view-dashboard',
            //carrer
            'view-career',
            'view-job-opening',
            'add-job-opening',
            'edit-job-opening',
            'delete-job-opening',
            'view-job-applicants',
            'delete-job-applicants',
            //Case study
            'view-case-study',
            'add-case-study',
            'edit-case-study',
            'delete-case-study',
            //contactus
            'view-contactus-lead',
            'delete-contactus-lead',
            //footer marque
            'view-footer-marque',
            'add-footer-marque',
            'edit-footer-marque',
            'delete-footer-marque',
            'edit-status-footer-marque',
            //circular
            'view-circular',
            'add-circular',
            'edit-circular',
            'delete-circular',
            //policy
            'view-policy',
            'add-policy',
            'edit-policy',
            'delete-policy',
            //popup
            'view-popup',
            'add-popup',
            'edit-popup',
            'delete-popup',
            'edit-status-popup',
            //brochure
            'view-brochure',
            'add-brochure',
            'edit-brochure',
            'delete-brochure',
            'edit-status-brochure',
            //roles-and-permissions
            'view-roles-and-permissions',
            //role
            'view-roles',
            'add-roles',
            'edit-role-permissions',
            'update-role-permissions',
            'delete-roles',
            //permissions
            'view-permissions',
            'add-permissions',
            'edit-permissions',
            'update-permissions',
            'delete-permissions',
            //users
            'view-users',
            'add-users',
            'edit-users',
            'update-users',
            'delete-users',
        ];
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
