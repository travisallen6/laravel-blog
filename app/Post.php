<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  // table name
  protected $table = 'posts';
  // primary_key
  public $primaryKey = 'id';
  // timestamps
  public $timestamps = true;
}
