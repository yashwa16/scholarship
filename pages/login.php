
<?php require "main/head.php" ?>
<?php require "main/nav.php"?>

<div class="container">
    <div class="row">
<div class="col-lg-6">
  <img class="img-fluid" src="1.jpg" alt="New York">

</div>
<div class="col-lg-6">

<form action="/action_page.php">
  <div class="mb-3 mt-3">
    <label for="email" class="form-label">Email:</label>
    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
  </div>
  <div class="mb-3">
    <label for="pwd" class="form-label">Password:</label>
    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
  </div>
  <div class="form-check mb-3">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox" name="remember"> Remember me
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>
<?php require "main/footer.php"?>