<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Originals;

use App\History;

use Carbon\Carbon;

class BlogController extends Controller
{
//     public function kiji()
//   {
//       return view('blog.blog');
//   }

  public function kiji(Request $request)
  {
      $cond_title = $request->cond_title;
      if ($cond_title != '') {
          // 検索されたら検索結果を取得する
          $posts = Originals::where('title', $cond_title)->get();
      } else {
          // それ以外はすべてのニュースを取得する
          $posts = Originals::all();
      }
      return view('blog.blog', ['posts' => $posts, 'cond_title' => $cond_title]);
  }
   
}