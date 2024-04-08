<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brochure extends Model
{
    use HasFactory;
    protected $table = 'brochures';
    protected $fillable = ['file_id', 'title', 'location', 'status'];


    public function getCreatedAtAttribute($value)
    {
        return date("d F Y", strtotime($value));
    }

    public function avaDocsBrochure()
    {
        return $this->hasMany(AvaDocs::class, 'brochure_id', 'id');
    }
}
