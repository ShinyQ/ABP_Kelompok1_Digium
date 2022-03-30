<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    public function user(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function transaction_item(){
        return $this->hasMany(TransactionItem::class, 'transaction_id', 'id');
    }
}
