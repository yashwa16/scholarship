<?php require "main/head.php" ?>
<?php require "main/nav.php" ?>

<div class="container">
   <div class="row">
<!-- ============sinup section===========     -->
     <div class="col-5 bg-dark shadow p-5 bg-white text-dark mt-5 me-4 p-4">
         <div class="border border-2 border-light p-4">
             <p class=" h3 mt-3">Sin Up</p> 
             <p>Please enter your valid information to register yourself!</p>
             <form action="/action_page.php">
                 <div class="mb-1 mt-1">
                      <label for="name" class="form-label">User Name:</label>
                      <input type="text" class="form-control" id="name" placeholder="Enter your User Name" name="name" required>
                  </div>
                  <div class="mb-1 mt-1">
                      <label for="email" class="form-label">Email:</label>
                      <input type="email" class="form-control" id="email" placeholder="Enter Your Valid Email" name="email" required>
                  </div>
                  <div class="mb-1">
                      <label for="pwd" class="form-label">Password:</label>
                      <input type="password" class="form-control" id="pwd" placeholder="Enter The Password" name="pswd" required>
                  </div>
                  <div class="mb-1">
                      <label for="pwd" class="form-label">Confirm Password:</label>
                      <input type="password" class="form-control" id="pwd" placeholder="Confirm Your Password" name="conf-pswd" required>
                  </div>
                  <div class="mb-1 mt-1">
                      <label for="country" class="form-label">Country:</label>
                      <input type="text" class="form-control" id="country" placeholder="Enter Your Country" name="Country" required>
                  </div>
                  <div class="form--check">
                      <input class="form-check-input" type="checkbox" id="agree"  name="agree" required>
                      <label class="" for="remember"> I agree with </label>
                      <a href="#" class="text--base">Privacy Policy</a>
                      <label class="" for="remember">   </label>
                      <a href="#" class="text--base">Terms of Service</a>
                  </div>
            
                  <button type="submit" class="btn btn-dark">Register</button>
             </form>
         </div>  
     </div>
<!-- =========pic section========== -->
     <div class="col-6 bg-dark mt-5 p-4 ms-5"style="background-image:url('pics/lib.jpg');background-size:cover;"></div>
  </div>
</div>

<?php require "main/footer.php" ?>