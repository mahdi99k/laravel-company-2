<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    use HasFactory;

   protected $guarded = ['id']; /* all full column database  Other than id */
}







//protected $fillable = ['image' , 'alt' , 'title' , 'caption];
//protected $table = ['slider'];
//protected $primaryKey = ['slider-id'];
//protected $dates = ['deleted_at'];
//public $timestamps = false;
