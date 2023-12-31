<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Checkout extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
    'user_id',
    'camp_id',
    // 'card_id',
    // 'expired',
    // 'cvc',
    // 'is_paid',
    // 'card_number',
    ];

//     public function setExpiredAttribute($value)
// {
//     $this->attributes['expired'] = date('Y-m-t', strtotime($value));
// }

public function camp(){
    return $this->belongsTo(Camp::class, 'camp_id');
}

public function user(){
    return $this->belongsTo(User::class, 'user_id');
}
}
