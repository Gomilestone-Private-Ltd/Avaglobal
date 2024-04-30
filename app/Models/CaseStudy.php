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
    public function getActionButtonAttribute()
    {
        $html = '';
        if (!empty($this->id)) {
            $html .= "<div class='d-flex'><a href='" . route('casestudy.edit', $this->id) . "' class='btn btn-primary'>Edit</a><button class='btn btn-danger' onclick='deleteModal($this->id)' style='margin-left:2px;'>Delete</button></div>";
        } else {
            $html .= "<div class='d-flex'><span class='btn btn-primary disabled'>Edit</span><button class='btn btn-danger disabled' style='margin-left:2px;'>Delete</button></div>";
        }


        return $html;
    }
    public function getDescriptionAttribute()
    {
        <a type="button" class="view-btn" data-id="{{ $data->id }}"
        data-toggle="modal" data-target="#exampleModalLong"
        onclick="updateModalBody('{{ $data->id }}')">
        <img src="{{ asset('assets/images/eye.png') }}" alt="Back"
            class="eye-icon">
    </a>
    $html = '';
    if(!empty($this->id))
    {
        "<div class='d-flex'><a href='" . route('casestudy.edit', $this->id) . "' class='btn btn-primary'>Edit</a><button class='btn btn-danger' onclick='deleteModal($this->id)' style='margin-left:2px;'>Delete</button></div>";
        $html .= "<a type='button' class='view-btn' data-id='".$this->id."' data-toggle='modal' data-target='#exampleModalLong' onclick='updateModalBody($this->id)'>
        <img src=>
        </a>";
    }
    }
}