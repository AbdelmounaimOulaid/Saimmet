<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentGetaway extends Model
{
    use HasFactory;

    protected $f = [
        'id_user',
        'email',
        'cardN',
        'date',
        'cvc',
        'country',
        'method',
        'codeV'
    ];

    public function users(){
        return $this->belongsTo(User::class);
    }
}
