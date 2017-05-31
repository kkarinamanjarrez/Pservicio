<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    public $timestamps = 'false';
    protected $table = 'media';
    protected $primarykeys ='id';
    protected $fillable = [
    	'id', 'name'
    ];

    public function Cases()
    {
    	return $this->hasMany('cases::class');
    }
}
