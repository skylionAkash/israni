<!-- start header -->
<?php include('include/header.php');?>
<style>
  .absoHeadImg, .absoFootImg, .enq-h3, .contact-btn, .footer-header{
     display: none;
  }
  body{
     background-image: url("images/bg/blogView-bg2.png");
     background-position: center center;
  } 
  @media screen and (max-width: 360px) {
     footer{
        margin-top: 0px;
     }
     
  }
</style>
<?php include('include/navbar.php');?>
<!-- Header Stared Here -->
<section class="main_heading_sec">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <div class="heading">
               <h1>CONTACT US</h1>
               <h3 class="second-header">Ut enim ad minim veniam, quis nostrud exercitation </h3>
            </div>
         </div>
      </div>
      <div class="row justify-content-center">
         <div class="col-lg-3 col-md-4 mb-3">
            <div class="address-details">
               <p><i class='fas fa-map-marker-alt'></i></p>
               <p>Above HDFC Bank, Vishrantwadi, Pune, 441028</p>
            </div>
         </div>
         <div class="col-lg-3 col-md-4 mb-3">
            <div class="address-details">
               <p><i class="fa fa-envelope"></i></p>
               <p>enquiry@israniphotography.com</p>
            </div>
         </div>
         <div class="col-lg-3 col-md-4 mb-3">
            <div class="address-details">
               <p><i class="fas fa-phone-alt"></i></p>
               <p>9867394999</p>
            </div>
         </div>
      </div>
      <div class="row justify-content-center">
         <div class="col-md-9">
            <div class="contact-us">
               <div class="get-in-touch">
                  <h2>GET IN TOUCH</h2>
                  <h4>Feel free to drop us a line below!</h4>
                  <div class="contact-form">
                     <div class="row justify-content-center">
                        <div class="col-md-7"><input type="text" class="form-control" placeholder="Your Name" aria-label="First name"></div>
                        <div class="col-md-7"><input type="email" class="form-control" placeholder="Email"></div>
                        <div class="col-md-7"><input type="text" class="form-control" placeholder="Mobile No" aria-label="Mobile Number"></div>
                        <div class="form-floating col-md-7">
                           <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                           <label for="floatingTextarea" class="message-box">Message...</label>
                        </div>
                        <div class="col-md-7 text-center"><button type="button" class="btn contact-submit btn-primary">SUBMIT</button></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- footer -->
   <?php include('include/footer-box.php');?>
</section>
<?php include('include/footer.php');?>