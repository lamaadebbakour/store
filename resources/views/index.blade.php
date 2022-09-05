<x-layout>

            <br><br><br>
<center>        <h1 style="color:rgba(0, 136, 169, 1);font-size:60px">Welcome to your online store</h1><br>
</center>           
        <br>
        <!-- <marquee><h3><b>Welcome to SmartFits Online Store</b></h3></marquee> -->
        <br>
       
        <div width=100%><center><strong><a href="/womens_clothing"style="color:black;"><h1 style="font: size 100px;">Women's clothing</h1></a> </strong></center>  <br><br>
   @foreach($images as $image)
   @if($image->category_id ==1  )
   
       <img src={{$image->image_path}} width=200 hight=100 />

       @endif
        @endforeach
<br><br><br><br><br><br><br>
<div width=100%><center><strong><a href="/mens clothing"style="color:black;"><h1 style="font: size 100px;">Men's clothing</h1></a> </strong></center>  <br><br>
   @foreach($images as $image)
   @if( $image->category_id == 5 )
   
       <img src={{$image->image_path}} width=200 hight=100 />

       @endif
        @endforeach       
 
        <!-- <div class="slider">
            <ul>
                <li>
                    <img src="image/1.jpg" alt="">
                </li>
                <li>
                    <img src="image/2.jpg" alt="">
                </li>
                <li>
                    <img src="image/3.jpg" alt="">
                </li>
                <li>
                    <img src="image/4.jpg" alt="">
                </li>
                <li>
                    <img src="image/5.jpg" alt="">
                </li>
            </ul>
        </div> -->

        <!-- <img src="image/3.jpg" width=500 height=400> <a href="Products.html"></img>
        <img src="image/7.jpg" width=500 height=400> <a href="Products.html"></img>
        <img src="image/8.jpg" width=500 height=400> <a href="Products.html"></img>
        <img src="image/9.jpg" width=500 height=400> <a href="Products.html"></img>
        <img src="image/10.jpg" width=500 height=400> <a href="Products.html"></img> -->



    
 
</x-layout>