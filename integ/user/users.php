<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page Page</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../public/dashboard.css">
</head>

<body>
    <div class="sidebar">
        <h2>Dashboard</h2>
        <ul>
          <img src="" alt="">
          

        </ul>
    </div>

    <div class="content">
        <header>
            <h1>Welcome to the Dashboard!</h1>
        </header>
        <main>

        <?php
session_start();

// Check if the user is logged in
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];



    echo "Welcome, $username!";


    if($username){

    }
} else {
    // Redirect to the login page if not logged in
    header("Location: login.php");
    exit();
}

?>

        </main>
    </div>


 
 
   


</body>

</html>

</body>
</html>













































