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

    session_start();
    $userEmail = $_POST['email'];
    $userPass = $_POST['password'];
    $loged_in = 0;
    $sql = "SELECT * FROM user WHERE email = '$userEmail'";

    $result = $conn->query($sql);
    if($result->num_rows > 0){
        $row = $result->fetch_assoc();
        $_SESSION['userData'] = $row["username"];
        if($row["password"] == $userPass){
            echo "User successfully loged in. \n";
            $loged_in = 1;
        }else{
            echo "Wrong email or password";
        }
    }else {
        echo "Wrong email or password";
    }

?>  
     <?php if ($loged_in == 1) { ?>
    <br> <br>
    <b>Select:</b>
    <hr />
      <input
        type="button"
        value="Read Blogs"
        onclick='document.location.href="read_blogs.php"'
      />
      &nbsp;
      <input
        type="button"
        value="Upload Blog"
        onclick='document.location.href="upload_blog.php"'
      />
      &nbsp;

      <input
        type="button"
        value="Edit Profile"
      />
      &nbsp;
      <input
        type="button"
        value="Rate Page"
      />

</body>
<?php } ?>
</html>