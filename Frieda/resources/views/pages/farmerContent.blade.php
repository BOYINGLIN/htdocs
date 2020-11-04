@extends("layouts.master") @section("content")
<style>
#mask {background: rgba(0, 125, 124, 0.6);} /*文字灰底*/
#Fhead{font-size: 30px; text-align: left; font-family: 'Noto Serif TC', serif;;}
#FHtable{font-size: 30px; text-align: center; font-family: ‘cwTeXKai’, serif;;}
#Ftable{font-size: 15px; text-align: left; font-family: ‘cwTeXKai’, serif;;}
#Hselect{font-size: 20px; text-align: center; background: rgba(123, 125, 124, 0.6);font-family: 'Noto Serif TC', serif;;}

</style>
<div class="w-100 display-1 font-weight-bold" style="font-family: 'Noto Serif TC', serif;">
<div id="mask" class="text-center"  style="font-size: 50px; -webkit-text-stroke: 0.3px white; text-align: center;">逛逛菜農們</div>
<div class="album bg-light">
<form action="/search" method="POST" role="search">
@csrf
<table style="width:100%" id="Hselect"><!--需要寫搜尋功能，我是表頭-->
<tr>
<div class="row" >
    <div class="col-md-4 mb-3">        
            <th><label for="farmerselect">耕種地區</label></th>            
        <th>
            <select class="custom-select d-block w-70" id="locationID" name="locationID">
            <option>Choose...</option>     
            @foreach ($locationID as $lid)
            <option value="{{$lid->id}}"> {{$lid->location}} </option>
            @endforeach              
            </select>
        </th>                    
    </div>
          
    <div class="col-md-4 mb-3">
        <th><label for="farmerselect">蔬菜種類</label></th>            
        <th> <select class="custom-select d-block w-70" id="vegCategoryID" name="vegCategoryID">
            <option>Choose...</option>     
            @foreach ($vegCategory as $vegC)
            <option value="{{$vegC->id}}" > {{$vegC->category}} </option>
            @endforeach              
            </select>
        </th>                 
     </div>          
          
    <div class="col-md-4 mb-3">
        <th><label for="farmerselect">蔬菜名稱</label></th>
        <th><select class="custom-select d-block w-70" id="vegtableName" name="vegtableName">
              <option>Choose...</option>           
              @foreach ($vegtableName as $vegid)            
              <option value="{{$vegid->id}}">{{$vegid->vegname}}</option>
              @endforeach
            </select>
        </th>                                 
    </div>
    <th><input type="submit" name="search_location" value="搜尋" ></th><!--需要寫搜尋農夫功能-->
</tr></table></form>



<div class="container">       
        <div class="row">
        @foreach($messages as $msg)
            <div class="card mb-4 shadow-sm">
                <div class="card" style="width: 18.7rem;" >
                    <img src="https://scontent.fkhh1-2.fna.fbcdn.net/v/t1.0-9/123361976_3388549001259537_2710074316131941242_o.jpg?_nc_cat=108&ccb=2&_nc_sid=0debeb&_nc_ohc=vfRUUe0bu-YAX_8ej4_&_nc_ht=scontent.fkhh1-2.fna&oh=b82510607177b2fafbaa3c38748800af&oe=5FC5BFE0"
                        width="250" height="250" class="card-img-top" alt=""
                        style="cursor: pointer;"
                        onclick="location.href='http://127.0.0.1:8000/garden/{{$msg->fid}}';" > <!---網頁連結處取得-->
                        <div class="card-body" >
                        <h5 class="card-title" id="Fhead">{{$msg->name}}</h5> <!---姓名與農場名稱-->
                        <h5 class="card-title" id="FHtable">{{$msg->farm_name}}</h5>
                        <h5 class="card-title" id="FHtable">{{$msg->location}}的{{$msg->vegname}}</h5> <!---種類的蔬菜名稱-->
                        <p class="card-text" id="Ftable" >{{$msg->farm_content}}</p> <!---簡介處-->
                        
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button"
                                class="btn btn-outline-danger btn-outline">收藏♥</button>
                                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
       
    </div>
</div>
    



@endsection