<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brochure extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'brochures';
    protected $fillable = ['image_id', 'brochure_id', 'title', 'location', 'status'];


    public function getCreatedAtAttribute($value)
    {
        return date("d F Y", strtotime($value));
    }

    public function avaDocsPopUpImage()
    {
        return $this->hasOne(AvaDocs::class, 'id', 'image_id');
    }
    public function avaDocsBrochureFiles()
    {
        return $this->hasOne(AvaDocs::class, 'id', 'brochure_id');
    }
    public function checkPopStatus()
    {
        $status = self::where('status', 1)->count();
        return $status;
    }
}
