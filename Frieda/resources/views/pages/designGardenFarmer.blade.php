@extends("layouts.master") @section("content")
<style>
#mask {background: rgba(0, 125, 124, 0.6);} /*文字灰底*/
#Fhead{font-size: 30px; text-align: left; font-family: ‘cwTeXKai’, serif;;}
#FHtable{font-size: 30px; text-align: left; font-family: ‘cwTeXKai’, serif;;}
#Ftable{font-size: 15px; text-align: center; font-family: ‘cwTeXKai’, serif;;}

</style>
<div class="w-100 display-1 font-weight-bold" style="font-family: 'Noto Serif TC', serif;">
<div id="mask" class="text-center"  style="font-size: 50px; -webkit-text-stroke: 0.3px white; text-align: center;">編輯我的菜園</div>
<hr>
<div id="Fhead">
     
    <form style="width: 100%" action="/postit" method="post" name="/postit" enctype="multipart/form-data">
    @csrf    
    
    菜園名稱 <input type=text name="farm_name" size=20 placeholder="田鼠愛吃菜"  required="required"> <br><br>
    <div class="form-group">
    <label for="comment">菜園簡介</label>
    <textarea  class="form-control" rows="5" id="farm_content" name="farm_content"  required="required" placeholder="我種的瓜大又甜，菜翠綠且酥脆，逛逛我的菜園吧"></textarea>
    </div>
       
    
    
    <div class="row">
    <div class="col-md-4 mb-3">
            <label for="#">耕種地區</label>
            <select class="custom-select d-block w-100" id="locationID" name="locationID"  required="required" >
            <option>---select location---</option>     
            @foreach ($locationID as $lid)
            <option value="{{$lid->id}}"> {{$lid->location}} </option>
            @endforeach              
            </select>                     
          </div>
          
          <div class="col-md-4 mb-3">
            <label for="#">蔬菜種類</label>            
            <select class="custom-select d-block w-100" id="vegCategoryID" name="vegCategoryID"  required="required" >
            <option>---select category---</option>     
            @foreach ($vegCategory as $vegC)
            <option value="{{$vegC->id}}" > {{$vegC->category}} </option>
            @endforeach              
            </select>                 
          </div>          
          
          <div class="col-md-4 mb-3">
            <label for="#">蔬菜名稱</label>
            <select class="custom-select d-block w-100" id="vegtableName" name="vegtableName"  required="required" >
              <option>---select vegetable---</option> 
              @foreach ($vegtableName as $vegid)            
              <option value="{{$vegid->id}}">{{$vegid->vegname}}</option>
              @endforeach -->            
            </select>                                 
          </div>
          
                     
            </select>                                 
          </div>
          
    
    <div id="mask">備註1：先選種類再選蔬菜名稱。$vegCategoryID = $_POST['vegCategoryID'];取得id</div>
    <div id="mask">備註2：無法傳送locationID與vegtableName的id送入後台的lid及vegid中</div>
    
    <br>    

    
    菜園美圖   <input type="file" name="veg_fileToUpload" id="veg_fileToUpload"  required="required">
    

    <hr>
   

    <div>
    <table style="width: 100%">
            <tbody>
                <tr id="FHtable">
                    <td colspan="2" ><b>聯絡方式</b></td>
                </tr>
                <tr class="border border-secondary text-center" id="Ftable">
                    <td class="h4 border border-secondary"  width="250" style="table-layout: fixed">電話</td>
                    <td class="border border-secondary"  width="350">
                      <input class="form-control" type="text" name="contact_number" id="contact_number"
                      required="required" style="width: 100%" /></td>
                </tr>
                <tr class="border border-secondary text-center">
                    <td class="h4 border border-secondary" width=auto>信箱</td>
                    <td class="border border-secondary" width=auto><input
                        class="form-control" type="text" name="contact_email" id="contact_email"
                         style="width: 100%"></td>
                </tr>
                <tr class="border border-secondary text-center">
                    <td class="h4 border border-secondary" width=auto>地址</td>
                    <td class="border border-secondary" width=auto><input
                        class="form-control" type="text" name="contact_address" id="contact_address"
                         style="width: 100%"></td>
                </tr>


               
                
            </tbody>
        </table>
    </div>
      
     


    <hr class="mb-4">
        <input class="btn-lg btn-outline-secondary  btn-block" type="submit" font-family="‘cwTeXKai’, serif"value="上傳" name="submit"> 
        
        
    </form>


              
    
    

        
    </div>
</div>
@endsection