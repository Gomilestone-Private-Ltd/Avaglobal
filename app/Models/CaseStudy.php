<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CaseStudy extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "case_studies";

    public function avaDocs()
    {
        return $this->hasMany(AvaDocs::class, 'case_id', 'id');
    }
    public function getCreatedAtAttribute($value)
    {
        return date("d F Y", strtotime($value));
    }
}
