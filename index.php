<?php 
    $title = 'Index';
    require_once 'include/header.php';
?>
    
    
    <h1 class="text-center">Registration for IT Conference</h1>

    <!-- Form Consists of
        1. First Name
        2. Last Name
        3. Date of Birth (use DatePicker)
        4. Speciality (Database Admin, Software Developer, Web Administrator)
        5. Email
        6. Contact
     -->
    <form method="post" action="success.php">

        <div class="mb-3">
            <label for="firstName" class="form-label">First Name</label>
            <input type="text" class="form-control" id="firstName" name="firstName">
        </div>

        <div class="mb-3">
            <label for="lastName" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="lastName" name="lastName">
        </div>

        <div class="mb-3">
            <label for="dob" class="form-label">Date of Birth</label>
            <input type="date" class="form-control" id="dob" name="dob">
        </div>

        <div class="mb-3">
            <label for="specialty" class="form-label">Specialty</label>
            <select class="form-select" aria-label="Default select example" id="specialty" name="specialty">
                <!-- <option selected>Select your Expertise</option> -->
                <option value="Database Admin">Database Admin</option>
                <option value="Software Developer">Software Developer</option>
                <option value="Web Administrator">Web Administrator</option>
                <option value="Other">Other</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>

        <div class="mb-3">
            <label for="contactNo" class="form-label">Contact</label>
            <input type="text" class="form-control" id="contactNo" aria-describedby="contactHelp" name="contactNo">
            <div id="contactHelp" class="form-text">We'll never share your contact number with anyone else.</div>
        </div>

        <div class="d-grid gap-2 mb-3">
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </div>
        
    </form>
    
<?php 
    require_once 'include/footer.php';
?>