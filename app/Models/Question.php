<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public $timestamps = false;
    protected $table = 'Questions';
    protected $fillable = ['statement', 'difficulty', 'points_reward', 'topic_id'];

    public function topic() {
        return $this->belongsTo(Topic::class);
    }

    public function options() {
        return $this->hasMany(Option::class);
    }

    public function userHistories() {
        return $this->hasMany(UserHistory::class);
    }
}