<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserCourse extends Model
{
    public $timestamps = false;
    protected $table = 'user_courses';
    protected $fillable = ['user_id', 'course_id', 'created_at'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function course() {
        return $this->belongsTo(Course::class);
    }
}