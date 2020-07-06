<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{

  /**
     * The attributes that should be cast.
     *
     * @var array
     */
  protected $casts = [
        'values' => 'array',
    ];

}
