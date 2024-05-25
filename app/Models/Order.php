<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_acc',
        'id_server',
        'id_user',
        'id_item',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
    public function item()
    {
        return $this->belongsTo(Item::class, 'id_item');
    }
}
