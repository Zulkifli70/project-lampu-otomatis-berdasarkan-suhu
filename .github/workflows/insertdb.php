
<?php

include("koneksidb.php");
   
// If values send by NodeMCU are not empty then insert into MySQL database table

  if(!empty($_POST['sendval']) && !empty($_POST['sendval2']) )
    {
        $val = $_POST['sendval'];
        $val2 = $_POST['sendval2'];


// Update your tablename here
            $sql = "INSERT INTO pak_moko (status_lampu,suhu) VALUES ('".$val."','".$val2."')"; 
 


        if ($conn->query($sql) === TRUE) {
            echo "Values inserted in MySQL database table.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }


// Close MySQL connection
$conn->close();



?>
