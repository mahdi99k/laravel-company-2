<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
}






//protected $fillable = ['image' , 'alt' , 'title' , 'caption];
//protected $table = ['slider'];                 //  name table
//protected $primaryKey = ['slider-id'];        // change id table
//protected $dates = ['deleted_at'];           // softDelete
//public $timestamps = false;                 // no timeStamps
