<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Applicant extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'applicants';
    protected $fillable = ['name', 'email', 'position', 'phone', 'applicantPdf'];
    public function avaDocs()
    {
        return $this->hasOne(AvaDocs::class, 'applicant_id', 'id');
    }
}