<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

a:link, a:visited {
  background-color: white;
  color: black;
  border: 2px solid green;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

button {
  background-color: #4CAF50;
  color: black;
  padding: 14px 20px;
  margin: 8px 0;
  border: 10px;
  cursor: pointer;
  width: 100%;
  text-decoration: none;
}

a:hover, a:active {
  background-color: green;
  color: white;
}

</style>
</head>
<body>
<?php 
@session_start(); 
if(isset($_SESSION['voter'])){
	echo '<button><a href="logout.php">Logout</a></button>';
	echo '<h1>Import your Wallet with this Private key : <br>'.$_SESSION['voter'].' </h1>';
	echo '<br><button><a href="http://localhost:3000/">Next</a></button>';
}else{
	header('Location: login.php');
}
?>
</body>
</html>