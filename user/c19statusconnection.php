<?php 
    $c19status = $_POST['c19status'];
    $myEvidence = $_POST['myEvidence'];
    $myQuarantineStarts = $_POST['myQuarantineStarts'];
    $myQuarantineEnds = $_POST['myQuarantineEnds'];
 
    //database connection
    $conn = new mysqli('localhost','root','','c19quarantine');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);

    }else{
        $stmt=$conn->prepare("insert into quarantine_user(c19status, myEvidence, myQuarantineStarts, myQuarantineEnds) 
        values(?,?,?,?)");
        $stmt->bind_param("sssss",$c19status,$myEvidence,$myQuarantineStarts,$myQuarantineEnds);
        $stmt->execute();
        echo "Succesfully Registered Quarantine Status";
        $stmt->close();
        $conn->close();
    }
?>