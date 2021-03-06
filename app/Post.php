<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['titulo', 'descricao', 'autor'];

    public function getAutor()
    {
        return $this->belongsTo('App\User','autor');
    }

}
