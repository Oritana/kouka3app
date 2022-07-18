<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;


class Person extends Model
{
   protected $guarded = array('id');

   public static $rules = array(
      'name' => 'required',
      'mail' => 'email',
      'age' => 'integer|min:17|max:100'
   );

   // getDataは残しておく
   public function getData()
   {
      return $this->id . ': ' . $this->name . ' (' . $this->age . ')';
   }

   protected static function boot()
{
   parent::boot();

   static::addGlobalScope('age', function (Builder $builder) {
       $builder->where('age', '>', 17);
   });
}
}


