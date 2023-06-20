<?php
  session_start();

  // Check if the user is logged in
  if (!isset($_SESSION["username"])) {
    // Redirect to the login form
    header("Location: index.php");
    exit();
  }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Protected Page</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <h1>Welcome to the protected page!</h1>
  <p>You have successfully logged in.</p>
  <p><a href="logout.php">Log out</a></p>
</body>
</html>