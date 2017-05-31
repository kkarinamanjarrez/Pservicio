<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cases extends Model
{
    public $timestamps='false';
    protected $table = 'cases';
    protected $primarykeys = 'id';
    protected $fillable = [
    	'id', 'date', 'medias_id'
    ];

    public function Attention()
    {
    	return $this->hasMany('attentions::class');
    }

    public function Media()
    {
    	return $this->belongsTo('medias::class');
    }
}
