<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    public $timestamps = false;
    protected $table = 'options';
    protected $fillable = ['question_id', 'content', 'is_correct'];

    public function question() {
        return $this->belongsTo(Question::class);
    }

    public function userHistories() {
        return $this->hasMany(UserHistory::class);
    }
}
