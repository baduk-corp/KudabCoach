<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{

    protected $dates = [
        'date'
    ];

    protected $fillable = [
        'date',
        'comments',
        'location'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
