<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trucker extends Model
{
    use HasFactory;

    public function trucks(){
        return $this->belongsToMany(Truck::class);
    }

    public function packages(){
        return $this->hasMany(Package::class);
    }
}
