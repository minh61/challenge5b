<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Challenge extends Model {
    protected $table = 'challenge';
    
    public $timestamps = true;
    
	protected $fillable = [
		'message','idSend', 'idReceive'
	];
}