<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


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
        return $this->belongsTo(Jedi::class);
    }

    public function film(){
        return $this->belongsTo(Film::class);
    }

    
}
