<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'client_id', 'transaction_data', 'amount'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

  
}
