<html>

	<head>

		<style>

			table {

				border-collapse: collapse;

				width: 100%;

				color: #1f5380;

				font-family: monospace;

				font-size: 20px;

				text-align: left;

			} 

			th {

				background-color: #1f5380;

				color: white;

			}

			tr:nth-child(even) {background-color: #f2f2f2}

		</style>

	</head>

	<body>

		<table>

			<tr>

				<th>No</th> 

				<th>Lampu</th>

				<th>Temperature C</th>

			</tr>	

			<?php

				include ('koneksi_sql.php');

				$table = mysqli_query($conn, "SELECT * FROM pakmoko"); //nodemcu_ldr_table = Youre_table_name

				while($row = mysqli_fetch_array($table))

				{

			?>

			<tr>

				<td><?php echo $row["no"]; ?></td>

				<td><?php echo $row["lampu"]; ?></td>

				<td><?php echo $row["suhu"]; ?></td>

			</tr>

			<?php

				}

			?>

		</table>

	</body>

</html>