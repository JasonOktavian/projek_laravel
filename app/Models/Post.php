<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    //Yang diperbolehkan Mass Insert
    // protected $fillable = ['title', 'excerpt', 'body'];
    //Yang tidak diperbolehkan mass insert
    protected $guarded = ['id'];
}
