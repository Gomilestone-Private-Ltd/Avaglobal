<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Job extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "job_openings";

    protected $fillable = ['department', 'job_role', 'location', 'time_period', 'is_active', 'experience', 'description','slug'];

    public function getIsActiveAttribute($value)
    {
        return $value == 1 ? 'Active' : 'Inactive';
    }
    // public function careerDescription()
    // {
    //     return $this->hasOne(Description::class, 'job_id', 'id');
    // }
}
