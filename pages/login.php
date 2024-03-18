
<?php require "main/head.php"?>
<?php require "main/nav.php"?>

<style>
    .form-container  {
        border: 2px solid brown;
        border-radius: 10px; 
    }
    
</style>

<div class="container mt-4 ">
    <div class="row">
<div class="col-lg-8">
   <img src="pages/image/4.jpg" class="img-fluid"style= "border-radius:10px; " alt="login Image">

</div>
<div class="col-lg-4">
 <div class="form-container p-4 mt-4 "  style="background-color: #6A1B9A;">
<form action="pages/action/login.php" method="POST">
  <div class="mb-3 mt-3"><h2 class="text-white bg- p-2 mb-4 text-center" style=" border-radius: 10px;">Login</h2>
    <label for="email" class="form-label text-white">Email:</label>
    <input type="email" class="form-control " id="email" placeholder="Enter email" name="email">
  </div>
  <div class="mb-3">
    <label for="pwd" class="form-label text-white">Password:</label>
    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
  </div>
  <div class="form-check mb-3">
    <label class="form-check-label text-white">
      <input class="form-check-input text-white"type="checkbox" name="remember"> Remember me
    </label>
  </div>
  <button type="submit" class="btn btn-light     text-dark" >Submit</button>
</form>
</div>
</div> </div>
</div>

<?php require "main/footer.php"?>