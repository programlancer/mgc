<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Cp1255">

<link rel="stylesheet" type="text/css" href="./css/mgc.css">

<title>Mgc</title>
</head>
<body>
<header>
<img alt="mgc" src="img/header.jpg">
</header>
<p>Body</p>
<?php
echo "Hello!"."<br>";

$servername = "localhost";
$username = "mgc";
$password = "mgc";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully"."<br>";

//var_dump($conn);


$sql = "SELECT sign,model,serial FROM aircrafts";
//var_dump($sql);

$result = $conn->query($sql);

//var_dump($result);

if ($result) {
	;
	//if ($result->num_rows > 0) {
//    // output data of each row
//    while($row = $result->fetch_assoc()) {
//        echo "Sign: ".$row["sign"]." Model: ".$row["model"]." Serial: ".$row["serial"]. "<br>";
//    }
//} else {
//    echo "0 results";
//}
}
else echo "No results";

$conn->close();
?>

<footer>
<p>footer</p>
</footer>
</body>
</html>
