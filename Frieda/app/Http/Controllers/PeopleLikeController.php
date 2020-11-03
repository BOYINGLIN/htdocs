<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Models\FarmerContract;
use App\Models\FarmerIntroduction;
use App\Models\FarmerMemberShips;



class PeopleLikeController extends Controller
{
    public function index($id){ //取得特定農夫的訊息
        $messages = DB::table('farmer_introduction')->where('id','=', $id)->get();



        //菜名與種類
        $vid= DB::table('farmer_introduction')->where('id','=', $id)->value('vegid');
        $vegcid= DB::table('vegid_list')->where('id','=', $vid)->value('category');
        $vegCategory=DB::table('veglist')->where('id','=', $vegcid)->get(); //種類
        $vegName=DB::table('vegid_list')->where('id','=', $vid)->get(); //菜名


        //取得地區資訊
        $lid = DB::table('farmer_introduction')->where('id','=', $id)->value('lid');
        $lid_list= DB::table('lid_list')->where('id','=', $lid)->get();

        //取得農夫資訊
        $fid = DB::table('farmer_introduction')->where('id','=', $id)->value('fid');
        $farmername_member_ships =  DB::table('farmer_member_ships')->where('id', '=', $fid )->get();
        
        
        return view("pages.garden", compact('messages', 'lid_list', 'farmername_member_ships', 'vegCategory', 'vegName')); 
    }
}
