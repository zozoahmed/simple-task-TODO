<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tasks extends Model
{
    use HasFactory;
    protected $table = "tasks";
    protected $fillable = ['title', 'content','image','start-date' ,'end-date','update','delete','remove'];

    public $timestamps = false;
}
