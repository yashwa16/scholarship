<?php require "main/head.php" ?>
<?php require "main/nav.php" ?>

<style>
    .form-container {
        border: 2px solid red; 
        border-radius: 10px; 
        
    }
   
</style>

<div class="container mt-4 ">
    <div class="row">
        <div class="col-lg-7">
              
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="form-container p-4 mt-2" style="background-color: #6A1B9A; ">
                <form action="/submit_registration.php" method="POST">
                    <div class="form-group text-white"> <h2 class="text-white  p-2 mb-4 text-center"style=" border-radius: 10px; background-color: #6A1B9A;" >Registration</h2>
                        <label for="fullName">Full Name:</label>
                        <input type="text" class="form-control " id="fullName" placeholder="Enter your full name"
                            name="fullName" required>
                    </div>
                    <div class="form-group text-white">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control " id="email" placeholder="Enter email" name="email"
                            required>
                    </div>
                    <div class="form-group text-white">
                        <label for="phone">Phone Number:</label>
                        <input type="tel" class="form-control" id="phone" placeholder="Enter phone number" name="phone"
                            required>
                    </div>
                    <div class="form-group text-white">
                        <label for="dob">Date of Birth:</label>
                        <input type="date" class="form-control " id="dob" name="dob" required>
                    </div>
                    <div class="form-group text-white">
                        <label for="university">University:</label>
                        <input type="text" class="form-control" id="university" placeholder="Enter your university"
                            name="university" required>
                    </div>
                    <div class="form-group text-white">
                        <label for="gpa">Current GPA:</label>
                        <input type="number" class="form-control " id="gpa" placeholder="Enter your current GPA"
                            name="gpa" step="0.01" required>
                    </div>
                    <div class="form-group text-white">
                        <label for="essay">Personal Essay:</label>
                        <textarea class="form-control " id="essay"
                            placeholder="Write a personal essay explaining why you deserve this scholarship"
                            name="essay" rows="5" required></textarea>
                    </div>
                    <div class="form-group text-white">
                        <input type="checkbox" class="form-check-input " id="termsCheck" required>
                        <label class="form-check-label text-white" for="termsCheck ">I agree to the <a href="#">terms and
                                conditions</a>.</label>
                    </div>
                    <button type="submit" class="btn btn-light">Register</button>
                </form>
            </div>
        </div>
        <div class="col-lg-6 " style=" border-radius:10px;">
            <img src="pages/image/2.jpg" style= "border-radius:10px;"  class="img-fluid" alt="Registration Image">
        </div>
    </div>
    <div class="col-lg-12 text-center mt-4">
        <button type="button" class= "text-white btn  " style="background-color: #6A1B9A; border-radius:10px; " >Back to Home</button>
    </div>
</div>

<?php require "main/footer.php" ?>