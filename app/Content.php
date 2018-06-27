<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{

  protected $fillable = [
      'body','date','time',
  ];


  public function user(){

    return $this->belongsTo('App\User');

  }

  public function project(){

    return $this->belongsTo('App\Project');

  }
}
