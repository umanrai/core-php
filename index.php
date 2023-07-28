<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">
    <title>Sample Form</title>
</head>
<body>

<main>
    <form action="includes/formhandler.php" method="POST">
        <label for="firstname">Firstname?</label>
        <input type="text" id="firstname" name="firstname" placeholder="Firstname..." required><br><br>

        <label for="lastname">Lastname?</label>
        <input type="text" id="lastname" name="lastname" placeholder="Lastname..." required><br><br>

        <label for="favouritepet">Favourite Pet?</label>
        <select id="favouritepet" name="favouritepet">
            <option value="none">None</option>
            <option value="dog">Dog</option>
            <option value="cat">Cat</option>
            <option value="bird">Bird</option>
        </select>

        <button type="submit">Submit</button>
    </form>

</main>

</body>
</html>
