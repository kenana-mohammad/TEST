<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;
    protected $table ="types";
    protected $fillable =['type'];

    //relation many to many (film && type)
      
    public function Films(){

        return $this->beLongsToMany(film::class , table:'film_type_pivots');
    }
}
