<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    protected $table = 'collections';
    public $timestamps = false;
    protected $fillable = ['name'];

    public function cards()
    {
        return $this->hasMany('App\Card');
    }
}
