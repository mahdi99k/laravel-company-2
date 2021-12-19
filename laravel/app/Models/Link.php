<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
//  protected $fillable = ['google' , 'yahoo' , 'zicco' , 'neonlearn' , 'elecodeiranzamin' , 'webamooz'];
}






//protected $fillable = ['image' , 'alt' , 'title' , 'caption];
//protected $table = ['slider'];                //  name table
//protected $primaryKey = ['slider-id'];       // change id table
//protected $dates = ['deleted_at'];
//public $timestamps = false;
