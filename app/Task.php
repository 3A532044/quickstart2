<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['name'];

    public function tasks()
    {
        return $this->belongsTo(User::class);
    }
}
