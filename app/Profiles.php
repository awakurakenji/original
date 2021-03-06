<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profiles extends Model
{
    protected $guarded = array('id');

        public static $rules = array(
        'name' => 'required',       
        'gender' => 'required',
        'hobby' => 'required',
        'introduction'=> 'required',
    );
    
        public function pfhistories()
    {
      return $this->hasMany('App\Pfhistory');
    }
}
