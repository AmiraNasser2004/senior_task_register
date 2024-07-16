<?php




  $un = htmlspecialchars(urldecode($_GET['un']));
  $pw = htmlspecialchars(urldecode($_GET['pw']));
  echo "<h1>profile page</h1>";
  echo "<p>username: $un</p>";
  echo "<p>password: $pw</p>";

?>
<a href="index.php">logout</a>
