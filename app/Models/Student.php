<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $primaryKey = 'email';
    protected $fillable = ['email','name','batch'];
    public $incrementing = false;
    protected $hidden = ['laravel_through_key','created_at','updated_at'];

    public function course(){
        // return $this->hasManyThrough('\App\Models\Course','\App\Models\StudentCourse');
        return $this->hasManyThrough(
            '\App\Models\Course',
            '\App\Models\StudentCourse',
            'student_email',
            'id',
            'email',
            'course_id'
        );
    }
}
