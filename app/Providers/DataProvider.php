<?php

namespace App\Providers\DataProviders;

use Illuminate\Support\Collection;

class DataProvider
{
 /**
  * Generate an Illuminate\Collection for easy access of data
  *
  * @return Collection Collection of data()
  */
 public static function make()
 {
  return new Collection(static::data());
 }
}

