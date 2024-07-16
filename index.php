

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="" method="POST">
    <input type="text" name="un" placeholder="username">
    <input type="password" name="pw" placeholder="password">
    <input type="submit" value="Login">
  </form>

  <a href="register.php">Register</a>

</body>
<?php



if(isset($_POST['un'] , $_POST['pw'] )){


  if($_POST['un']=="a" && $_POST['pw'] == "123") {
    $un = $_POST['un'];
    $pw = $_POST['pw'];
    header("Location: home.php?un=$un&pw=$pw");

  }
 else{
  header("Location: handle.php");

 }
}



?>
  
  
</body>
</html>