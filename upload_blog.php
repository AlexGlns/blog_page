<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="HTML, CSS" />
    <meta name="description" content="..." />
  </head>
  <style>
    body {
      margin: 10px;
    }
    #title_id {
      width: 320px;
    }
  </style>
  <body bgcolor="ghostwhite">
    <?php 
        session_start();
        $data = $_SESSION['userData'];
    ?>
    <b>Upload Blog:</b>
    <hr />
    <form action="db_blog_upload.php" method="post">
      Title:<br />
      <input id="title_id" type="text" name="title" />
      <br />
      <br />
      Body:<br />
      <textarea id="freeform" name="freeform" rows="25" cols="80">
        Enter text here...
      </textarea>
      <input type="hidden" name="userName"  value="<?php echo htmlspecialchars($data);?>">
      <br /><br />
      <input type="submit" value="upload" />
    </form>
  </body>
</html>
