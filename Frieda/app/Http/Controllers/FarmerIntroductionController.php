<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\FarmerIntroduction;
use App\Models\FarmerMemberShips; //提供fid
use App\Models\LidList; //提供lid資訊
use App\Models\Veglist; //提供蔬菜種類
use App\Models\VegidList; //提供vid

class FarmerIntroductionController extends Controller
{
      public function index(){
        $locationID =DB::table('lid_list')->get();
        $vegCategory =DB::table('Veglist')->get();       
        $vegtableName = DB::table('Vegid_list')->get(); //目標只呈現cid的東西
        return view('pages.designGardenFarmer', compact('vegCategory', 'vegtableName', 'locationID'));

    } 





    public function postit (Request $req){ //儲存檔案    
      
      $farm_name =  $req ->input('farm_name');
      $farm_content = $req ->input('farm_content');
      
      $locationID = $req->input('lid'); //無法放數值進入空格
      $vegtableName =  $req ->input('vegid');//無法放數值進入空格
      $contact_number= $req ->input('contact_number');
      $contact_email= $req ->input('contact_email');
      $contact_address = $req ->input('contact_address');      
    
      $path = $req->file('veg_fileToUpload')->store('public'); //圖片檔名路徑
      $veg_filename=basename($path);
      //dd( request()->all() );//可用來檢查傳送的檔案    


      DB::Insert ('insert into farmer_introduction(farm_name,farm_content, lid, vegid, contact_number, veg_filename, contact_email, contact_address) values(?,?,?,?,?,?,?,?)',
      [$farm_name, $farm_content, $locationID, $vegtableName, $veg_filename, $contact_number, $contact_email, $contact_address]);
       return view('/garden/{id}', compact('id', 'fid', 'farm_name','farm_content', 'lid', 'vegid','veg_filename','contact_number','contact_email','contact_address'));

      //redirect()->route('/garden/{id}');
      
  }
        
}
