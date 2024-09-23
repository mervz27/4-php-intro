<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="conditional.php" method="post">
        <label for="grade">Input student grade</label>
        <input type="number" name="grade" min="1" max="100" id="">
        <input type="submit" value="Submit">
    </form> -->

    <!-- <form action="conditional.php" method="POST">
        <label for="isAdmin">User Type</label>
        <input type="radio" name="isAdmin" value="1"><label>Admin</label>
        <input type="radio" name="isAdmin" value="0"><label>Regular user</label>
        <input type="submit" value="Submit">
    </form> -->
    <?php 
        $isAdmin = 1;
    ?>
    <h1><?php echo ($isAdmin ? "Welcome Back" : "Please Login") ?></h1>

    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $message = "";
            // if($_POST["isAdmin"]){
            //     $message = "Welcome Back";
            // } else {
            //     $message = "Please Login";
            // }
            //condition                     value if true     value if false
            $message = ($_POST["isAdmin"] ? "Welcome Back" : "Please Login");
            // echo $message;
        }
    ?>
</body>
</html>