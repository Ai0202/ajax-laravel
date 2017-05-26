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

    public function create()
    {
      return view('class.create');
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

    public function store(Request $request)
    {
      $cls_cd = [1,2,3,4,5,6];
      $cls_name = '浅草';

      $data = $this->class->createCls($cls_cd, $cls_name);

      return $data;
    }
}
