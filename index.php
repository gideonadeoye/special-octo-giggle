<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/styles/style.css">
</head>
<body>
    <div class="container">
    <h3>Create Account</h3>

<form action="includes/formhandler.inc.php" method="post">
    <input type="text" name="username" id="" placeholder="Username">
    <input type="password" name="pwd" id="" placeholder="Password">
    <input type="text" name="email" id="" placeholder="E-Mail">
    <button >Sign-UP</button>
</form>

        <h3>Change Account</h3>

    <form action="includes/userupdate.inc.php" method="post">
        <input type="text" name="username" id="" placeholder="Username">
        <input type="password" name="pwd" id="" placeholder="Password">
        <input type="text" name="email" id="" placeholder="E-Mail">
        <button >Update</button>
    </form>
    <h3>Change Account</h3>

    <form action="includes/userupdate.inc.php" method="post">
        <input type="text" name="username" id="" placeholder="Username">
        <input type="password" name="pwd" id="" placeholder="Password">
        <input type="text" name="email" id="" placeholder="E-Mail">
        <button >Update</button>
    </form>


    <h3>Delete Account</h3>

    <form action="includes/userdelete.inc.php" method="post">
        <input type="text" name="username" id="" placeholder="Username">
        <input type="password" name="pwd" id="" placeholder="Password">
        <button >Delete</button>
    </form>


    <h3>Scearch Account</h3>

    <form  action="search.php" method="post">
        <label for="search">Scearch for user:</label>
        <input type="text" name="usersearch" id="scearch" placeholder="Search...">
        <button>Scearch</button>
    </form>
    </div>



</body>
</html>