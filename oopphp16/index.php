<?php
include 'includes/class-autoload.inc.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $usersObj = new UsersView();
    $usersObj->showUser("Daniel");

    $usersObj2 = new UsersContr();
    $usersObj2->createUser("Jane", "Doe", "1834-05-11");
    ?>
</body>

</html>