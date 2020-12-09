<?php
include './includes/newclass.inc.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>Document</title>
</head>

<body>

    <?php
    $object = new NewClass;
    unset($object);
    echo $object->getProperty();
    ?>

</body>

</html>