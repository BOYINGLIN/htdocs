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
       
        $messages = DB::table('farmer_introduction') //串聯資料表
                    ->join('lid_list', 'farmer_introduction.lid', '=','lid_list.id') //(表2, '表1欄位', '表2欄位)
                    ->join('vegid_list', 'farmer_introduction.vegid', '=', 'vegid_list.id')
                    ->join('farmer_member_ships', 'farmer_introduction.fid', '=', 'farmer_member_ships.id')
                    ->select('farmer_introduction.*', 'lid_list.location', 'vegid_list.vegname', 'farmer_member_ships.name')
                    ->where('fid','=', $id)->get(); //農夫名稱、地區、菜名
                    
       
        
        
        
        
        
        //菜名與種類 //搜尋
        $vid= DB::table('farmer_introduction')->where('id','=', $id)->value('vegid');
        $vegcid= DB::table('vegid_list')->where('id','=', $vid)->value('category');
        $vegCategory=DB::table('veglist')->where('id','=', $vegcid)->get(); //種類
        //$vegName=DB::table('vegid_list')->where('id','=', $vid)->get(); //菜名
        
        //取得地區資訊 //搜尋
        $lid = DB::table('farmer_introduction')->where('id','=', $id)->value('lid');
        $lid_list= DB::table('lid_list')->where('id','=', $lid)->get();

        
        return view("pages.garden", compact('messages', 'lid_list', 'vegCategory')); 
    }
    
    




    //收藏紐需要在網址上有檔名/會員id/農民id
    /*public function likefarmer($id){ 
        $fid = DB::table('farmer_introduction')->where('id','=', $id)->value('fid'); //農夫資訊


        $titles = DB::table("vedios")->where('listid', '=', $id)->get();
        $farm_name =  $fid ->input('farm_name');


        return view("pages.garden", compact('titles', 'username'));
       }*/
}
