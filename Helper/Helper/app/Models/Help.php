<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Help extends Model
{
    protected $fillable = ['name' ,
     'Phone' ,
      'address',
       'case_image',
        'identity_image',
         'social_security',
         'description'
          ];
}