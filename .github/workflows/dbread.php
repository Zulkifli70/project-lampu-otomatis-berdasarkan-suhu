<?php
include("koneksidb.php");

$sql = "SELECT no,status_lampu,suhu FROM pak_moko";  // Update your tablename here

$result = $conn>query($sql);

echo "<center>";



if ($result->num_rows > 0) {


    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<strong> Id:</strong> " . $row["no"]. " &nbsp <strong>val:</strong> " . $row["suhu"]. " &nbsp <strong>val2:</strong> " . $row["status_lampu"].;
    


}
} else {
    echo "0 results";
}

echo "</center>";

$conn->close();



?>
