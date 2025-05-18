<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    protected $fillable = [
        'name',
        'icon_name',
    ];

    public function poopCounts()
    {
        return $this->hasMany(\App\Models\PoopCount::class, 'local_id');
    }
}
