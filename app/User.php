<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Scopes\UserScope;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','state_id','gender_id','age','status_id','race_id','religion_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new UserScope);
    }


    /**
    * Get the state that owns the user.
    */
    public function state()
    {
        return $this->belongsTo(State::class);
    }

    /**
    * Get the gender that owns the user.
    */
    public function gender()
    {
        return $this->belongsTo(Gender::class);
    }

    /**
    * Get the religion that owns the user.
    */
    public function religion()
    {
        return $this->belongsTo(Religion::class);
    }

    /**
    * Get the status that owns the user.
    */
    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    /**
    * Get the race that owns the user.
    */
    public function race()
    {
        return $this->belongsTo(Race::class);
    }

    /**
    * Scope a query to only include state users.
    *
    * @param \Illuminate\Database\Eloquent\Builder $query
    * @return \Illuminate\Database\Eloquent\Builder
    */
    public function scopeNegeri($query, $value)
    {
        if ($value) {
            return $query->where('state_id', $value);
        }
    }

   /**
   * Scope a query to only include state users.
   *
   * @param \Illuminate\Database\Eloquent\Builder $query
   * @return \Illuminate\Database\Eloquent\Builder
   */
   public function scopeJantina($query, $value)
   {
       if ($value) {
           return $query->where('gender_id', $value);
       }
   }

      /**
      * Scope a query to only include state users.
      *
      * @param \Illuminate\Database\Eloquent\Builder $query
      * @return \Illuminate\Database\Eloquent\Builder
      */
     public function scopeAgama($query, $value)
     {
         if ($value) {
             return $query->where('religion_id', $value);
         }
     }

     /**
     * Scope a query to only include state users.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeStatusKahwin($query, $value)
    {
        if ($value) {
            return $query->where('status_id', $value);
        }
    }

    /**
    * Scope a query to only include state users.
    *
    * @param \Illuminate\Database\Eloquent\Builder $query
    * @return \Illuminate\Database\Eloquent\Builder
    */
    public function scopeBangsa($query, $value)
    {
        if ($value) {
            return $query->where('race_id', $value);
        }
    }
}
