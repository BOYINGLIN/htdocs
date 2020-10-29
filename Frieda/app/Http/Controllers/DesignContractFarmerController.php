<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FarmerContract;
use App\Models\FarmerIntroduction;
use App\Models\FarmerMemberShips;
class DesignContractFarmerController extends Controller
{
    
    public function postit(Request $req){
    echo $req;
    //return view("news", compact('messages'));
    }

}
