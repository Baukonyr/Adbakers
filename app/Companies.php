<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    //
		protected $table = 'Companies';
		
		protected $fillable = [
		'name',
		'email',
		'logo',
		'website',
		];
		
		
		public function Employer(){
			return $this->hasMany('App\Employers');
		}
}
