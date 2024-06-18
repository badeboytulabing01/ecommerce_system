<?php
require_once("mainClass.php");
$ecomerce->add_user();
?>

<!DOCTYPE html>
<html lang="en">
<?php require_once "parts/head.php"; ?>

<body>
<!-- navigation -->
<?php require_once "parts/home_controller/home_nav.php"; ?>
<!-- search bar -->  
<?php require_once "parts/home_controller/home_search.php"; ?>
  
<div class="container mt-2" id="signup">
    <div class="row">
        <div class="col-md-6">
            <h1>Create your Pawfect</h1>
        </div>
        <div class="col-md-6" id="link_login">
            <label>Already member?</label> <a href="login.php">Login</a> <label>Here</label>
        </div>
    </div>

    <div class="row" id="signup_background">
        <div class="col-md-6">
            <img src="img/registration.jpg" class="img-fluid">
        </div>
        <div class="col-md-6">
            <form name="frmReg" method="post" id="user_log" class="mt-5" action="<?php htmlspecialchars("PHP_SELF"); ?>" onsubmit="return validateForm()">
                <div class="row mt-2">
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" name="lasname" id="lasname" class="form-control" placeholder="Last Name">
                            <label for="floatingInput">Last Name*</label>
                            <span id="lasnameError" class="error">Please fill out this field.</span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" name="firstname" id="firstname" class="form-control" placeholder="First Name">
                            <label for="floatingInput">First Name*</label>
                            <span id="firstnameError" class="error">Please fill out this field.</span>
                        </div>
                    </div>

                    <div class="col-md-6 mt-2">
                        <div class="form-floating">
                            <input type="text" name="userLog" id="userLog" class="form-control" placeholder="Username">
                            <label for="floatingInput">Username*</label>
                            <span id="userLogError" class="error">Please fill out this field.</span>
                        </div>
                    </div>

                    <div class="col-md-6 mt-2">
                        <div class="form-floating">
                            <input type="text" name="contact" id="contact" class="form-control" placeholder="Contact Number">
                            <label for="floatingInput">Contact Number*</label>
                            <span id="contactError" class="error">Please fill out this field.</span>
                        </div>
                    </div>

                    <div class="col-md-12 mt-2">
                        <div class="form-floating">
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                            <label for="floatingInput">Email*</label>
                            <span id="emailError" class="error">Please fill out this field.</span>
                        </div>
                    </div>

                    <div class="col-md-12 mt-2">
                        <div class="form-floating">
                            <input type="text" name="address" id="address" class="form-control" placeholder="Address">
                            <label for="floatingInput">Address*</label>
                            <span id="addressError" class="error">Please fill out this field.</span>
                        </div>
                    </div>

                    <div class="col-md-6 mt-2">
                        <div class="form-floating">
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                            <label for="floatingInput">Password*</label>
                            <span id="passwordError" class="error">Please fill out this field.</span>
                        </div>
                    </div>

                    <div class="col-md-6 mt-2">
                        <div class="form-floating">
                            <input type="password" name="conpass" id="conpass" class="form-control" placeholder="Confirm Password">
                            <label for="floatingInput">Confirm Password*</label>
                            <span id="conpassError" class="error">Please fill out this field.</span>
                        </div>
                    </div>

                    <div class="col-md-12 mt-2">
                        <button type="submit" name="add" id="add" class="btn btn-outline-default">SIGN UP</button>
                    </div>
                </div>
            </form>
            <br>
        </div>
    </div>
</div>

<?php require_once "parts/footer.php"; ?>

<!-- end of js -->
<script>
function validateForm() {
    const fields = [
        { id: 'lasname', errorId: 'lasnameError' },
        { id: 'firstname', errorId: 'firstnameError' },
        { id: 'userLog', errorId: 'userLogError' },
        { id: 'contact', errorId: 'contactError' },
        { id: 'email', errorId: 'emailError' },
        { id: 'address', errorId: 'addressError' },
        { id: 'password', errorId: 'passwordError' },
        { id: 'conpass', errorId: 'conpassError' }
    ];

    let isValid = true;

    fields.forEach(field => {
        const input = document.getElementById(field.id);
        const error = document.getElementById(field.errorId);
        if (input.value.trim() === "") {
            input.classList.add('invalid');
            error.style.display = "block";
            isValid = false;
        } else {
            input.classList.remove('invalid');
            error.style.display = "none";
        }
    });

    return isValid;
}
</script>

<style>
.error {
    color: red;
    display: none;
    margin-top: 5px;
    font-size: 0.9em;
}

.invalid {
    border-color: red;
    outline: none;
}
</style>
</body>
</html>
