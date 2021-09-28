<html>

<body>

    <head>
        <meta charset="utf-8">
    </head>
    <?php
    $ifShowForm = empty($_POST['button']);
    if ($ifShowForm) : ?>
        <center>
        <h1>Hello Seller with id:
            <?php
                session_start();
                echo $_SESSION['id'];
                ?>
        </center>
        <br>
        <form action="" method="post">
            <button type="submit" name="exit" formmethod="post" value="!isset">Exit</button>
        </form>
    <?php endif; ?>
</body>

</html>

<head>
    <meta charset="utf-8">
</head>

<body>
    <?php
        if (isset($_POST['exit'])) {
            header("Location: http://localhost/tomer/forwardMain.php");
        }
    ?>
</body>

</html>