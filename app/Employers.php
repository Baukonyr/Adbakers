<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employers extends Model
{
    //
		protected $table = 'Employers';
		
		protected $fillable = [
		'firstName',
		'lastName',
		'email',
		'phone',
		'company_id',
		];
		
		public function Company(){
			return $this->belongsTo('App\Companies');
		}
}
