<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeUser extends Model
{
    public $timestamps='false';
    protected $table = 'type_users';
    protected $primarykeys = 'id';
    protected $fillable = [
    	'id', 'name'
    ];

    public function User()
    {
    	return $this->hasMany('users::class');
    }
}
