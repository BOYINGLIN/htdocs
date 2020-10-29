<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeopleLike extends Model
{
    use HasFactory;
    protected $fillable =['pid', 'lid', 'like_fid'];
}
