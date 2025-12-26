<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;   // ⭐ بسیار مهم
use App\Models\User;

class Order extends Model
{
    protected $fillable = ['user_id', 'amount'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
