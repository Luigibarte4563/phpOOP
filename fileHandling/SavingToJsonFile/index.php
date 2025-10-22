<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello this is for to input you're name and email bruh</h1>
    <form action="file.php" method="POST">
        <label for="name">Name:</label><br>
        <input type="text" name="name" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" name="email" required><br><br>

        <button type="submit">Save to File</button>
    </form>
</body>
</html>