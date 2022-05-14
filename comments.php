
<?php
require_once('navbar.php'); 
$conn = mysqli_connect('localhost', 'root' ,'', 'commentform'); // Connect to the commentform 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href="style.css" rel="stylesheet">
    <title>Comments</title>
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th> <!-- Table headers -->
      <th scope="col">Date</th>
      <th scope="col">Comment</th>
    </tr>
  </thead>
  <tbody>
        <?php    
        $sql = "SELECT * FROM comments"; // MySQL command
        $result = mysqli_query($conn, $sql); // Results of using the command
        if (mysqli_num_rows($result) > 0) { // If there is something saved in the table 'comments' then continue else echo 'No results'
            while($row = mysqli_fetch_assoc($result)) { // It will echo this with different values untill it shows everything in the table
                echo "<tr> <td>".$row['name']."</td> <td>".$row['date']."</td> <td>".$row['text']."</td> </tr>"; // Echoes the output of the table rows
            }
        }else {
            echo "No results.";// If there are no results in the MySQL table it will echo this
        }
        ?>
  </tbody>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>