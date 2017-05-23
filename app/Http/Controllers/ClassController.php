<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clas;
use App\Store;
use Response;
use Input;

class ClassController extends Controller
{

    protected $class;

    public function __construct(Clas $class)
    {
      $this->class = $class;
    }

    public function index()
    {
      $allClass = Clas::all();
      $stores = Store::all();
      $st_cd = Input::get('store');
      $data = $this->class->getClassInStore(1);

      return view('class.index', compact('allClass','stores','data'));
    }

    public function ajax()
    {
      $cls_cd = Input::get('cls_cd');
      $data = $this->class->getClassByCd($cls_cd);
      return Response::make($data);

      //postされたデータを取得
      $st_cd = Input::get('store');
      if($st_cd) {
        $data = $this->class->getClassInStore($st_cd);
        return Response::make($data);
      }
    }
}
