<?php
include 'connect.php';

// Check if 'updateid' is set in the URL
if (isset($_GET['updateid'])) {
    $id = $_GET['updateid'];
} else {
    // Handle the case where 'updateid' is not set, e.g., show an error message or redirect
    die("Error: 'updateid' parameter missing from the URL.");
}

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "UPDATE `crud` SET name='$name', email='$email', mobile='$mobile', password='$password' WHERE id='$id'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        // Uncomment the following line to redirect after successful update
        header('Location: display.php');
    } else {
        die(mysqli_error($con));
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>crud operation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container my-5">
  <form method="post" action="">
    <div class="mb-3 mt-3">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" autocomplete="off">
    </div>
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" autocomplete="off">
    </div>
    <div class="mb-3 mt-3">
      <label for="mobile">Mobile:</label>
      <input type="text" class="form-control" id="mobile" placeholder="Enter mobile" name="mobile" autocomplete="off">
    </div>
  
    <div class="mb-3 mt-3">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" autocomplete="off">
    </div>

    <button type="submit" class="btn btn-primary" name="submit">Update</button>
  </form>
</div>

</body>
</html>