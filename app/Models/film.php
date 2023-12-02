<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class film extends Model
{
    use HasFactory;

    protected $table='films';

    protected $fillable =[
     'name', 'description' , 'show_time' ,'image',
    ];

      //Relation 
      
      //one To many (film,actor)

       public function actors(){

        return $this->hasMany(Actor::class);

       }
       //________________

       // many to many (film && type)

          public function types(){

            return $this->beLongsToMany(Type::class , table:'film_type_pivots');
          }
}
