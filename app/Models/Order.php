<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    // Este se modifica porque un pedido pertenece a un usuario, por lo que se pone la relacion one to many entre Order y User.
    // Se registra como belongsTo
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function invoice()
    {
        return $this->hasOne(Invoice::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transactions::class);
    }

    public function items()
    {
        return $this->hasMany(Item::class);
    }
}
