<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class film_type_pivot extends Model
{
    use HasFactory;
    protected $table ='film_type_pivots' ;
    protected $fillable =['Film_Id' ,
                          'type_id',
];


}
