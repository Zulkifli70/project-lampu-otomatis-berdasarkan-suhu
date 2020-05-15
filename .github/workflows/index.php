<?php 

        include('koneksidb.php');
        $sql = "SELECT * FROM pak_moko"; //You don't need a ; like you do in SQL
        $result = mysqli_query($conn, "SELECT * FROM pak_moko");
        $lamp = mysqli_query($conn, "SELECT status_lampu FROM pak_moko ORDER BY no DESC LIMIT 1");
        $temp = mysqli_query($conn, "SELECT suhu FROM pak_moko ORDER BY no DESC LIMIT 1");
        $datatemp = mysqli_fetch_array($temp);
        $datalamp = mysqli_fetch_array($lamp);
    ?>
<html>
<head>
    <title>MONITORING WEEBS</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
 <div class="container">
 <center> &nbsp<h3> Monitoring Lampu Terhadap Status Suhu Pada Ruangan </h3></center> 
 <div class= "posisi">
 <div class="box"> 
    <div class="icon"> <i class="fa fa-lightbulb-o" aria-hidden="true">
    </i></div> 
         <div class="content"><h3> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCek Kondisi Lampu </h3>
         <?php  
            if ($datatemp['suhu'] == '1'){ echo "Menyala";} else { echo "Mati";}  ?>
         </div>
            </div>
            <div class="box">
    <div class="icon"><i class="fa fa-thermometer-quarter" aria-hidden="true">
    </i> </div>
 <div class="content"> <h3> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Cek Suhu Ruangan </h3>
 <?php echo "<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$datalamp['status_lampu']."°C</p>" ?>
  </div>
 </div></div>
 </div>
</body>
</html>