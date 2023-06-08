<!DOCTYPE html>
<html lang="en">
<head>
	<title>Online Shopping</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<?php
  
  require_once "alinkcss.php";
    require_once "admin/connection.php";
 
 
 ?> 
</head>
<body>
<?php
  require_once "header.php"; 
 ?>

<header>
	<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/s1.jpg" class="d-block w-100 setimg" alt="Slider">
    </div>
    <div class="carousel-item">
      <img src="image/s2.jpg" class="d-block w-100 setimg" alt="Slider">
    </div>
    <div class="carousel-item">
      <img src="image/s3.jpg" class="d-block w-100 setimg" alt="Slider">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</header>

<div class="container-lg container-md container-sm">

	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 my-5">
  <div class="row">
    <div class="col-lg-7 col-md-7 col-sm-5 col-12 my-3 ">
    	<div class="main">
    		<div class="imgbox">
    	<img src="image/st.jpg">
    		

    </div>
    <div class="hovset  position-relative w-100 h-50">
    	<a href="stationary.php"><h3 class="text-white text-center p-4 ">Stationary</h3></a>

            </div>

    	</div>
    </div>
    <div class="col-lg-5 col-md-5 col-sm-5 col-12 my-3">
    	<div class="main">
    		<div class="imgbox">
    	<img src="image/bag.jpg">
    </div>
    <div class="hovset1  position-relative w-100 h-50">
    	<a href="bags.php"><h3 class="text-white text-center p-4 ">Bags</h3></a>

            </div>
    	</div>
    </div>
  </div>

  <div class="row">
       <div class="col-lg-5 col-md-5 col-sm-5 col-12 my-3">
    	<div class="main">
    		<div class="imgbox">
    	<img src="image/gift.jpg">
    </div>
    <div class="hovset1  position-relative w-100 h-50">
    	<a href="gift.php"><h3 class="text-white text-center p-4 ">Gift Articals</h3></a>

            </div>
    	</div>
    </div>
     <div class="col-lg-7 col-md-7 col-sm-5 col-12 my-3">
    	<div class="main">
    		<div class="imgbox">
    	<img src="image/doll.jpg">
    </div>
    <div class="hovset  position-relative w-100 h-50">
    	<h3 class="text-white text-center p-4">Doll</h3>

            </div>
    	</div>
    </div>

  </div>


</div>
</div>
</div>



<!--Category End-->

<div class="container-lg container-md container-sm">
   <div class="row">
   	 <div class="col-lg-12 col-md-12 col-md-12">

    <div class="row"> 
      <div class="col-lg-12 col-md-12 col-sm-12">

        <h1 class="text-center" >About Us</h1>
        <p class="p-5 " >Arts is a stationary shop that sells arts, gift articles, greeting cards, dolls, files, hand bags, wallets, and as well some of the beauty products, etc…. As there is a lot of demand for the greeting cards, gift articles, hand bags, etc…. and in this busy world where one can hardly find time to go out for shopping and with the emerging new technologies where one can purchase products by placing an order through online by sitting at home/office either by credit cards or by VPP or through Cheque or through DD.</p>
      </div>
    </div>  







   	 	<div class="row">

   	 		<?php

        $query = "select * from stationary";
        $sel = mysqli_query($can,$query);
        while ($row = mysqli_fetch_assoc($sel)) {
         

         ?>

        <div class="col-lg-3 col-md-3 col-sm-3 my-4">
          <a href="stbuy.php?id=<?php echo $row["id"]; ?>">
          <div class="pmain">
            <div class="pimgbox mx-auto">
              <img src="admin/image/<?php echo $row["pic"]; ?>">
            </div>
            <div class="content mx-auto">
              <p><b>stationary Item</b>   <?php echo $row["product"]; ?> </p>
              <p>RS.<?php echo $row["price"]; ?><span>/piece</span></p>
              <p><?php echo $row["description"]; ?></p>
            </div>
          </div>
          </a>
        </div>
       
        <?php
            }


         ?>

        <?php

        $query = "select * from bags";
        $sel = mysqli_query($can,$query);
        while ($row = mysqli_fetch_assoc($sel)) {
         

         ?>

        <div class="col-lg-3 col-md-3 col-sm-3 my-4">
          <a href="babuy.php?id=<?php echo $row["id"]; ?>">
          <div class="pmain">
            <div class="pimgbox mx-auto">
              <img src="admin/image/<?php echo $row["pic"]; ?>">
            </div>
            <div class="content mx-auto">
              <p><b>Wallets & Bags Item</b>   <?php echo $row["product"]; ?> </p>
              <p>RS.<?php echo $row["price"]; ?><span>/piece</span></p>
              <p><?php echo $row["description"]; ?></p>
            </div>
          </div>
        </a>
        </div>


        <?php
            }


         ?>








   	   </div>
   	 </div>
   </div>
</div>

<?php
 require_once "footer.php";
 ?>




<?php
  require_once "alinkjs.php";
 ?>
</body>
</html>