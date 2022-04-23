<!DOCTYPE html>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" href="images/favicon.png">
      <title>Welcome to FlatShop</title>
      <link href="css/bootstrap.css" rel="stylesheet">
      <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,500italic,100italic,100' rel='stylesheet' type='text/css'>
      <link href="css/font-awesome.min.css" rel="stylesheet">
      <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen"/>
      <link href="css/sequence-looptheme.css" rel="stylesheet" media="all"/>
      <link href="css/style.css" rel="stylesheet">
      <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script><![endif]-->
   </head>
   <body id="home">
      <div class="wrapper">
         <?php 
         include("menu.php")
          ?>
     

         <!--                                               Slide -->
         <div class="clearfix"></div>
         <div class="hom-slider">
            <div class="container">
               <div id="sequence">
                  <div class="sequence-prev"><i class="fa fa-angle-left"></i></div>
                  <div class="sequence-next"><i class="fa fa-angle-right"></i></div>
                  <ul class="sequence-canvas">
                     <li class="animate-in">
                        <div class="flat-caption caption1 formLeft delay300 text-center"><span class="suphead">Paris show 2020</span></div>
                        <div class="flat-caption caption2 formLeft delay400 text-center">
                           <h1>Nhạc cụ mới của 2020</h1>
                        </div>
                        <div class="flat-caption caption3 formLeft delay500 text-center">
                           <p>Trống là một nhạc cụ quan trọng trong bộ gõ, nó quyết định khá nhiều về nhịp nhạc, làm cho nhạc sinh động hơn cũng như giữ nhịp cho nhạc. <br>Nhiều bài nhạc chỉ cần trống thôi cũng đủ tạo nên bản nhạc..</p>
                        </div>
                        <div class="flat-button caption4 formLeft delay600 text-center"><a class="more" href="#">More Details</a></div>
                        <div class="flat-image formBottom delay200" data-duration="5" data-bottom="true"><img src="images/slider1.png" alt=""></div>
                     </li>
                     <li>
                        <div class="flat-caption caption2 formLeft delay400">
                           <h1>Nhạc cụ mới của 2020</h1>
                        </div>
                        <div class="flat-caption caption3 formLeft delay500">
                           <p>Đàn nhị là nhạc cụ thuộc bộ dây có cung vĩ, do đàn có 2 dây nên gọi là đàn nhị (tiếng Trung: 二胡; bính âm: èrhú; Hán Việt: nhị hồ), <br>có xuất xứ từ Ấn Độ và vùng Trung Á.</p>
                        </div>
                        <div class="flat-button caption5 formLeft delay600"><a class="more" href="#">More Details</a></div>
                        <div class="flat-image formBottom delay200" data-bottom="true"><img src="images/slider2.png" alt=""></div>
                     </li>
                     <li>
                        <div class="flat-caption caption2 formLeft delay400 text-center">
                           <h1>Nhạc cụ mới của 2020</h1>
                        </div>
                        <div class="flat-caption caption3 formLeft delay500 text-center">
                           <p>
                          Piano là một nhạc cụ âm thanh, có dây được phát minh ở Ý bởi  <br>Bartolomeo Cristofori vào khoảng năm 1700</p>
                        </div>
                        <div class="flat-button caption4 formLeft delay600 text-center"><a class="more" href="#">More Details</a></div>
                        <div class="flat-image formBottom delay200" data-bottom="true"><img src="images/slider3.png" alt=""></div>
                     </li>
                  </ul>
               </div>
            </div>
            
         </div>

