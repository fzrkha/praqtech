<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class anigame extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function contents() {
        return $this->hasMany(contents::class);
    }
}
