<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * @OA\Schema(
 *   schema="Quote",
 *   @OA\Property(
 *      format="int64",
 *      type="string",
 *      property="jedi_id",
 *      title="jedi_id",
 *      default="",
 *      description="jedi_id",
 *      example="1"
 *   ),
  *   @OA\Property(
 *      format="int64",
 *      type="string",
 *      property="film_id",
 *      title="film_id",
 *      default="",
 *      description="film_id",
 *      example="1"
 *   ),
  *   @OA\Property(
 *      format="int64",
 *      type="string",
 *      property="quote",
 *      title="quote",
 *      default="",
 *      description="quote",
 *      example="1"
 *   ),
 * )
 */
class Quote extends Model 
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ["jedi_id", "film_id", "quote"];



    // public function jedi(){
    //     return $this->hasOne(Jedi::class);
    // }

    // public function film(){
    //     return $this->hasOne(Film::class);
    // }

    public function jedi(){
        return $this->belongsToMany(Jedi::class);
    }

    public function film(){
        return $this->belongsTo(Film::class);
    }

    
}
