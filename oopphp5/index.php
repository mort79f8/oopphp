<?php
include 'includes/person.inc.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>

    <?php
    $person1 = new Person("Daniel", "Blue", 28);
    echo $person1->getName();
    ?>

</body>

</html>