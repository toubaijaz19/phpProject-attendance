<?php 
    $title = 'Success';
    require_once 'include/header.php';
?>
    <h1 class="text-success text-center">You have been Registered.</h1>
    <!-- This prints out the value that were passed to the action page using method="get" -->
    <!-- <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><?php //echo $_GET['firstName'].' '.$_GET['lastName']; ?></h5>
                <h6 class="card-subtitle mb-2 text-muted"><?php //echo $_GET['specialty']; ?></h6>
                <p class="card-text">Date of Birth : <?php //echo $_GET['dob']; ?></p>
                <p class="card-text">Email : <?php //echo $_GET['email']; ?></p>
                <p class="card-text">Contact : <?php //echo $_GET['contactNo']; ?></p>
                
            </div>
        </div> -->

        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><?php echo $_POST['firstName'].' '.$_POST['lastName']; ?></h5>
                <h6 class="card-subtitle mb-2 text-muted"><?php echo $_POST['specialty']; ?></h6>
                <p class="card-text">Date of Birth : <?php echo $_POST['dob']; ?></p>
                <p class="card-text">Email : <?php echo $_POST['email']; ?></p>
                <p class="card-text">Contact : <?php echo $_POST['contactNo']; ?></p>
                
            </div>
        </div>

<?php 
    require_once 'include/footer.php';
?>