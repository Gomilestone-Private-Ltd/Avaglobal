<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;
    protected $table = 'testimonials';
    protected $fillable = ['name', 'text', 'file_id', 'status'];

    public function testimonialImage()
    {
        return $this->hasOne(AvaDocs::class, 'id', 'file_id');
    }
    public function checkmonialStatus()
    {
        $status = self::where('status', 1)->count();
        return $status;
    }
}
