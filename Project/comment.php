<?php
include 'conn.php';
include 'func.php';

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title>Comment</title>

</head>
<body>
<iframe class="vid" width="70%" height="400" src="https://www.youtube.com/embed/iUDhoVTUXVc"></iframe>
    <?php
    echo" <form method='POST' action='".setcomment($con)."'>
  Student ID:<br>
  <input type='text' name='uid'><br>
  Comment:<br>
  <textarea name='message'></textarea><br br>
         <button type='submit' name='csubmit'>Comment</button>
</form> ";
    getcom($conn);
?>
</body>
</html>