<!--                                                 endslide           -->

         <div class="clearfix"></div>
         <div class="container_fullwidth">
            <div class="container">
               <div class="hot-products">
                  <h3 class="title"><strong>Hot</strong> Products</h3>
                  <div class="control"><a id="prev_hot" class="prev" href="#">&lt;</a><a id="next_hot" class="next" href="#">&gt;</a></div>
                  <ul id="hot">
                  	<li>
                        <div class="row">
                     	<?php  
                      $sale = 0;
                     	$conn = mysqli_connect("localhost","root","","demo");
                     	$sql = "SELECT * FROM hanghoa where iddanhmuc = 1 LIMIT 4";
                     	$ketqua = mysqli_query($conn,$sql);
                                while ($row = mysqli_fetch_assoc($ketqua)){
                               $number = $row['dongia'];
                                $number1 = $row['sale'];
                                $dongia = number_format($number,3,'.','.');
                                $sale = ($number * ((100-$number1)/100));
                                $tongsale = number_format($sale,3,'.','.');
                       echo'
                       	    <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="offer">- %'.$row['sale'].'</div>
                                 	<div class="thumbnail">
                          <a href="thongtinsp.php?id='.$row['id'].'"><img style="width:150px;height:220px" src="'.$row['img'].'"></a>
                              		</div>
                                 <div class="productname">'.$row['tenhang'].'</div>
                                 <strike class="price" style="color:black;font-size:15px;font-weight:10;">'.$dongia.'</strike>
                                 <h4 class="price">'.$tongsale.' VND</h4>                                
                                 <div class="button_group">
                          <a href="thongtinsp.php?id='.$row['id'].'" class="button add-cart" type="button">Mua ngay!</a>
                         <button class="button compare" type="button"><i class="fa fa-exchange"></i></button>
                         <button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button>
                                 </div>
                              </div>
                            </div> ';
                   		   }
                         ?>
                       </div>
                     </li>
                     <li>
                        <div class="row">
                        	<?php
                        	$sql = "SELECT * FROM hanghoa where iddanhmuc = 2 LIMIT 4";
                     	$ketqua = mysqli_query($conn,$sql);
                                while ($row = mysqli_fetch_assoc($ketqua)){
                                 $number = $row['dongia'];
                                 $number1 = $row['sale'];
                                 $dongia = number_format($number,3,'.','.');
                                 $sale = ($number * ((100-$number1)/100));
                                 $tongsale = number_format($sale,3,'.','.');
                          echo' <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="offer">- %'.$row['sale'].'</div>
                                 	<div class="thumbnail">
                          <a href="thongtinsp.php?id='.$row['id'].'"><img style="width:150px;height:220px" src="'.$row['img'].'"></a>
                              		</div>
                                 <div class="productname">'.$row['tenhang'].'</div>
                                 <strike class="price" style="color:black;font-size:15px;font-weight:10;">'.$dongia.'</strike>
                                 <h4 class="price">'.$tongsale.' VND</h4>
                                 <div class="button_group">
                         <a href="thongtinsp.php?id='.$row['id'].'" class="button add-cart" type="button">Mua ngay!</a>
                         <button class="button compare" type="button"><i class="fa fa-exchange"></i></button>
                         <button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button>
                                 </div>
                              </div>
                            </div>';
                        }
                            ?>
                        </div>
                     </li>
                  </ul>
               </div>



               
               <div class="clearfix"></div>
               <div class="featured-products">
                  <h3 class="title"><strong>Featured </strong> Products</h3>
                  <div class="control"><a id="prev_featured" class="prev" href="#">&lt;</a><a id="next_featured" class="next" href="#">&gt;</a></div>
                  <ul id="featured">
                     <li>
                       <div class="row">
                        	<?php
                        	$sql = "SELECT * FROM hanghoa where iddanhmuc = 3 LIMIT 4";
                     	$ketqua = mysqli_query($conn,$sql);
                                while ($row = mysqli_fetch_assoc($ketqua)){
                                 $number = $row['dongia'];
                                 $number1 = $row['sale'];
                                 $dongia = number_format($number,3,'.','.');
                                 $sale = ($number * ((100-$number1)/100));
                                 $tongsale = number_format($sale,3,'.','.');
                          echo' <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="offer">- %'.$row['sale'].'</div>
                                 	<div class="thumbnail">
                          <a href="thongtinsp.php?id='.$row['id'].'"><img style="width:150px;height:220px" src="'.$row['img'].'"></a>
                              		</div>
                                 <div class="productname">'.$row['tenhang'].'</div>
                                   <strike class="price" style="color:black;font-size:15px;font-weight:10;">'.$dongia.'</strike>
                                 <h4 class="price">'.$tongsale.' VND</h4>
                                 <div class="button_group">
                         <a href="thongtinsp.php?id='.$row['id'].'" class="button add-cart" type="button">Mua ngay!</a>
                         <button class="button compare" type="button"><i class="fa fa-exchange"></i></button>
                         <button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button>
                                 </div>
                              </div>
                            </div>';
                        }
                            ?>
                        </div>
                     </li>
                     <li>
                        <div class="row">
                        	<?php
                        	$sql = "SELECT * FROM hanghoa where iddanhmuc = 4 LIMIT 4";
                     	$ketqua = mysqli_query($conn,$sql);
                                while ($row = mysqli_fetch_assoc($ketqua)){
                                 $number = $row['dongia'];
                                 $number1 = $row['sale'];
                                 $dongia = number_format($number,3,'.','.');
                                 $sale = ($number * ((100-$number1)/100));
                                 $tongsale = number_format($sale,3,'.','.');
                          echo' <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="offer">- %'.$row['sale'].'</div>
                                 	<div class="thumbnail">
                          <a href="thongtinsp.php?id='.$row['id'].'"><img style="width:150px;height:220px" src="'.$row['img'].'"></a>
                              		</div>
                                 <div class="productname">'.$row['tenhang'].'</div>
                                 <strike class="price" style="color:black;font-size:15px;font-weight:10;">'.$dongia.'</strike>
                                 <h4 class="price">'.$tongsale.' VND</h4>
                                 <div class="button_group">
                         <a href="thongtinsp.php?id='.$row['id'].'" class="button add-cart" type="button">Mua ngay!</a>
                         <button class="button compare" type="button"><i class="fa fa-exchange"></i></button>
                         <button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button>
                                 </div>
                              </div>
                            </div>';
                        }
                            ?>
                        </div>
                     </li>
                  </ul>
               </div>
             
            </div>
         </div>
      </div>
      <?php include("footer.php") ?>
      <!-- Bootstrap core JavaScript==================================================-->
	  <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
	  <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	  <script type="text/javascript" src="js/bootstrap.min.js"></script>
	  <script type="text/javascript" src="js/jquery.sequence-min.js"></script>
	  <script type="text/javascript" src="js/jquery.carouFredSel-6.2.1-packed.js"></script>
	  <script defer src="js/jquery.flexslider.js"></script>
	  <script type="text/javascript" src="js/script.min.js" ></script>
   </body>
</html>