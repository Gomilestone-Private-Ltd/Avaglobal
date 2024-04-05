<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContactUs extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'contacts';
    protected $fillable = ['name', 'email', 'position', 'phone', 'applicantPdf', 'deleted_at'];
    public function avaDocs()
    {
        return $this->hasOne(AvaDocs::class, 'contact_id', 'id');
    }
}