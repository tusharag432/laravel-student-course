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

    public function student(){
        return $this->hasManyThrough('\App\Models\Course','\App\Models\StudentCourse');
    }
}
