<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    protected $fillable = [
        'goal',
        'icon_name',
        'local_id',
    ];

    public function local()
    {
        return $this->belongsTo(Local::class);
    }
    public function users()
    {
        return $this->belongsToMany(User::class, 'achievement_user');
    }
}
