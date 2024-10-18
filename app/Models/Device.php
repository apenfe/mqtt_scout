<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    protected $fillable = ['deviceID', 'apikey', 'image', 'description', 'family_id', 'attrs', 'cmd', 'cmdexe'];

    public function family()
    {
        return $this->belongsTo(Family::class);
    }
}
