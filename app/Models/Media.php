<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;
    protected $table = 'media';
    protected $fillable = ['title', 'status', 'description', 'location', 'online_image_id', 'print_image_id', 'media_url', 'pdf_file_id'];

    public function avaDocs()
    {
        return $this->hasOne(AvaDocs::class, 'id', 'pdf_file_id');
    }

    public function onlineDocsImage()
    {
        return $this->hasOne(AvaDocs::class, 'id', 'online_image_id');
    }
    public function printDocsImage()
    {
        return $this->hasOne(AvaDocs::class, 'id', 'print_image_id');
    }
    public function getCreatedAtAttribute($value)
    {
        return date("d F Y", strtotime($value));
    }
    // public function checkOnlineCoverageStatus()
    // {
    //     $status = self::where('status', 1)
    //         ->with('onlineDocsImage')
    //         ->whereHas('onlineDocsImage')
    //         ->count();
    //     return $status;
    // }
}
