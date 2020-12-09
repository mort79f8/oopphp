<?php
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
    $person1 = new Person\Person("Daniel", 28);
    echo $person1->getPerson();

    echo "<br>";

    $house1 = new House("Johndoeroad", 12);
    echo $house1->getAddress();

    ?>

</body>

</html>