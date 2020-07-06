<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
	   /**
	   * Get the user that owns the portfolio.
	   */
	  public function user()
	  {
		  return $this->belongsTo('App\User');
	  }
}
