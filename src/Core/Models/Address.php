<?php

namespace AkshayJumbade\ModernUser\Core\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
   use HasFactory;
   const TYPE_HOME = 'home';
   const TYPE_COMPANY = 'company';

   protected $fillable = [
      'var',
      'type',
      'label',
      'caption',
      'data',
      'data_type',
      'scope',
      'level',
      'is_autoload',
      'default_value',
   ];
   public function getDataAttribute($value = '')
   {
      return $value;
   }
}
