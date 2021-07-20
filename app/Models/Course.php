<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['title','description'];
    protected $hidden = ['laravel_through_key','created_at','updated_at'];
    public function student(){
        return $this->hasManyThrough(
            '\App\Models\Student',
            '\App\Models\StudentCourse',
            'course_id',
            'email',
            'id',
            'student_email'
        );
        // return $this->hasManyThrough(
        //     '\App\Models\Student',
        //     '\App\Models\StudentCourse',
        // );
    }
}
