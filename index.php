<?php require_once('navbar.php');?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Comment form</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <form action="redirect.php" method="post"> <!-- Form that sends the information to redirect.php -->
        <div class="centerdiv">
            <h1 class="fw-bold">Place comment</h1>

            <label for="nameInput" class="form-label">Name </label>
            <input type="text" name="name" id="nameInput" class="form-control" required>

            <label for="emailInput" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="emailInput" required>


            <label for="commentInput" class="form-label">Text</label>
            <textarea rows="3" name="text" id="commentInput" class="form-control" maxlength="150" required></textarea>

            <label for="date">Date</label>
            <input name="date" id="date" type="date" class="form-control" required>

            <button type="submit" class="btn btn-secondary">Send comment</button>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>