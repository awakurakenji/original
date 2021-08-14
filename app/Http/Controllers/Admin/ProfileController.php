<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Profiles;

use App\Pfhistory;

use Carbon\Carbon;


class ProfileController extends Controller
{
    public function add()
    {
        return view('admin.profile.create');
    }
    
    public function create(Request $request)
    {
        
     //  Validationを行う
     $this->validate($request, Profiles::$rules);
     $profile = new Profiles;
     $form = $request->all();
     
     //　フォームから送信されてきた_tokenを削除する
     unset($form['_token']);
     //　データベースに保存する
     $profile->fill($form);
     $profile->save();
     
     return redirect('admin/profile/create');
    }
    
    
    public function index(Request $request)
  {
      $cond_title = $request->cond_title;
      if ($cond_title != '') {
          // 検索されたら検索結果を取得する
          $posts = Profiles::where('title', $cond_title)->get();
      } else {
          // それ以外はすべてのニュースを取得する
          $posts = Profiles::all();
      }
      return view('admin.profile.index', ['posts' => $posts, 'cond_title' => $cond_title]);
  }
  
  public function edit(Request $request)
  {
      // News Modelからデータを取得する
      $profile = Profiles::find($request->id);
      if (empty($profile)) {
        abort(404);    
      }
      return view('admin.profile.edit', ['profile_form' => $profile]);
  }
  
   
     public function update(Request $request)
  {
      // Validationをかける
      $this->validate($request, Profiles::$rules);
      // News Modelからデータを取得する
      $profile = Profiles::find($request->id);
      // 送信されてきたフォームデータを格納する
      $profile_form = $request->all();
      unset($profile_form['_token']);
      // 該当するデータを上書きして保存する
      $profile->fill($profile_form)->save();
      
        $pfhistory = new Pfhistory;
        $pfhistory->profiles_id = $profile->id;
        $pfhistory->edited_at = Carbon::now();
        $pfhistory->save();

      return redirect('admin/profile/');
  }
   
    public function delete(Request $request)
  {
      // 該当するNews Modelを取得
      $profile = Profiles::find($request->id);
      // 削除する
      $profile->delete();
      return redirect('admin/profile/');
  }
}

