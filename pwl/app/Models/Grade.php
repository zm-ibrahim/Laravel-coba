<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function students()
    {
        return $this->hasMany(User::class);
    }

    public function subject()
    {
        return $this->belongsToMany(Subject::class);
    }
}
