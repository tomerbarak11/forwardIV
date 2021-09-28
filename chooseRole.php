<html>

<body>

    <head>
        <meta charset="utf-8">
    </head>
    <?php
    $ifShowForm = empty($_POST['button']);
    if ($ifShowForm) : ?>
        <center>
            <h1 style="color:blue">Choose a role</h1>
        </center>
        <br>
        <form action="" method="post">
            <br>
            <label for="roles">Choose a role:</label>
            <select name="roles" id="roles">
                <option value="manager">Manager</option>
                <option value="seller">Seller</option>
            </select>
            <br><br>
            <button type="submit" name="button" formmethod="post" value="!isset">Submit</button>
            <button type="submit" name="exit" formmethod="post" value="!isset">Exit</button>
        </form>
    <?php endif; ?>
</body>

</html>

<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    <?php
        if (isset($_POST['exit'])) {
            header("Location: http://localhost/tomer/forwardMain.php");
        }
    if (isset($_POST['button'])) {
        if ($_POST['roles'] == 'manager') {
            header("Location: http://localhost/tomer/manager.php");
            echo "Hello Manager!";
        } else if ($_POST['roles'] == 'seller') {
            header("Location: http://localhost/tomer/seller.php");
            echo "Hello Seller!";
        }
    }
    ?>
</body>

</html>