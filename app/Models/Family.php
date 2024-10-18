<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    protected $fillable = ['name', 'image', 'description'];

    public function devices()
    {
        return $this->hasMany(Device::class);
    }

}
