<?php
include 'conn.php';
include 'func.php';
include 'connection.php';
include 'function.php';

?>
<!DOCTYPE html>
<html>
<head>
  <title>SportsNews24x7</title>
  <meta charset="utf-8"/>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  
  <link rel="stylesheet" type="text/css" href="main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
</head>
<body>

<header class="container">
  <div class="row">
    <h1 class="col-sm-3">SportsNews<span id="hb">24x7</span></h1>
    <nav class="col-sm-9 text-right">
      <p><a href="index.html">Home</a></p>
      <p><a href="Cricket.html">Cricket</a></p>
      <p><a href="Football.html">Football</a></p>
      <p><a href="Tennis.html">Tennis</a></p>
        <p class="sub"><a href="sub.html" >SUBSCRIBE</a></p>
    </nav>
  </div>
    </header>
    
    <section class="news">
    <h1>Subscribe to our Newsletter</h1>
        <div class="ent">
            <?php
            echo"<form method='post' action='".setcom($conn)."'>
          <input type='email' name='email' id='email' placeholder='Enter your email..'>
        <a href='new.html'><button type='submit' name='csubmit' class='butt'>Subscribe</button></a>
                </form>";
?>
            
        </div>
        </section>
<section class="comsec">
        <h1>Leave a Comment!</h1>
    <?php
    echo" <form method='POST' action='".setcomment($con)."'>
  Name:<br>
  <input type='text' name='uid'><br><br>
  Comment:<br>
  <textarea name='message'></textarea><br><br>
         <button type='submit' name='submit'>Comment</button><br>
</form> ";
    getcom($con);
?>
        
      
    </section>
    <footer class="foot">
    
     <p>Copyright &copy; Ahsan-Uz-Zaman</p>
    </footer>
