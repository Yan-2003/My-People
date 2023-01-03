<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>People</title>
</head>
<body>
    <header class = "head">
        <h1>My people</h1>
    </header>
    <main class = "contents">
        <a href="add.people.php"  class = "add"><h3>Add New</h3></a>
        <table>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Birth date</th>
                <th>Course</th>
                <th>Year level</th>
            </tr>
            <?php require("display.php") ?>
        </table>
    </main>
</body>
</html>