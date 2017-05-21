<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clas extends Model
{
  protected $table = 'class_table';

  public function getClassInStore($st_cd)
  {
    $class = $this->where('st_cd', $st_cd)->get();
    return $class;
  }
}
