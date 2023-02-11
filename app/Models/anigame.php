<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class anigame extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function sc() {
        return $this->hasMany(contents::class);
    }
}
