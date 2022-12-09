<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,300,0,0">
    <title>Document</title>
    <?php
    $current_tab = 'login';
    include('meny.php');
    ?>
</head>
<body>
    

<div class="login-card-container">
    <div class="login-card">
        <div class="login-card-header">
            <h1>Logg på</h1>
                <div>Ansatt logg inn</div>
                </div> <!--login-card-header-->
                <form class="login-card-form" method="post">
                    <br>
                    <label for="fulltnavn">Fullt navn</label>
                    <input type="text" name="fulltnavn">
                    <br>
                    <label for="passord">Passord</label>
                    <input type="password" name="passord" id="passord">
                    <div class="check">
                    </div>
                    <br>
                    <button type="submit" name="submit">Logg på</button>
                </form>
                </div> 
        </div> 
        </form>


        <?php
if(isset($_POST['submit'])){
    $brukernavn = $_POST['fulltnavn'];
    $passord = $_POST['passord'];

    $dbc = mysqli_connect('localhost', 'root', '', 'webmeny')
        or die('Error connecting to MySQL server');

    $query = "SELECT fulltnavn, passord from brukere where fulltnavn='$brukernavn' and passord='$passord'";

    $result = mysqli_query($dbc, $query)
        or die('Error querying database.');

    mysqli_close($dbc);

    // var_dump($result);

    if($result->num_rows > 0){
        header('location: ansatt.php');
        var_dump('bra');
    }else{
        header('location: ikkeAnsatt.php');
        var_dump('ikke bra');
    }
}
?> 
</body>
</html>