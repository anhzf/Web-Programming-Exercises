<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Session & Cookie Login Form</title>
</head>
<body>
  <h1>Test Login</h1>

  <form action="./proses.php" method="post">
    <label for="username">Username: </label>
    <input type="text" name="username" id="username">

    <label for="password">Password: </label>
    <input type="password" name="password" id="password">

    <input type="submit" name="submitLogin" id="submitLogin" value="Login">
  </form>
</body>
</html>
