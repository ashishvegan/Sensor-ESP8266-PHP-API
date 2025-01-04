<?php
    require("config.php");
    if(!empty($_GET))
    {
        $distance = $_GET['sensor'];
        $hashid = md5(microtime());
        $time = date('h:i a');
        $date = date('d-m-Y');
        $sql = mysqli_query($con,"INSERT INTO data(hashid,distance,time,date) VALUES('$hashid','$distance','$time','$date')");
        if($sql)
        {
            echo "Saved!";
        }
        else
        {
            echo "Error";
        }
    }
?>