<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    protected $fillable = ['hotel_id','comment'];
    protected $hidden = ['id', 'created_at', 'updated_at'];

    public function hotel(){
    	return $this->belongsTo('App\Hotel');
    }
}
