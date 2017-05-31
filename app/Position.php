<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    public $timestamps='false';
    protected $table = 'Positions';
    protected $primarykeys = 'id';
    protected $fillable = [
    	'id', 'name'
    ];

    public function Official()
    {
    	return $this->hasMany('officials::class');
    }

}
