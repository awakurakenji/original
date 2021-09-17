<?php

namespace App\Http\Controllers\Resipi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ResipiController extends Controller
{
    public function syusai()
  {
      return view('resipi.kondate.syusai');
  }

    public function fukusai()
  {
      return view('resipi.kondate.fukusai');
  }
  
    public function meinn()
  {
      return view('resipi.kondate.meinn');
  }
  
     public function soup()
  {
      return view('resipi.kondate.soup');
  }
  
      public function desert()
  {
      return view('resipi.kondate.desert');
  }
}