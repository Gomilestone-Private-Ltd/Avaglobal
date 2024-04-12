<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AvaDocs extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "ava_documents";
    protected $fillable = ['case_id', 'filename', 'filetype', 'filesize', 'path', 'applicant_id', 'circular_title', 'circular_id', 'policy_title'];


    public function checkStatus()
    {
        $status = AvaDocs::where('downloadbrochurePdfStatus',1)->count();
        return $status;
    }
}
