<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cupcakes</title>
</head>
<body>
    <form method="post" action="process.php">
    <h1>Cupcake Fundraiser</h1>
        <label>Your name:<br><input type="text" name="name"></label>
        <p>Cupcake flavors:</p>
        <label><input type="checkbox" value="grasshopper" name="flavor[]">The Grasshopper</label><br>
        <label><input type="checkbox" value="whiskey" name="flavor[]">Whiskey Maple Bacon</label><br>
        <label><input type="checkbox" value="carrot" name="flavor[]">Carrot Walnut</label><br>
        <label><input type="checkbox" value="caramel" name="flavor[]">Salted Caramel Cupcake</label><br>
        <label><input type="checkbox" value="velvet" name="flavor[]">Red Velvet</label><br>
        <label><input type="checkbox" value="lemon" name="flavor[]">Lemon Drop</label><br>
        <label><input type="checkbox" value="tiramisu" name="flavor[]">Tiramisu</label><br>
        <input type="submit" value="Order">
    </form>
</body>
</html>