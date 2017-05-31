<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attention extends Model
{
    public $timestamps='false';
    protected $table = 'attentions';
    protected $primarykeys = 'id';
    protected $fillable = [
    	'date', 'cases_id', 'means_id', 'officials_id'
    ];

    public function Cases()
    {
    	return $this->belongsTo('cases::class');
    }

    public function Mean()
    {
    	return $this->belongsTo('means::class');
    }

    public function Official()
    {
    	return $this->belongsTo('officials::class');
    }
}
