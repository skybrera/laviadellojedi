<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @OA\Schema(
 *   schema="Jedi",
 *   @OA\Property(
 *      format="int64",
 *      type="string",
 *      property="nome",
 *      title="nome",
 *      default="",
 *      description="nome",
 *      example="1"
 *   ),
 * )
 */
class Jedi extends Model 
{
    use HasFactory;

    protected $table = "jedi";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nome'];



    public function quotes(){
        return $this->hasMany(Quote::class);
    }

}
