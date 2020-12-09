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
    $person2 = new Person("Jens", "Red", 15);
    echo $person1->getName();
    echo $person1->getDA();

</body>

</html>