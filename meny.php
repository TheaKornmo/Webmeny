<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Document</title>

        <div class="nav">
        <a href="index.php" 
        <?php if ($current_tab==='home'){
           echo 'class="aktiv"';
        }?>>Hjem</a>
        <a href="connect.php"
        <?php if ($current_tab==='meny'){
           echo 'class="aktiv"';
        }?>>Meny</a>
        <a href="login.php"
        <?php if ($current_tab==='login'){
           echo 'class="aktiv"';
        }?>>Logg inn</a>
        <a href="handlekurv.php"
        <?php if ($current_tab==='handlekurv'){
           echo 'class="aktiv"';
        }?>>handlekurv</a>
        <a href="index.php"><img class= "logo" src="Bilder/Logo.png" alt="logo" height="200" width="auto" /></a>
        <?php if ($current_tab==='logo')
        ?>
      </div>
    </div>
    <hr/>




</head>
<body>   
</body>
</html>




