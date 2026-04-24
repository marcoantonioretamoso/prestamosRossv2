<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'name',
        'address',
        'phone',
        'email',
        'account_id',
        'active'
    ];

    public function account()
    {
        return $this->belongsTo(Account::class);
    }
}
