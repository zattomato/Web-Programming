
<?php
session_start();
include("db_conn.php");

    if(isset($_POST['houseNum'])&&isset($_POST['stats'])&&isset($_FILES['evidence'])&&isset($_POST['quarantineStarts'])&&isset($_POST['quarantineEnds']))
    {
        $username = $_SESSION['username'];
        $houseNum = $_POST['houseNum'];
        $stats = $_POST['stats'];
        $evidence = $_FILES['evidence']['name'];
        $quarantineStarts= date('Y-m-d', strtotime($_POST['quarantineStarts']));
        $quarantineEnds = date('Y-m-d', strtotime($_POST['quarantineEnds']));
        
        $sql = "INSERT INTO quarantine(username,houseNum,stats,evidence,quarantineStarts,quarantineEnds) VALUES ('$username','$houseNum', '$stats', '$evidence', '$quarantineStarts', '$quarantineEnds')";
        $run = mysqli_query($conn, $sql);

 
        if($run){
            echo "<script> alert('Report added successfully');
            window.location.href='../user/covid-19 status.php'</script> ";
            
        }
        else{
            echo "Error: ".mysqli_error($conn);
        }  
    }
    else{
        header("Location: ../user/covid-19 report.php");
        
    }
?>
