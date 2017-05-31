<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mean extends Model
{
    public $timestamps='false';
    protected $table = 'means';
    protected $primarykeys = 'id';
    protected $fillable = [
    	'id', 'name'
    ];

    public function Attention()
    {
    	return $this->hasMany('attentions::class');
    }
}
