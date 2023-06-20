<?php
  $usernames = array("Paxton233", "ThatcherDavis92");
  $passwords = array("114514", "everydaygetsdarker");

  $password_hashes = array();
  foreach ($passwords as $password) {
    // Hash each password using the PASSWORD_DEFAULT algorithm
    $password_hashes[] = password_hash($password, PASSWORD_DEFAULT);
  }

  // Authenticate user against $usernames and $password_hashes
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $is_valid_user = false;

    for ($i = 0; $i < count($usernames); $i++) {
      // Check if the entered username and password hash match
      if ($username == $usernames[$i] && password_verify($password, $password_hashes[$i])) {
        // Authentication succeeded
        $is_valid_user = true;
        break;
      }
    }

    if ($is_valid_user) {
      // Redirect to the protected page
      header("Location: protected-page.php");
      exit();
    } else {
      // Authentication failed
      echo "<p>Invalid login credentials. Please try again.</p>";
    }
  }
?>