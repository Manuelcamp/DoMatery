<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    public $timestamps = false;
    protected $table = 'topics';
    protected $fillable = ['name', 'discipline_id'];

    public function discipline() {
        return $this->belongsTo(Discipline::class);
    }

    public function questions() {
        return $this->hasMany(Question::class);
    }
}