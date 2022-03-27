<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';
    protected $fillable = [
        'email',
        'name',
        'address',
        'city',
        'privonce',
        'postal_code',
        'phone',
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
