<?php
// Connect to the MySQL database
$conn = mysqli_connect('localhost', 'root' ,'', 'commentform');

// Get the variables out of index.php using $_POST
$naam = $_POST['naam'];
$email = $_POST['email'];
$text = $_POST['text'];
$datum = $_POST['datum'];

// The SQL command to save the comment in the database
$sql = "INSERT INTO comments (naam, reactie, email, datum) VALUES ('$naam', '$text', '$email', '$datum')";

mysqli_query($conn, $sql); // Execute the command
?>
<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href="style.css" rel="stylesheet">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> </title>
</head>
<body>
    <div class="centerdiv">
        <h2 class="fw-bold">Success! You will be redirected soon.</h2>
        <h2 class="fw-bold">Have you waited longer than 5 seconds? Click <a href="index.php">here</a> </h2>
    </div>
<script>
    function redirect() {
        window.location.replace("http://localhost/php/bootstrap/");
    }
    setInterval(redirect, 1500);
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>