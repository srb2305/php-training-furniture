
<?php 
   include('header.php');
   include('menu.php'); 
   include('logo-section.php'); 
?>
      
<div class="contactus">
   <div class="container-fluid">
            <div class="row">
               <div class="col-md-8 offset-md-2">
                  <div class="title">
                     <h2>Mail</h2>
                    
                  </div>
               </div>
            </div>
          </div>
</div>




      <!-- map -->
   <div class="contact">
         <div class="container-fluid padddd">
           
            <div class="row">
               <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 padddd text-center" >
                <form class="main_form" action="api.php" method="POST"> 
                   <div class="row">
                      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                         <input class="form-control" placeholder="To" type="text" name="to">
                      </div>
                       <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                         <input class="form-control" placeholder="CC" type="text" name="cc">
                      </div>
                       <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                         <input class="form-control" placeholder="Subject" type="text" name="subject">
                      </div>
                       <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                         <textarea class="textarea" placeholder="Message" type="text" name="message"></textarea>
                      </div>
                       <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                         <button class="send" type="submit" name="send_mail">Send</button>
                      </div>
                   </div>
                </form>
               </div> 
            </div>
         </div>
      </div>
      <!-- end map --> 
    <?php include('footer.php'); ?>