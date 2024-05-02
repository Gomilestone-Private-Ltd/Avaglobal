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
    protected $appends = ['action_button'];

    public function avaDocs()
    {
        return $this->hasMany(AvaDocs::class, 'case_id', 'id');
    }
    public function getCreatedAtAttribute($value)
    {
        return date("d F Y", strtotime($value));
    }
    public function checkCaseStatus()
    {
        $status = self::where('status', 1)->count();
        return $status;
    }
    // public function getActionButtonAttribute()
    // {
    //     $html = '';
    //     if (!empty($this->id)) {
    //         $html .= "<div class='d-flex'><a href='" . route('casestudy.edit', $this->id) . "' class='btn btn-primary'>Edit</a><button id='deleteButton' class='delete-btn' onclick='deleteModal($this->id)'><img src='" . asset('assets/images/trash.png') . "' class='delete-icon' ></button></div>";
    //     } else {
    //         $html .= "<div class='d-flex'><span class='btn btn-primary disabled'>Edit</span><button class='btn btn-danger disabled' style='margin-left:2px;'>Delete</button></div>";
    //     }
    // }

    public function getActionButtonAttribute()
    {
        $html = '';
        if (!empty($this->id)) {
            $html .= "<div class='d-flex'><a href='" . route('casestudy.edit', $this->id) . "'  class='edit-btn'><img src='" . asset('assets/images/edit.png') . "' class='edit-icon'></a><button id='deleteButton' class='delete-btn' onclick='deleteModal(" . $this->id . ")'><img src='" . asset('assets/images/trash.png') . "' class='delete-icon'></button></div>";
        }
        return $html;
    }
}