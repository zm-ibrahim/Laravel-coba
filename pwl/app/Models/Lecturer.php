<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function subject()
    {
        return $this->belongsToMany(Subject::class);
    }
}
