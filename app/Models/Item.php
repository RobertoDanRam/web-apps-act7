<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function category() // funcion
    {return $this->belongsTo(Category::class); // relacion
    }

    // se especifica belongs to many porque son many a many
    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }
}
