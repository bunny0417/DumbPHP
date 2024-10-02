<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
    <?php
    echo "<h1>Login Form </h1>";
    echo "<br>";
    echo "<br>";
    echo "<h3>Enter your UserName</h3>";
    echo '<form method="GET">
            <input type="text" name="username" required>
            <input type="submit" value="Submit">
          </form>';
          
    if (isset($_GET["username"]) && $_GET["username"] == "aayush") {
        echo"<br><br><br>";
        echo '<u>Your username is :</u>'.$_GET["username"];
        echo"<br><br>";
        echo"<h2>WELCOME ADMIN!!</h2>";}else{
            echo"<h1>GET OUT!!!!!!!!";
        }
    
    ?>
</center>
</body>
</html>
