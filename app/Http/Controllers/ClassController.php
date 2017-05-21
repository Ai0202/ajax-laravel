<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clas;
use App\Store;

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

      return view('class.index', compact('allClass','stores'));
    }

    public function ajax()
    {
      //postされたデータを取得
      $data = $this->class->getClassInStore(1);
      return $data;
    }
}
