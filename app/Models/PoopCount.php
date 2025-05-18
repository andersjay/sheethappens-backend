<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PoopCount extends Model
{
    protected $table = 'poop_counts';

    protected $fillable = [
        'user_id',
        'local_id',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function local()
    {
        return $this->belongsTo(User::class, 'local_id');
    }

    public function incrementPoopCount($userId, $localId)
    {
        $poopCount = self::create([
            'user_id' => $userId,
            'local_id' => $localId,
        ]);
        if(!$poopCount){
            return false;
        }
        return true;
    }

    public function getPoopCountByLocal($localId)
    {
        return self::where('local_id', $localId)->count();
    }
    
    public function getPoopCountByUser($userId)
    {
        return self::where('user_id', $userId)->count();
    }
}
