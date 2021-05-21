<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
protected $table = 'profile';

    //fillable fields
    protected $fillable = [
        'firstname', 
        'lastname', 
        'gender', 
        'kota',
    ];

    //custom timestamp name
    // const CREATED_AT = 'created';
    // const UPDATED_AT = 'modified';

    //custom
    
}
