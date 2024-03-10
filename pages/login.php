
<?php require "main/head.php" ?>
<?php require "main/nav.php"?>
<!-- =====pic section====== -->
<div class="container">
  <div class="row">
   <div class="col-lg-7 bg-dark p-4 mt-4 text-center text-white" style="background-image:url('pics/p.jpg');background-size:cover;">
<p class="h2 text-center position-relative top-50 ">WELCOME BACK</p>
<p class="text-center lh-base position-relative top-50 fw-medium">Delighted to have you here as part of our esteemed community. Dive into a world of opportunities and endless possibilities as we embark on this journey together. Your presence enriches our platform, and we're eager to support you in your pursuit of academic excellence.</p>
   </div>
<!-- ========login section====== -->
   <div class="col-lg-5 p-3">
    
    <div class="container shadow p-4 bg-dark text-white m-5 p-5">
      <div class="border border-2 border-light p-4">
     <p class=" h3 mt-3">Log In</p> 
     <p>Please enter your information to Login</p>
    <form action="/action_page.php">
     <div class="mb-3 mt-3">
       <label for="email" class="form-label">Email:</label>
       <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
     </div>
     <div class="mb-3">
       <label for="pwd" class="form-label">Password:</label>
       <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
     </div>
     <div class="form-check mb-3">
       <label class="form-check-label">
       <input class="form-check-input" type="checkbox" name="remember"> Remember me
       </label>
     </div>
     <button type="submit" class="btn btn-light">Submit</button>
    </form>
    </div>  
   </div>
   </div>
  </div>
</div>
<?php require "main/footer.php"?>