<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Originals;

use App\History;

use Carbon\Carbon;

class OriginalController extends Controller
{
  public function add()
  {
    return view('admin.original.create');
  }
  
  public function create(Request $request)
  
  {
    //  Validationを行う
    $this->validate($request, Originals::$rules);
    $original = new Originals;
    $form = $request->all();
    
    //　フォームから画像が送信されてきたら、保存して、$news->image_path に画像のパスを保存する
    if (isset($form['image'])) {
      $path = $request->file('image')->store('public/image');
      $original->image_path = basename($path);
      } else {
        $original->image_path = null;
      }
    
    //　フォームから送信されてきた_tokenを削除する
    unset($form['_token']);
    //　フォームから送信されてきたimageを削除する
    unset($form['image']);
    //　データベースに保存する
    $original->fill($form);
    $original->save();
    // admin/news/createにリダイレクトする
    return redirect('admin/original/create');
  }
  
  public function index(Request $request)
  {
      $cond_title = $request->cond_title;
      if ($cond_title != '') {
          // 検索されたら検索結果を取得する
          $posts = Originals::where('title', $cond_title)->get();
      } else {
          // それ以外はすべてのニュースを取得する
          $posts = Originals::all();
      }
      return view('admin.original.index', ['posts' => $posts, 'cond_title' => $cond_title]);
  }
  
  public function edit(Request $request)
  {
      // News Modelからデータを取得する
      $original = Originals::find($request->id);
      if (empty($original)) {
        abort(404);    
      }
      return view('admin.original.edit', ['original_form' => $original]);
  }


  public function update(Request $request)
  {
      // Validationをかける
      $this->validate($request, Originals::$rules);
      // News Modelからデータを取得する
      $original = Originals::find($request->id);
      // 送信されてきたフォームデータを格納する
      $original_form = $request->all();
      
      if ($request->remove == 'true') {
          $original_form['image_path'] = null;
      } elseif ($request->file('image')) {
          $path = $request->file('image')->store('public/image');
          $original_form['image_path'] = basename($path);
      } else {
          $original_form['image_path'] = $original->image_path;
      }
      
      unset($original_form['image']);
      unset($original_form['remove']);
      unset($original_form['_token']);
      // 該当するデータを上書きして保存する
      $original->fill($original_form)->save();
      
      
        $history = new History;
        $history->originals_id = $original->id;
        $history->edited_at = Carbon::now();
        $history->save();

      return redirect('admin/original');
  }
  
  public function delete(Request $request)
  {
      // 該当するNews Modelを取得
      $original = Originals::find($request->id);
      // 削除する
      $original->delete();
      return redirect('admin/original/');
  }
}