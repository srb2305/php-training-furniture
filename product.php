   
   <?php 
      include('header.php');
      include('menu.php'); 
      include('logo-section.php'); 
      include('db.php');

      $qry = "select * from products where status = 1";
      $result = mysqli_query($con, $qry);
      $rowsCount = mysqli_num_rows($result);
      if($rowsCount < 1){
        echo "No products avilable..."; 
        die();
      }
   ?>
      <div class="contactus">
   <div class="container-fluid">
            <div class="row">
               <div class="col-md-8 offset-md-2">
                  <div class="title">
                     <h2>Our Product</h2>
                    
                  </div>
               </div>
            </div>
          </div>
</div>
<div class="ourproduct">
  <div class="container">
     <div class="row product_style_3" ">
      <?php while($data = mysqli_fetch_assoc($result)) { ?>
      <!-- product -->
      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
        <div class="full product">
            <div class="product_img">
              <div class="center"> <img src="product_images/<?php echo $data['image']; ?>" alt="#"/>
                <div class="overlay_hover"> <a class="add-bt" href="product_detail.php?id=<?php echo $data['id']; ?>">+ Add to cart</a> </div>
              </div>
            </div>
          <div class="product_detail text_align_center">
            <p class="product_price">&#8377;<?php echo $data['msp']; ?> <span class="old_price"> &#8377;<?php echo $data['mrp']; ?></span></p>
            <p class="product_descr"><?php echo substr($data['title'],0,45); ?></p>
          </div>
        </div>
      </div>
      <!-- end product -->
      <?php } ?>
    </div>
  </div>
</div>
<?php include('footer.php'); ?>