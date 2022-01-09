<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


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



    
    public function quote(){
        return $this->hasMany(Quote::class);
    }

}
