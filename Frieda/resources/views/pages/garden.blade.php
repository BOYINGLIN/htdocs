@extends("layouts.master") @section("content")


<style>
#mask {background: rgba(0, 125, 124, 0.6);} /*文字灰底*/
#Fhead{font-size: 30px; text-align: left; font-family: ‘cwTeXKai’, serif;;}
#FHtable{font-size: 30px; text-align: left; font-family: ‘cwTeXKai’, serif;;}
#Ftable{font-size: 30px; text-align: center; font-family: ‘cwTeXKai’, serif;;}

</style>

<div class="w-100 display-1 font-weight-bold" style="font-family: 'Noto Serif TC', serif;">
<div id="mask" class="text-center"  style="font-size: 50px; -webkit-text-stroke: 0.3px white; text-align: center;">
@foreach($messages as $msg){{$msg->farm_name}}@endforeach</div>
<hr>

<body>



		<div id="fh5co-about" data-section="about">
			<div class="fh5co-2col fh5co-bg to-animate-2" style="background-image: url( https://scontent.fkhh1-2.fna.fbcdn.net/v/t1.0-9/123361976_3388549001259537_2710074316131941242_o.jpg?_nc_cat=108&ccb=2&_nc_sid=0debeb&_nc_ohc=vfRUUe0bu-YAX_8ej4_&_nc_ht=scontent.fkhh1-2.fna&oh=b82510607177b2fafbaa3c38748800af&oe=5FC5BFE0)"></div>
			<div class="fh5co-2col fh5co-text">
				<h2 class="heading to-animate">關於我</h2>
				<p class="to-animate"><span class="firstcharacter">F</span>我說什麼</p>
				<p class="text-center to-animate"><a href="#" class="btn btn-outline-danger btn-outline">收  藏</a></p>
			</div>
		</div>

<div class="author-info text p-3 p-md-5">
							<div class="desc">
                <span class="subheading">大家好~我是 @foreach($farmername_member_ships as $fms) {{$fms->name}} @endforeach</span>
                
								<h1 class="big-letter">主要種植 
                  @foreach($vegCategory as $vegC) {{$vegC->category}} @endforeach的 </h1>
                <h1 class="mb-4"><span>
                  @foreach($vegName as $vegN) {{$vegN->vegname}} @endforeach
                </span>
                <span>在
                  @foreach($lid_list as $lid) {{$lid->location}} @endforeach </span></h1>
								<p class="mb-4">{{$msg->farm_content}}</p>
                <h3 class="signature h1">快來聯絡我</h3>
                <p class="mb-4">{{$msg->contact_number}}</p>

                
              </div>
</div>


<table style="width: 100%">
<thead>
    <tr bgcolor=#ff9912 id="Ftable">
      <th scope="col">id</th>
      <th scope="col">fid</th>
      <th scope="col">農場名稱</th>
      <th scope="col">農場介紹</th>
      <th scope="col">地區</th>
      <th scope="col">菜名</th>
      <th scope="col">圖片路徑</th>
      <th scope="col">電話</th>
      <th scope="col">信箱</th>
      <th scope="col">地址</th>
      <th scope="col">選項</th>
    </tr>
  </thead>
    <tbody>    
     
     <tr>
     @foreach($messages as $msg)
        <th>{{$msg->id}}</th>
        <th>{{$msg->fid}}</th>
        <th>{{$msg->farm_name}}</th>
        <th>{{$msg->farm_content}}</th>
        <th>{{$msg->lid}}</th>
        <th>{{$msg->vegid}}</th>
        <th>{{$msg->veg_filename}}</th>
        <th>{{$msg->contact_number}}</th>
        <th>{{$msg->contact_email}}</th>
        <th>{{$msg->contact_address}}</th>
        <th>
          <input type=button value="收藏" name="farmer_collect"></input>
          <input type=button value="編輯" name="farmer_edit"></input>
        </th>
        </tr> 
     @endforeach
         
</tbody>
</table>
@endsection