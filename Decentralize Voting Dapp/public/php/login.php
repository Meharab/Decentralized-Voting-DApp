<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=number] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.container {
  padding: 16px;
}

</style>
</head>
<body>

<h2>Login Form</h2>

<form action="process.php" method="post">

  <div class="container" >
    <label for="uname"><b>Name</b></label>
    <input type="text" placeholder="Enter Your Name (NID)" name="name" required>

    <label for="uname"><b>NID</b></label>
    <input type="number" placeholder="Enter Your NID No." name="nid" required>
    
    <label for="uname"><b>Birth Certificate No.</b></label>
    <input type="number" placeholder="Enter Your Birth Certificate No." name="bid" required>
        
    <button type="submit">Login</button>

</form>

</body>
</html>