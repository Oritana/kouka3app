<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Person extends Model
{
    protected $guarded = array('id');           /*「$guarded」プロパティは入力の保護を設定 */
    
    public static $rules = array(
        /* 'person_id'=>'required|exists:people,id', */
        'name' => 'required',             /* 名前は絶対入力 */
        'mail' => 'email',                /* @必要です */
        'age' => 'integer|min:17|max:100' /* 17歳以上100歳以下 */
        
    );

    public function getData()
    {
        return $this->id.':'.$this->name.'('.$this->age.')';  /* id,name,ageを文字列にしてまとめて返す */
    }

}