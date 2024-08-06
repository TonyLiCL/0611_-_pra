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
    <h2>Log In</h2>
    <form action="includes/login.inc.php" method="post">
        <div class="form-floating mb-3 mt-3">
            <input type="text" name="name" placeholder="Username/Email">
        </div>
        <div class="form-floating mb-3 mt-3">
            <input type="password" name="pwd" placeholder="Password">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Log in</button>
    </form>
</section>



<?php
include_once 'footer.php';
?>