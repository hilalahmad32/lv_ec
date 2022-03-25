<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddToCard extends Model
{
    use HasFactory;

    public function products()
    {
        return $this->belongsTo(Product::class, 'pro_id');
    }
}
