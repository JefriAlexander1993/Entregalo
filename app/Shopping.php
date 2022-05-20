<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shopping extends Model
{
    //   
    protected $fillable = [
        'weight',
        'declared_value',
        'origin',
        'destination',
        'senders_name',
        'sender_phone_number',
        'recipient_name',
        'recipient_phone_number',
        'description',

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at', 'updated_at',
    ];
}
