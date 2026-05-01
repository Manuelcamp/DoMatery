<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Discipline extends Model
{
    public $timestamps = false;
    protected $table = 'disciplines';
    protected $fillable = ['name', 'course_id'];

    public function course() {
        return $this->belongsTo(Course::class);
    }

    public function topics() {
        return $this->hasMany(Topic::class);
    }
}