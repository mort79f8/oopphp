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
    $person1 = new Person();
    $person1->setName("Daniel");
    echo $person1->name;

    echo '<br>';

    $person2 = new Person();
    $person2->setName("James");
    echo $person2->name;
    ?>

</body>

</html>