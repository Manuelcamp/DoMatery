<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'users';
    protected $fillable = ['name', 'email', 'password', 'total_points'];
    protected $hidden = ['password'];

    public function userCourses() {
        return $this->hasMany(UserCourse::class);
    }

    public function userHistories() {
        return $this->hasMany(UserHistory::class);
    }
}