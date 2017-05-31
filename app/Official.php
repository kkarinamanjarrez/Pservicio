<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Official extends Model
{
    public $timestamps='false';
    protected $table = 'officials';
    protected $primaykeys = 'id';
    protected $fillable = [
    	'id', 'name', 'address', 'phone', 'positions_id'
    ];

    public function Attention()
    {
    	return $this->hasMany('attentions::class');
    }

    public function Position()
    {
    	return $this->belongsTo('positions::class');
    }
}
