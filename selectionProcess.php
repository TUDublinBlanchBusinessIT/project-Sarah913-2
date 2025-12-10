<?php
session_start();
include('dbcon.php');

if (!isset($_SESSION['lastAccessed'])) {
    $_SESSION['lastAccessed']=time();
}

if ($_SESSION['lastAccessed']<(time()-600)) {
    session_destroy();
    echo "Session timed out - too long since it has been used";
    exit;

}

else {
    $_SESSION['lastAccessed']=time();

}
if (!isset($_SESSION['username'])) {
    header('Location: login.php'); // redirect if not logged in
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selctions</title>
</head>
<body>
    <h1>Welcome back <?php echo $_SESSION['username']; ?></h1>
    <p>What fish did you catch?</p>
    <form action="savedetails.php" method="POST">
    <SELECT name ="fish">
        <OPTION value="Salmon">Salmon</OPTION>
        <OPTION value="Mackeral">Mackeral</OPTION>
        <OPTION value="Sardine">Sardine</OPTION>
        <OPTION value="Cod">Cod</OPTION>
        <OPTION value="Tuna">Tuna</OPTION>
        <OPTION value="Prawn">Prawn</OPTION>
</SELECT>
<br><br>

<label>What size fish did you catch?:</label><BR>
<input class="form-control" id="length" type="range" min="1" max="15" value="50" name="fishlength">
<br><br>

<label>Did you keep the fish?</label><br>
<input type="radio" id="kept" name="kept_threw" value="Kept">
<label for="kept">Kept</label><br>
<input type="radio" id="released" name="kept_threw" value="Released">
<label for="released">Released</label><br><br>


<input type="submit" value="Save your catch"><br><br>
</form>



    
</body>
</html>