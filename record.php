<?php  
	require_once "./connect.php";

	$sql = 'SELECT * FROM tb_siswa';
	$result = mysqli_query($connect, $sql);
	if($result){
		if(mysqli_num_rows($result)){
			?>

			<!DOCTYPE html>
			<html>
			<head>
				<title>record</title>
				<style type="">
	.yoo{
      
      text-align: center;
      font-size: 22px;
      font-family: candara;
      border-collapse: collapse;
      width: 40%;
      margin-top: 20px;
      margin-left: 35px;
    }
  tr:nth-child(even){
    background-color: #8cb3d9;
    }
    tr{
      color: #fff;
    }
    tr:hover{
      background-color: #bf80ff;
    }
   			</style>
			</head>
			<body>
				<table border= 1 cellspacing=1 cellpadding=5 class="yoo">
				<tr>
					<td>#</td>
					<td width="100">NIS</td>
					<td width="150">Nama</td>
					<td>Alamat</td>
					<td>Password</td>
				</tr>

				<?php
					$i =1;
					while ($row = mysqli_fetch_row($result)) {
				?>		
					<tr>
						<td>
							<?php echo $i;  ?>
						</td>

						<td>
							<?php echo $row[0];  ?>
						</td>

						<td>
							<?php echo $row[1]; ?>
						</td>

						<td>
							<?php echo $row[2]; ?>
						</td>

						<td>
							<?php echo $row[3]; ?>
						</td>
					</tr>

					<?php  
						$i++;
					}
					?>
			</table>
		
			</body>
			</html>
			
		<?php  
	}
	else{
		echo 'Data Tidak ditemukan';
	}
	mysqli_close($connect);
	}
?>