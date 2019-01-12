<!DOCTYPE html>
<html>
<head>
	<title>tambah Data</title>
	<style type="">

	*{
		margin: 0;
		padding: 0;
	}
	body{
		width: auto;
      background-image: linear-gradient(to right, rgba(0, 121, 145, 0.87), rgba(120, 255, 214, 1));
      padding: 15px;
	}
	.go{
      font-size: 22px;
      font-family: candara;
      border-collapse: collapse;
      width: 40%;
	}
	form{
		
      margin-left: 35px;
      margin-top: 25px;
      padding: 8px;
      padding-left: 10px;
      padding-top: 30px;
      border-radius: 5px;
      background-color:  #8cb3d9;
      cursor: pointer;
      font-family: GeoSlab703 MdCn BT;
      font-size: 23px;
      transition: all 0.5s;
      display: inline-block;
      height: 180px;
	}
	input[type="submit"]{
		  	width: 155px;
		  	height: 30px;
		  	background-color: #1f3447;
		  	border: 2px solid #1f3447;
		  	color: white;
		  	margin-top: 15px;
		  	font-size: 15px;
		  	font-family: candara;
		  	font-weight: bold;
			border-radius: 6px;
			margin-right: 13px;
			margin-left: 11px;
  			cursor: pointer;
		}
		input[type="submit"]:hover{
		  background-color: white;
		  color: #1f3447;
	}
	</style>
</head>
<body>
	<h3> <a href="logout.php"> LOGOUT</a> </h3>
	<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
		<table class="go">
			<tr>
				<td>NIS</td>
				<td><input type="text" name="nis" /></td>
			</tr>

			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" size="40" /></td>
			</tr>

			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" /></td>
			</tr>

			<tr>
				<td>Password </td>
				<td><input type="text" name="password" /></td>
			</tr>

			<tr>
				<td>
				<input type="submit" name="submit" value="SIGN IN">
				</td>
			</tr>

		</table>
	</form>
</body>
</html>

<!-- PHP Script Begin -->
<?php  
	require_once "./connect.php";

	//jika field nis dan nama diisi lalu di submit
	if(isset($_POST['nis']) && isset($_POST['nama'])){
		$nis = $_POST['nis'];
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$password = $_POST['password'];


		//Tambah data baru ke tabel
		$sql = "INSERT INTO tb_siswa VALUES ('" .$nis. "', '" .$nama. "', '" .$alamat. "', '" .$password. "' )";
		$result = mysqli_query($connect, $sql);
		if ($result){
			echo 'Data Berhasil di tambahkan';
		}
		else{
			echo 'Gagal Menambahkan Data <br />';
			echo mysqli_error($connect);
		}
	}

	echo '<hr />';
	//menambahkan file record.php untuk menampilkan hasil
	require_once "./record.php";
?>
<!-- PHP Script End -->