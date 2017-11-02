<?php

function setcomment($con){
    if(isset($_POST['submit'])){
        $uid = $_POST['uid'];
        $message = $_POST['message'];
        
        $sql = "insert into commnets(uid,message) values('$uid', '$message')";
        $res = $con->query($sql);
        
    }
}
function getcom($con){
   
        
        $sql = "SELECT * FROM commnets";
        $res = $con->query($sql);
        while($row= $res->fetch_assoc()){
    echo "<div class='cbox'>";
        echo $row['uid']."<br>";
        echo $row['message']."<br><br>";
            echo "</div>";
        }
        
    }