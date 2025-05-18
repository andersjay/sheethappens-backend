<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sentences extends Model
{
    protected $fillable = [
        'sentence',
        'author',
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
