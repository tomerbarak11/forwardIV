<html>
<body>
    <head>
        <meta charset="utf-8">
    </head>
    <?php
    $ifShowForm = empty($_POST['button']);
    if ($ifShowForm) : ?>
        <center>
            <h1 style="color:blue">Forward's Workers System - Login Page</h1>
        </center>
        <br>
        <form action="" method="post">
            <br>
            ID <input type="text" name="id"><br>
            <br>
            <button type="submit" name="button" formmethod="post" value="!isset">Enter</button>
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
    if (isset($_POST['button'])) {
        session_start();
        $id = $_POST['id'];
        $_SESSION['id'] = $id;

        if (ifIdExist($id)) {
            header("Location: http://localhost/tomer/chooseRole.php");
        }
        else{
            echo "This ID does not exist";
        }
    }
    
    
    function ifIdExist($id)
    {
        $wrong = "";
        if(!$id || $id ==""){
            return false;
        }
        return true;
    }
    ?>

</body>

</html>