<?php 
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
  $url = "https://";   
else  
  $url = "http://";   
  
$url.= $_SERVER['HTTP_HOST'];   
$url.= $_SERVER['REQUEST_URI'];    
 
if ($url == "http://localhost/php/bootstrap/index.php") {
  $home = "active";
}else{
  $comment = "active";
}
/* A bit messy but whatever. This checks if you are currently on the home page
or on the comment page and if you are on the home page the nav bar sets home to active and the other way around.
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">Comment form with bootstrap</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link <?php echo $home?>" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php echo $comment?>" href="comments.php">Comments</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
</body>
</html>