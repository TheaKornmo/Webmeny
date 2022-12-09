<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

<?php
$current_tab = 'meny';
include('meny.php');

$servername = "localhost";
$username = "root";
$password = "";
$dataBaseNavn = "webmeny";


$conn = new mysqli($servername, $username, $password, $dataBaseNavn);



if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT matrett, alergener, beskrivelse, bilde FROM matretter";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

        
        $alergener = $row["alergener"];
        $beskrivelse = $row["beskrivelse"];
        $matrett = $row['matrett'];
        $bilde = $row['bilde'];

        echo $matrett. " 
        " . $beskrivelse. "
        " . $alergener. "
        " . $bilde. "<br>";

    }
}  else {
    echo "0 results";
}


$conn->close();
?>






</form>


</body>
</html>