<?php require "main/head.php" ?>
<?php require "main/nav.php" ?>
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <img class="img-fluid" src="1.jpg" alt="New York">
        </div>
        <div class="col-lg-6">
            <form action="/submit_registration.php" method="POST">
                <div class="mb-3 mt-3">
                    <label for="fullName" class="form-label">Full Name:</label>
                    <input type="text" class="form-control" id="fullName" placeholder="Enter your full name"
                        name="fullName" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone Number:</label>
                    <input type="tel" class="form-control" id="phone" placeholder="Enter phone number" name="phone"
                        required>
                </div>
                <div class="mb-3">
                    <label for="dob" class="form-label">Date of Birth:</label>
                    <input type="date" class="form-control" id="dob" name="dob" required>
                </div>
                <div class="mb-3">
                    <label for="university" class="form-label">University:</label>
                    <input type="text" class="form-control" id="university" placeholder="Enter your university"
                        name="university" required>
                </div>
                <div class="mb-3">
                    <label for="gpa" class="form-label">Current GPA:</label>
                    <input type="number" class="form-control" id="gpa" placeholder="Enter your current GPA" name="gpa"
                        step="0.01" required>
                </div>
                <div class="mb-3">
                    <label for="essay" class="form-label">Personal Essay:</label>
                    <textarea class="form-control" id="essay"
                        placeholder="Write a personal essay explaining why you deserve this scholarship" name="essay"
                        rows="5" required></textarea>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="termsCheck" required>
                    <label class="form-check-label" for="termsCheck">I agree to the <a href="#">terms and
                            conditions</a>.</label>
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>
</div>

<?php require "main/footer.php" ?>