<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Post extends Model
{

  public function scopeFilter($query, $filters)
  {
    if ($month = $filters('month')) {
      $query->whereMonth('created_at', Carbon::parse($month)->month);
    }

    if ($year = $filters('year')) {
      $query->whereYear('created_at', Carbon::parse($year)->year);
    }
    //
}



}
