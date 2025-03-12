<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



// tao bang su dung Model
class Book extends Model
{
    use HasFactory;

    protected $table = "sach";
    protected $primaryKey = "id";
    public $timestamps = false;
}
