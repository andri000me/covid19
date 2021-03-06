<?php include "config.php"; ?>

<?php
if (!isset($_SESSION['username'])) {
    header('location:signup.php');
}
?>

<?php include "header.php"; ?>
<div class="container-fluid text-center my-5">
    <div class="row">
        <!-- <div class="col-md-6">
            <img class="img-fluid" id="" src="./images/svg/contact.svg" alt="Contact me">
        </div> -->

        <div class="col-lg-6">
            <img class="img-fluid" id="" src="./images/contribution.jpg" alt="Contact me">
        </div>
        
        <div class="col-lg-6">
            <form class="needs-validation" novalidate method="post" action="payment.php">
                <div class="form-group">
                    <div class="col-md-12 mb-3">
                        <label for="validationCustom01">Full Name</label>
                        <input type="text" name="name" class="form-control" id="validationCustom01" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="validationCustom01">Mobile</label>
                        <input type="text" name="mobile" class="form-control" id="validationCustom01" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="amount">Amount</label>
                        <input type="number" class="form-control" name="amount" id="amount" aria-describedby="emailHelp" required>
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="form-group green-border-focus">
                            <label for="exampleFormControlTextarea5">Project Details</label>
                            <textarea class="form-control" id="exampleFormControlTextarea5" name="reason" rows="3" required></textarea>
                        </div>
                    </div>
                    <!-- </div>
                <div class="form-group"> -->
                    <div class="form-check custom-control custom-checkbox form-check">
                        <input class="form-check-input custom-control-input" type="checkbox" id="invalidCheck" required>
                        <label class="custom-control-label" for="invalidCheck">
                            Agree to terms and conditions
                        </label>
                    </div>
                    <div class="invalid-feedback">
                        You must agree before submitting.
                    </div>
                </div>
                <button class="btn btn-success" name="save" type="submit">Pay Now</button>
            </form>
        </div>
    </div>
</div>
<!-- </div> -->

<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>


</div>

<?php include './footer.php'; ?>