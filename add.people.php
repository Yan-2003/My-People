<?php require("check.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Add People</title>
</head>
<body>
    <header class = "head">
        <h1>My people</h1>
    </header>
    <main class="contents">
        <a href="index.php"  class = "add"><h3>Back</h3></a>

        <form class = "create--box" method="post">
            <p class="error"><?php echo "$error";?></p>
            <p class="success"><?php echo "$success";?></p>
            <h4>Full name:</h4><input class = "type--box" type="text" name="Fname" placeholder="Full name">
            <h4>Username:</h4><input class = "type--box" type="text" name="username" placeholder="username">
            <h4>Age:</h4><input class = "type--box" type="number" name="age" placeholder="Age">
            <h4>Course:</h4><input class = "type--box" type="text" name="course" placeholder="Course">
            <h4>Year:</h4><input class = "type--box" type="number" name="year" placeholder="Year Level">
            <h4>Birth Date:</h4><input class = "type--box" type="date" name="bday" placeholder="Birth Date">
            <button class="add" type="submit" name = "submit"><h4>Submit</h4></button>
            
        </form>
    </main>
    
</body>
</html>