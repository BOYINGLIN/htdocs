<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FarmerIntroduction extends Model
{
    use HasFactory;
    protected $fillable =['fid', 'farm_name', 'farm_content', 'lid', 'vegid', 'veg_filename', 'discount', 'contact_number', 'contact_email', 'contact_address'];
}
