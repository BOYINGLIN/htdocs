<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FarmerContract extends Model
{
    use HasFactory;
    protected $fillable =['fid', 'name', 'content', 'price']; //確保資料庫可被新增或修改
}
