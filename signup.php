<?php

 ?>

<html>
  <head>

  </head>

  <body>
    <form action="signup.php" method="get">
      <input type="text" name="firstname" placeholder="Type your first name" required/><br>
      <input type="text" name="insertion" placeholder="Insertion" /<br>
      <input type="text" name="lastname" placeholder="Type your last name" required/<br>
      <input type="email" name="email" placeholder="Type your email" required/<br>
      <input type="text" name="username" placeholder="Type your username" required/<br>
      <input type="password" name="password" placeholder="Type your password" required/<br>
      <input type="password" name="repeatpassword" placeholder="Type your password again" required/<br>
      <input type="submit" value="signup" /><br>
      <a href="index.php">Login</a>
    </form>
  </body>

</html>
