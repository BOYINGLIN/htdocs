<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VegPrice extends Model
{
    use HasFactory;
    protected $fillable =['vegid', 'lid', 'price', 'date'];
}
