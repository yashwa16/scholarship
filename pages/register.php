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
        <div class="col-lg-12">
              
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            
            <div class="form-container p-4" style="background-color: pink; ">
                <form action="/submit_registration.php" method="POST">
                    <div class="form-group"> <h2 class="text-white bg-danger p-2 mb-4 text-center"style=" border-radius: 10px;" >Registration</h2>
                        <label for="fullName">Full Name:</label>
                        <input type="text" class="form-control bg-warning-subtle" id="fullName" placeholder="Enter your full name"
                            name="fullName" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control bg-warning-subtle" id="email" placeholder="Enter email" name="email"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number:</label>
                        <input type="tel" class="form-control bg-warning-subtle" id="phone" placeholder="Enter phone number" name="phone"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="dob">Date of Birth:</label>
                        <input type="date" class="form-control bg-warning-subtle" id="dob" name="dob" required>
                    </div>
                    <div class="form-group">
                        <label for="university">University:</label>
                        <input type="text" class="form-control bg-warning-subtle" id="university" placeholder="Enter your university"
                            name="university" required>
                    </div>
                    <div class="form-group">
                        <label for="gpa">Current GPA:</label>
                        <input type="number" class="form-control bg-warning-subtle" id="gpa" placeholder="Enter your current GPA"
                            name="gpa" step="0.01" required>
                    </div>
                    <div class="form-group">
                        <label for="essay">Personal Essay:</label>
                        <textarea class="form-control bg-warning-subtle" id="essay"
                            placeholder="Write a personal essay explaining why you deserve this scholarship"
                            name="essay" rows="5" required></textarea>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" class="form-check-input bg-warning-subtle" id="termsCheck" required>
                        <label class="form-check-label " for="termsCheck ">I agree to the <a href="#">terms and
                                conditions</a>.</label>
                    </div>
                    <button type="submit" class="btn btn-danger">Register</button>
                </form>
            </div>
        </div>
        <div class="col-lg-6 " style="background-color: #dee2e6; border-radius:10px;">
            <img src="image/2.jpg" class="rounded" alt="Registration Image">
        </div>
    </div>
    <div class="col-lg-12 text-center mt-4">
        <button type="button" class="btn btn-danger">Back to Home</button>
    </div>
</div>

<?php require "main/footer.php" ?>