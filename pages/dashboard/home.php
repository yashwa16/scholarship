<?php
require "../../database/db.php";
session_start();

if (isset($_SESSION['email'])) {
    $email = $_SESSION ['email'];
    ?>

<?php require "../main/head.php"; ?>
<?php require "../main/nav.php"; ?>
<style>
    #carouselExampleDark {
        height: 100px;
    }
</style>
<h2> dashboard</h2>
<div class="row">
      <?php
      
if (isset ($_GET['gpa'])) { 
//===============filteration through gpa ================//
   if(isset($_GET['gpa'])){
     $gpa = $_GET['gpa'];
     $sql = "Select * from users where gpa =$gpa";
     }
   else{
        $sql = "Select * from users";
    }
//===============filteration through search bar ================//
}else 
    {if (isset ($_GET['search'])) {
     $search = $_GET['search'];
     $sql = "Select * from users where fullname ='$search' ";
    }elseif(isset($_GET['search'])) {
      $sql = "Select * from users where fullname like '%[a-z]' || '%[a-z]%' || '[a-z]%'";
    }else {
      $sql = "Select * from users";
    }
}
//////////////////////////////////////////
$result = $con->query($sql);
if ($result->num_rows > 0) {

while ($row = $result->fetch_assoc()) {
    echo "
<div class='col-lg-4 justify-content-center'>
<div class='form-container p-4 mt-2 bg-warning '>      
<p>Your Full Name is: " . $row['fullname'] . "</p>       
<p>Your Email is: " . $row['email'] . "</p>     
<p>Your Phone is: " . $row['phone'] . "</p>    
<p>Your Date of Birth is: " . $row['birthday'] . "</p>          
<p>Your Universtity is: " . $row['university'] . "</p>
<p>Your GPA is: " . $row['gpa'] . "</p>
</div>
</div>           
";
}}
?>       
</div>
</div>

<?php require "../main/footer.php"; ?>
<?php
} else {
    echo "secure page";
}
?>