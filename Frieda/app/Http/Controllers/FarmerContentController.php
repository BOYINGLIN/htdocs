<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\FarmerIntroduction;
use App\Models\FarmerMemberShips; //提供fid
use App\Models\LidList; //提供lid資訊
use App\Models\Veglist; //提供蔬菜種類
use App\Models\VegidList; //提供vid

class FarmerContentController extends Controller
{
    public function index(){ //獲取所有農夫資訊
    $messages = DB::table('farmer_introduction') //串聯資料表
                    ->join('lid_list', 'farmer_introduction.lid', '=','lid_list.id') //(表2, '表1欄位', '表2欄位)
                    ->join('vegid_list', 'farmer_introduction.vegid', '=', 'vegid_list.id')
                    ->join('farmer_member_ships', 'farmer_introduction.fid', '=', 'farmer_member_ships.id')
                    ->select('farmer_introduction.*', 'lid_list.location', 'vegid_list.vegname', 'farmer_member_ships.name')
                    ->get();

    $locationID =DB::table('lid_list')->get();
    $vegCategory =DB::table('Veglist')->get();       
    $vegtableName = DB::table('Vegid_list')->get(); 
    return view("pages.farmerContent", compact('messages', 'locationID', 'vegCategory', 'vegtableName'));

    }
    /*public function search_location(Request $request){//搜尋農夫
        
        $request->get('lid');
        $messages = DB::table('farmer_introduction')
                    ->join('lid_list', 'farmer_introduction.lid', '=','lid_list.id') //(表2, '表1欄位', '表2欄位)
                    ->join('vegid_list', 'farmer_introduction.vegid', '=', 'vegid_list.id')
                    ->join('farmer_member_ships', 'farmer_introduction.fid', '=', 'farmer_member_ships.id')
                    ->select('farmer_introduction.*', 'lid_list.location', 'vegid_list.vegname', 'farmer_member_ships.name')
                    ->where('lid','=',$request)->get();
    
       
    
        return view("pages.farmerContent/", compact('messages'));
    }*/

}
