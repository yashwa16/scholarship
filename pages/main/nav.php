
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="pages/home.php"> <img class="img-fluid" src="pages/image/20024.jpg"style="height:50px; width=40px;" ></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="pages/home.php">Home</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="pages/register.php">About Us</a>

        </li>
        <li class="nav-item">
          <a class="nav-link" href="pages/home.php">Contact</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="pages/login.php">Login</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="pages/register.php">Register</a>
        </li>
      </ul>
                  <div class="dropdown">
  <button type="button" class="btn btn-primary dropdown-toggle me-2" data-bs-toggle="dropdown">
    Filter GPA
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="pages/dashboard/home.php?gpa=3">3</a></li>
    <li><a class="dropdown-item" href="pages/dashboard/home.php?gpa=4">4</a></li>
    <li><a class="dropdown-item" href="pages/dashboard/home.php?gpa=5">5</a></li>
  </ul>
</div>
     
      <form class="d-flex" action="pages/dashboard/home.php" method="GET">
        <button type="button" class="btn btn-light me-2"><a href="pages/action/logout.php" style="text-decoration:none;color:Black">logout</a></button>
        <input class="form-control me-2" type="text"  name="search" placeholder="Search">
        <button class="btn btn-light" type="submit" >Search</button>
      </form>
    </div>
  </div>
</nav>
