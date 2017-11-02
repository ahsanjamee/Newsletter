<?php

function setcom($conn){
    if(isset($_POST['csubmit'])){
        $em = $_POST['email'];
       
        
        $sql = "insert into emails(Emails) values('$em')";
        $res = $conn->query($sql);
        
    }
}