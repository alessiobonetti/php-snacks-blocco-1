<?php
$message = "";

  if(!empty($_GET["name"]) || !empty($_GET["email"]) || !empty($_GET["age"]) ) {
    $user_name = $_GET["name"];
    $user_mail = $_GET["email"];
    $user_age = $_GET["age"];

    if(strlen($user_name) > 3 && strpos($user_mail,".") !== false && strpos($user_mail,"@") !== false && is_numeric($user_age)){
      $message = "Hai accesso";
    } else {
      $message = "non hai accesso";
      die
    } else {
    $message = "Inserisci tutti i campi obbligatori";
    die
    }
  };
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Snack 2</title>
  </head>
  <body>

    <p> <?php echo($message) ?> </p>

  </body>
</html>
