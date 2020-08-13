<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $table = 'cards';
    public $timestamps = false;
    protected $fillable = ['question', 'answer', 'collection_id'];

    public function collection()
    {
        return $this->belongsTo('App\Collection');
    }
}
