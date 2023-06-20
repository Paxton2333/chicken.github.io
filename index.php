<!DOCTYPE html>
<html>
<head>
  <title>Login Form</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style type="text/css">
    form {
      display: flex;
      flex-direction: column;
      align-items: center;
      margin-top: 50px;
    }
    input[type="text"], input[type="password"] {
      margin: 10px;
      padding: 10px;
      border-radius: 5px;
      border: none;
      box-shadow: 0 3px 5px rgba(0, 0, 0, 0.1);
      width: 300px;
      font-size: 16px;
    }
    input[type="submit"] {
      margin: 20px;
      padding: 10px 20px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: all 0.3s ease;
      box-shadow: 0 3px 5px rgba(0, 0, 0, 0.1);
    }
    input[type="submit"]:hover {
      background-color: #0062cc;
    }
  </style>
</head>
<body>
  <form method="post">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    <input type="submit" value="Sign In">
  </form>
  <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Authenticate user against a database or other storage
      // system. If authentication succeeds, redirect to the
      // protected page. If authentication fails, display an
      // error message.
      // TODO: add authentication logic here
    }
  ?>
</body>
</html>