<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public $timestamps = false;
    protected $table = 'courses';
    protected $fillable = ['name'];

    public function disciplines() {
        return $this->hasMany(Discipline::class);
    }

    public function userCourses() {
        return $this->hasMany(UserCourse::class);
    }
}