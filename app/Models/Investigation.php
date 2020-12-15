<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Investigation extends Model
{

  /**
   * Get the user that owns the investment.
   */
  public function user()
  {
      return $this->belongsTo('App\User');
  }

	/**
   * Get the portfolio that owns the investment.
   */

  public function portfolio()
  {
      return $this->belongsTo('App\Portfolio');
  }

   protected $fillable = ['user_id','meta','company_id','purchased_at','company_name','value'];


  /**
     * The attributes that should be cast.
     *
     * @var array
     */
  protected $casts = [
        'meta' => 'array',
		      'purchased_at' => 'date:d/m/Y',
    ];


}
