<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserHistory extends Model
{
    public $timestamps = false;
    protected $table = 'user_history';
    protected $fillable = ['user_id', 'question_id', 'option_id', 'is_correct', 'created_at'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function question() {
        return $this->belongsTo(Question::class);
    }

    public function option() {
        return $this->belongsTo(Option::class);
    }
}