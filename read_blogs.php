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
    <h1 style="text-align: center"><strong>BLOGS</strong> </h1>
<?php
    include 'config.php';

    $sql = "SELECT * FROM blog";

    $result = $conn->query($sql);
    echo '<hr />';
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo '<br>';
            echo "<b>Title: </b>";
            echo $row["title"];
            echo '<br> <br>';
            echo "<b>Text: </b><br>";
            echo $row["body"];
            echo '<br> <br>';
            echo "<b>Written by: </b>";
            echo $row["username"];
            echo '<br> <hr />';
        }
    }else {
        echo "No blogs found";
    }
?>  
</body>
</html>