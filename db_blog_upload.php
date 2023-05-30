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

    $id = uniqid();
    $title = $_POST['title'];
    $body = $_POST['freeform'];
    $userName = $_POST['userName'];

    $sql = "INSERT into blog(id, title, body, username)
            VALUES(?, ?, ?, ?)";

    $result = $conn->execute_query($sql,[$id,$title,$body,$userName]);

    if($result === TRUE)
    {
        echo "Blog uploaded successfully";
    }
    else{
        echo "Error occured : ".$conn->error;
    }

?>
<br> <br>

</html>
