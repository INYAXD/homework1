<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    //下面能讓model可以被新增東西
    protected $fillable =[
        "title",
        "link"
    ];
}
