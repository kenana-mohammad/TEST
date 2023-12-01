<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    use HasFactory;
    protected $table = 'actors' ;
    protected $fillable = ['name',
     'film_id',
    ];

     //Relation 
     // one to many (film)

     public function film(){
        return $this->beLongsTo(film::class);
     }
     
}
