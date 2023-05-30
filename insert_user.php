<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="HTML, CSS" />
    <meta name="description" content="..." />
  </head>
<body>
<?php
    include 'config.php';

    $userN = $_POST['username'];
    $email = $_POST['email'];
    $passW = $_POST['password'];


    $sql = "INSERT into user(username, email, password)
                VALUES(?, ?, ?)";

    $result = $conn->execute_query($sql,[$userN,$email,$passW]);

    if($result === TRUE)
    {
        echo "User registered successfully";
    }
    else{
        echo "Error occured : ".$conn->error;
    }

    $conn->close();
?>
<p>
      <input
        type="button"
        name="log_in"
        value="log in"
        onclick='document.location.href="login.html"'
      />
</p>      
</body>
</html>