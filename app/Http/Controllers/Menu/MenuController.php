<?php

namespace App\Http\Controllers\Menu;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MenuController extends Controller
{
    public function add()
  {
      return view('resipi.tukurikata.butasyouga');
  }
  
}