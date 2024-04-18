<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Marque extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'marques';
    protected $fillable = ['marque_text', 'status'];

    public function marqueStatus()
    {
        $status = self::where('status', 1)->count();
        return $status;
    }
}
