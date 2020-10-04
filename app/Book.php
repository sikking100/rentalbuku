<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'id_categories',
        'name',
        'foto',
    ];

    public function category()
    {
        return $this->belongsTo('App\Category', 'id_categories');
    }
}
