<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conta extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'numero', 'valor',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
