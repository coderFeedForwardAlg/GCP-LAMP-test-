<?php
    include_once 'includes/dbh.inc.php';


    echo 'here is the total evectivaty  ';
    echo ("<br>");
    $sql = "SELECT * FROM users;"; // this uses a veiw 
    $res = mysqli_query($conn,$sql);
    $resCheck = mysqli_num_rows($res);
    if($resCheck > 0){
        while($row = mysqli_fetch_assoc($res)){
            echo $row['id'];
            
            echo ("<br>");
            
        }
    }



?>


