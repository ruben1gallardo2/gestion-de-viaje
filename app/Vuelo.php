<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Model;

class Vuelo extends Model
{
	protected $table = 'vuelo';

	protected $fillable = [
		'name', 'sits', 'cities'
	];
}
