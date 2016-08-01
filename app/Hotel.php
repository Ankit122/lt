<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
   protected $table = 'hotels';
    protected $fillable = ['name'];
    protected $hidden = ['id','created_at', 'updated_at'];

    public function comments(){
    	return $this->hasMany('App\Comment');
    }
}
