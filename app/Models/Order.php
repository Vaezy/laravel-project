<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Order extends Model
{
    protected $fillable = ['amount', 'status', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}