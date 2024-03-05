
<?php require "main/head.php"?>
<?php require "main/nav.php"?>

<style>
    .form-container  {
        border: 2px solid red;
        border-radius: 10px; 
    }
    
</style>

<div class="container mt-4 ">
    <div class="row">
<div class="col-lg-6" style="background-color: #dee2e6; border-radius:10px;">
  <img class="img-fluid" src="1.jpg" alt="New York">

</div>
<div class="col-lg-6">
 <div class="form-container p-4" style="background-color: pink; ">
<form action="/action_pages.php" method="POST">
  <div class="mb-3 mt-3"><h2 class="text-white bg-danger p-2 mb-4 text-center" style=" border-radius: 10px;">Login</h2>
    <label for="email" class="form-label">Email:</label>
    <input type="email" class="form-control bg-warning-subtle" id="email" placeholder="Enter email" name="email">
  </div>
  <div class="mb-3">
    <label for="pwd" class="form-label">Password:</label>
    <input type="password" class="form-control bg-warning-subtle" id="pwd" placeholder="Enter password" name="pswd">
  </div>
  <div class="form-check mb-3">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox" name="remember"> Remember me
    </label>
  </div>
  <button type="submit" class="btn btn-danger" >Submit</button>
</form>
</div>
</div> </div>
 <div class="col-lg-12 text-center mt-4">
        <button type="button" class="btn btn-danger" >Back to Home</button>
    </div>
</div>

<?php require "main/footer.php"?>