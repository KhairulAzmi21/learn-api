<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Propery extends Model
{
    protected $table="msia_property_price";

    /**
    * Scope a query to only include state users.
    *
    * @param \Illuminate\Database\Eloquent\Builder $query
    * @return \Illuminate\Database\Eloquent\Builder
    */
   public function scopeDaerah($query, $value)
   {
       if ($value) {
           return $query->where('kod_daerah', $value);
       }
   }

   /**
   * Scope a query to only include state users.
   *
   * @param \Illuminate\Database\Eloquent\Builder $query
   * @return \Illuminate\Database\Eloquent\Builder
   */
  public function scopeMukim($query, $value)
  {
      if ($value) {
          return $query->where('kod_mukim', $value);
      }
  }

  /**
  * Scope a query to only include state users.
  *
  * @param \Illuminate\Database\Eloquent\Builder $query
  * @return \Illuminate\Database\Eloquent\Builder
  */
 public function scopeStatus($query, $value)
 {
     if ($value) {
         return $query->where('kod_status', $value);
     }
 }
}
