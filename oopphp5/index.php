<?php

// declare(strict_types=1) is used to make sure we can set the type of variables.
// this is used when strict types are needed and to make sure the right types are used.
declare(strict_types=1);
include './includes/autoloader.inc.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>

    <?php
    // here we are using a namespace infront of the Person class.
    // using a try-catch to check if it is the right type we use when .
    try {
        $person1 = new Person\Person("Daniel", 28);
        echo $person1->getPerson();
    } catch (TypeError $e) {
        echo "Error!: " . $e->getMessage();
    }

    echo "<br>";

    $house1 = new House("Johndoeroad", 12);
    echo $house1->getAddress();

    ?>

</body>

</html>