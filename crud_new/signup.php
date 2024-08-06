<?php
include_once 'header.php';
?>

<style>
#signup{
    width: 50%;
    margin: auto;
    text-align:center;
}
</style>

<section class="signup-form" id="signup">
    <h2>Sign up</h2>
    <form action="includes/signup.inc.php" method="post">
        <div class="form-floating mb-3 mt-3">
            <input type="text" name="name" placeholder="Full name" autocomplete="Full name">
        </div>
        <div class="form-floating mb-3 mt-3">
            <input type="text" name="email" placeholder="Email" autocomplete="Email">
        </div>
        <div class="form-floating mb-3 mt-3">
            <input type="text" name="usersid" placeholder="Username">
        </div>
        <div class="form-floating mb-3 mt-3">
            <input type="password" name="pwd" placeholder="Password">
        </div>
        <div class="form-floating mb-3 mt-3">
            <input type="password" name="pwdrepead" placeholder="Repeat password">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Sign up</button>
    </form>
</section>



<?php
include_once 'footer.php';
?>