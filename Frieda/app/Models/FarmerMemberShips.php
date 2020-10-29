<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FarmerMemberShips extends Model
{
    use HasFactory;
    protected $fillable =['name', 'personal_id', 'email', 'filename'];
    protected $hidden = ['password', 'remember_token']; //隱藏資料表中的資料欄位
}
