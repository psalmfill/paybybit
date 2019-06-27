<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'amount'
    ];
    
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
