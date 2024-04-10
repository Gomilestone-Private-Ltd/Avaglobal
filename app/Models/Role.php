<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $table = 'roles';

    public static function roleHasPermissions($role, $permissions)
    {
        $hasPermission = [];
        foreach ($permissions as $key => $permission) {
            if ($role->hasPermissionTo($permission)) {
                $hasPermission[] = $key;
            }
        }
        return $hasPermission;
    }
}
