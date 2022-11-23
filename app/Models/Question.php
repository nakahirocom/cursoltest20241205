<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $table = 'questions';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function answerresults()
    {
        return $this->hasMany(AnswerResults::class);
    }
}
