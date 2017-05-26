<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Clas extends Model
{
  protected $table = 'class_table';

  protected $guarded = ['id'];

  public $timestamps = false;

  public function getClassInStore($st_cd)
  {
    $class = $this->where('st_cd', $st_cd)->get();
    return $class;
  }

  public function getClassByCd($cls_cd)
  {
    $class = $this->where('cls_cd', $cls_cd)->get();
    return $class;
  }

  public function createCls($cls_cd, $cls_name)
  {
    $data = 0;
    $inputs = [];
    DB::transaction(function () use($cls_cd, $cls_name, &$data){
      foreach($cls_cd as $value) {
        $inputs['cls_cd'] = $value;
        $inputs['cls_name'] = $cls_name;
        $this->create($inputs);
        $data = $data + 1;
      }
    });
    return $data;
  }
}
