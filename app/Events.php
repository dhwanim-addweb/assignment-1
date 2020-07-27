<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
  protected $table="events";
protected $timestamp=false;
protected $fillable=['title','start_event','end_event'];
}
