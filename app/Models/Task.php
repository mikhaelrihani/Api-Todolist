<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Task extends Model
{
    use HasFactory;
    // Ci dessous un moyen pour nous de lier notre model Task avec une potentiel table qui s'appelle toto de notre serveur de bdd
    // protected $table = 'toto'; 

    // public function category()
    // {
    //     // Ici on etabli une relation depuis Task vers Category en belongsTo car une instance de task dépend forcément au minimum et au maximum d'une instance de category
    //     return $this->belongsTo(Category::class);
    // }
}
