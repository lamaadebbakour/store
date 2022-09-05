<x-layout>

            <br><br><br>
<center>        <h1 style="color:rgba(0, 136, 169, 1);font-size:60px">Welcome to your online store</h1><br>
</center>           
        <br>
        <!-- <marquee><h3><b>Welcome to SmartFits Online Store</b></h3></marquee> -->
        <br>
       
        <div width=100%><center><strong><a href="/womens_clothing"style="color:black;"><h1 style="font: size 100px;">Men's clothing</h1></a> </strong></center>  <br><br>
   @foreach($images as $image)
   @if($image->category_id ==5  )
   
      <a href="/{{$image->id}}"><img src={{$image->image_path}} width=200 hight=100 />
</a> 
       @endif
        @endforeach
     
 
      
 
</x-layout>