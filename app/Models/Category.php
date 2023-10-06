<?php

namespace App\Models;

use App\Models\Task;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    public function tasks()
    {
        // Ici on etabli une relation depuis Category vers task en hasMany car une instance de category peut etre utilisé par plusieurs task
        return $this->hasMany(Task::class);
    }
}
