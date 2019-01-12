
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style >
		@font-face {
      font-family: atlantis the lost city;
      src: url('Atlantis the lost City.ttf') format("truetypefile");
    }
    @font-face {
        font-family: bakery;
        src: url('bakery.otf') format("opentypefont");
    }
    @font-face {
      font-family: intriquescript_personaluse;
      src: url('IntriqueScript_PersonalUse.ttf');
    }
    @font-face {
      font-family: Chasing Embers;
      src: url('Chasing Embers.ttf') format("truetypefile");
    }
		*{
			margin: 0;
			padding: 0;
		}
		body{
		margin: 0px;
        padding: 0px;
        background: linear-gradient(to right, rgba(0, 90, 167, 0.8), rgba(255, 253, 228, 0.8)),url(f.jpg);
        background-size: cover;
        display: block;
        justify-content: center;
        align-items: center;
        position: absolute;
        width: 100%;
        height: 100%;
        background-repeat: no-repeat;
		}
		.loginn{
		width: 430px;
        height: 530px;
        background: #000;
        color: #fff;
        top: 50%;
        left: 50%;
        position: absolute;
        transform: translate(-50%,-50%);
        box-sizing: border-box;
        border: 12px double #fff;
        border-radius: 12px;
        opacity: 0.8;
        padding: -2px;
        margin-top: 25px;
		}
		h1{
		font-family: atlantis the lost city;
        font-size: 70px;
        color: white;
        text-align: center;
        margin-bottom: 35px;
        text-shadow: 3px 3px 9px  #cc0000;
        margin-top: 25px;
		}
		h1:hover{
		color: #e6faff ;
        text-shadow:  6px 6px 12px  #003d4d;
		}
		p{
		font-family: candara;
        font-size: 17px;
        letter-spacing: 2px;
     	}
      	p a{
        color:  #66ffcc;
        text-decoration: none;
      	}
		
       input[type="text"]
      {
        width: 50%;
        padding: 10px;
        margin-top: 30px;
        border: 1px solid #ccc;
        padding-left: 5px;
        font-size: 22px;
        transition: 0.3s;
        opacity: 1.0;
        background-color: #b3d9ff;
        font-family: GeoSlab703 MdCn BT;
        text-align: center;
        color: black;
        font-weight: bold;
      }
      input[type="text"]:hover{
        opacity: 1.0;
        background-color: white;
        transition: 0.5s;
      }
      input[type="password"]{
         width: 50%;
         padding: 10px;
         margin-top: 30px;
         border: 1px solid #ccc;
         padding-left: 5px;
         margin-left: 15px;
         font-size: 22px;
         transition: 0.3s;
         opacity: 1.0;
         background-color: #b3d9ff;
         font-family: GeoSlab703 MdCn BT;
         text-align: center;
         color: black;
         font-weight: bold;
       }
       input[type="password"]:hover{
         opacity: 1.0;
         background-color: white;
         transition: 0.5s;
       }
       input[type="submit"]{
        width: 54%;
        background-color:#1f3447;
        color: #fff;
        border: 2px solid #1f3447;
        padding: 12px;
        padding-top: 5px;
        font-size: 22px;
        font-family: candara;
        font-weight: bold;
        cursor: pointer;
        border-radius: 6px;
        margin-bottom: 15px;
        margin-left: 3px;
        margin-top: 27px;
        transition: all 0.5s;
      }
      input[type="submit"]:hover{
        background-color: white;
        color: #1f3447;
        margin-left: 10px;
      }
      h3{
      	width: 27%;
      	background-color: #f2f2f2;
      	color: #000;
      	text-align: center;
      	border: 2px solid #f2f2f2;	
      	font-family: atlantis the lost city;
      	font-size: 27px;
      	border-radius: 2px;
      	margin-left: 490px;
      	margin-top: 20px;
      }
	</style>
</head>
<body>
	<?php  
		if(isset($_GET["error"])){
			if($_GET["error"] == "wrong"){
				echo '<h3>NIS atau Password Salah!</h3>';
			}
		}

	?>

	<form action="login.php" method="post">
		<div class="loginn" style="text-align: center;">
			<h1>Login Here</h1>

			<p>Don't have an account? <a href=""> Sign Up</a></p>

			<p>
			<input type="text" name="username" style="margin-left: 10px;" placeholder="Enter NIS" required="">
			</p>

			<p>
			<input type="password" name="password" placeholder="Enter Password" required="">
			</p>

			<p>
			<input type="submit" name="submit" value="SIGN IN">
			</p>
	</form>
</body>
</html>