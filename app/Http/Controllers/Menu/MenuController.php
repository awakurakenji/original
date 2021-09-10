<?php

namespace App\Http\Controllers\Menu;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MenuController extends Controller
{
    public function buta()
  {
      return view('resipi.tukurikata.butasyouga');
  }
  
    public function sawara()
  {
      return view('resipi.tukurikata.sawarapiza');
  }
  
//     public function hapo()
//   {
//       return view('resipi.tukurikata.hapousai');
//   }
  
//     public function toriniku()
//   {
//       return view('resipi.tukurikata.torinikuma');
//   }
  
}