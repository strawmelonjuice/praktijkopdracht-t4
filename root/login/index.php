<?php
// Pagina waarop ingelogd moet worden.
?>
<html lang="nl">
<head>
<title>Login pagina</title>
</head>

<body>
<form action="/login/logic.php" method="post">
      <label for="username">Username:
        <input name="username" id="username" type="text">
      </label>
      <label for="password">Password:
       <input name="password" id="password" type="password">
      </label>
    <input
        type="submit"
        value="Login">
</form>
</body>
</html>
