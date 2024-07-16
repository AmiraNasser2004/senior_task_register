<?php
if(isset($_POST['username'] , $_POST['password'] ,$_POST['email']  )){

$username = $_POST["username"] ;
$password = $_POST["password"] ;
$email= $_POST["email"] ;
$flag = 0;
// $all_errors = [];
// var_dump($all_errors);



if(isset($username)){
  if(empty ($username)){
      echo "Please enter a username <br>";
  }else{
    $flag++;
  }
  if(strlen($username) < 3) {
   echo "error msg you must enter username more than 2 char <br>";
} else {
    $flag++;
}
}



if(isset($password)){
  if(empty ($password)){
      echo "Please enter a password <br>";
  }else{
    $flag++;
  }
  if(strlen($password) < 8) {
   echo "error msg you must enter password more than 7 char <br>";
} else {
    $flag++;
}
}


if(isset($email)){
  if(empty ($email)){
      echo "Please enter a email <br>";
  }else{
    $flag++;
  }
  if(strlen($email) < 10) {
   echo "error msg you must enter password more than 9 char <br>";
} else {
    $flag++;
}
if(preg_match( '%@yahoo%' ,$email )){
 
}elseif ( preg_match( '%@gmail%' ,$email )){

}elseif ( preg_match( '%@hotmail%' ,$email )){

}else {
echo "email must contain @yahoo or @gmail or @hotmail <br>";
};
if(preg_match( '/.com$/' ,$email )){

}else {
  echo "email must end with .com<br>";

}


// if($flag == 6) {
//   echo "$username and pass is $password";
// }

}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action=""  method="POST">
  <input type="text" name="username" placeholder="Username" >
  <input type="email" name="email" placeholder="email" >
  <input type="password" name="password" placeholder="password" >
  <button type="submit" >submit</button>
</form>

</body>
</html>