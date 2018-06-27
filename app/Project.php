<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

  protected $fillable = [
      'title',
  ];

  public function user(){

    return $this->belongsTo('App\User');

  }

  public function contents(){

    return $this->hasMany('App\Content');

  }
}
